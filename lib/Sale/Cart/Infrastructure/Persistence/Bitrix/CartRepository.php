<?php
declare(strict_types=1);
namespace App\Sale\Cart\Infrastructure\Persistence\Bitrix;

use App\Sale\Cart\Domain\Aggregate;
use App\Sale\Cart\Domain\Repository;
use App\Shared\Infrastructure\Bitrix\Module;
use App\Shared\Infrastructure\Bitrix\Site\CurrentSiteProvider;
use App\Shared\Infrastructure\Bitrix\Visitor\CurrentVisitorProvider;

use Bitrix\Main;
use Bitrix\Sale\Basket;
use Bitrix\Catalog\Product\Basket as CatalogBasket;

use RuntimeException;


final class CartRepository implements Repository\CartRepository
{
    public function __construct(
        private readonly CurrentSiteProvider $currentSite,
        private readonly CurrentVisitorProvider $currentVisitor
    ) {}


    /**
     * Returns the current visitor's cart
     * 
     * @return Aggregate\Cart
    */
    public function getCurrent(): Aggregate\Cart
    {
        return CartMapper::toCartEntity(
            $this->loadCurrentBasket()
        );
    }


    /**
     * Adds a product to the cart.
     * 
     * @param int $productId
     * @param int $quantity
     * 
     * @return void
    */
    public function addProduct(
        int $productId,
        int $quantity
    ): void
    {
        $basket = $this->loadCurrentBasket();

        $this->assertSuccessful(
            CatalogBasket::addProductToBasket(
                basket : $basket,
                fields : [
                    'PRODUCT_ID' => $productId,
                    'QUANTITY'   => $quantity,
                ],
                context: [
                    'SITE_ID' => $this->currentSite->getSiteId(),
                ],
                options: [
                    'USE_MERGE' => 'Y',
                ]
            ),
            'Failed to add product to cart.'
        );

        $this->assertSuccessful(
            $basket->save(),
            'Failed to save cart after product addition.'
        );
    }


    /**
     * Removes a product from the cart
     * 
     * @param int $productId
     * 
     * @return void
    */
    public function removeProduct(
        int $productId
    ): void
    {
        $basket = $this->loadCurrentBasket();
        $items  = $basket->getExistsItems('catalog', $productId, null);

        foreach ($items as $basketItem)
        {
            $this->assertSuccessful(
                $basketItem->delete(),
                'Failed to delete cart item.'
            );
        }

        if ($items === [])
        {
            return;
        }

        $this->assertSuccessful(
            $basket->save(),
            'Failed to save cart after item deletion.'
        );
    }


    /**
     * Removes all products from the cart
     * 
     * @param int $productId
     * 
     * @return void
    */
    public function clear(): void
    {
        $basket = $this->loadCurrentBasket();

        if ($basket->isEmpty())
        {
            return;
        }

        $basket->clearCollection();

        $this->assertSuccessful(
            $basket->save(),
            'Failed to save cart after clearing.'
        );
    }


    /**
     * Loads current visitor cart
     * 
     * @return Basket
    */
    private function loadCurrentBasket(): Basket
    {
        Module\ModuleLoader::requireSale();

        $basket = Basket::loadItemsForFUser(
            $this->currentVisitor->getVisitorId(),
            $this->currentSite->getSiteId()
        );

        return $basket;
    }


    private function assertSuccessful(
        Main\Result $result,
        string $message
    ): void
    {
        if ($result->isSuccess())
        {
            return;
        }

        $messages = [];

        foreach ($result->getErrors() as $error)
        {
            $messages[] = $error->getMessage();
        }

        throw new RuntimeException(trim($message . ' ' . implode(' ', $messages)));
    }
}
