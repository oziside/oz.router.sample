<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\Mapper;

use App\Sale\Cart\{
    Domain\Aggregate,
    Domain\Entity,
    Application\Dto
};


final class CartMapper
{
    /**
     * --
     * 
     * @param Aggregate\Cart $cart
     * 
     * @return Dto\CartDto
    */
    public static function toDto(
        Aggregate\Cart $cart
    ): Dto\CartDto
    {
        return new Dto\CartDto(
            items: array_map([self::class, 'toItemDto'], $cart->getItems()),
            total: $cart->getTotalQuantity()
        );
    }


    /**
     * --
     * 
     * @param Entity\CartItem $item
     * 
     * @return Dto\CartItemDto
    */
    private static function toItemDto(
        Entity\CartItem $item
    ): Dto\CartItemDto
    {
        return new Dto\CartItemDto(
            productId: $item->getProductId(),
            quantity : $item->getQuantity(),
            productName: $item->getProductName(),
            price: $item->getPrice(),
            discountPrice: $item->getDiscountPrice(),
            measureName: $item->getMeasureName(),
            currency: $item->getCurrency(),
            weight: $item->getWeight()
        );
    }
}
