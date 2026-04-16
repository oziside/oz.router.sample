<?php
declare(strict_types=1);
namespace App\Sale\Cart\Infrastructure\Persistence\Bitrix;

use App\Sale\Cart\Domain\Aggregate;
use App\Sale\Cart\Domain\Entity;
use Bitrix\Sale\Basket;


final class CartMapper
{
    /**
     * --
     * 
     * @param Basket $basket
     * 
     * @return Aggregate\Cart
    */
    public static function toCartEntity(
        Basket $basket
    ): Aggregate\Cart
    {
        $items = [];

        /** @var \Bitrix\Sale\BasketItemBase $basketItem */
        foreach ($basket as $basketItem)
        {
            $items[] = Entity\CartItem::restore(
                productId    : $basketItem->getProductId(),
                quantity     : $basketItem->getQuantity(),
                productName  : (string)$basketItem->getField('NAME'),
                price        : $basketItem->getPrice(),
                discountPrice: $basketItem->getDiscountPrice(),
                measureName  : (string)$basketItem->getField('MEASURE_NAME'),
                currency     : $basketItem->getCurrency(),
                weight       : (float)$basketItem->getWeight()
            );
        }

        return Aggregate\Cart::restore($items);
    }
}
