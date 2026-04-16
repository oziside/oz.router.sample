<?php
declare(strict_types=1);
namespace App\Sale\Cart\Infrastructure\Persistence\Bitrix;

use App\Sale\Cart\Domain\Aggregate;
use App\Sale\Cart\Domain\Entity;
use App\Sale\Cart\Domain\ValueObject as VO;
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
            $currency = $basketItem->getCurrency();

            $items[] = Entity\CartItem::restore(
                id          : VO\CartItemId::fromInt($basketItem->getId()),
                productId   : VO\ProductId::fromInt($basketItem->getProductId()),
                quantity    : VO\Quantity::fromFloat($basketItem->getQuantity()),
                productName : VO\ProductName::fromString((string)$basketItem->getField('NAME')),
                unitPrice   : VO\Money::fromAmountAndCurrency($basketItem->getPrice(), $currency),
                unitDiscount: VO\Money::fromAmountAndCurrency($basketItem->getDiscountPrice(), $currency),
                measureName : VO\MeasureName::fromString((string)$basketItem->getField('MEASURE_NAME')),
                weight      : VO\Weight::fromFloat((float)$basketItem->getWeight())
            );
        }

        return Aggregate\Cart::restore($items);
    }
}
