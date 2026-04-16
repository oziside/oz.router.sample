<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api;

use App\Sale\Cart\Application\Dto;


final class CartMapper
{
    /**
     * --
     * 
     * @param Dto\CartDto $dto
     * 
     * @return Res\FullCartRes
    */
    public static function toFullCart(
        Dto\CartDto $dto
    ): Res\FullCartRes
    {
        return new Res\FullCartRes(
            list : array_map([self::class, 'toCartItem'], $dto->items),
            total: $dto->total
        );
    }


    /**
     * --
     * 
     * @param Dto\CartItemDto $item
     * 
     * @return Res\CartItemRes
    */
    public static function toCartItem(
        Dto\CartItemDto $dto
    ): Res\CartItemRes
    {
        $priceRes = new Res\CartPriceRes(
            price: $dto->price,
            discount: $dto->discountPrice,
            currency: $dto->currency
        );

        return new Res\CartItemRes(
            productId: $dto->productId,
            name     : $dto->productName,
            price    : $priceRes,
            quantity : $dto->quantity,
            measure  : $dto->measureName,
            weight   : $dto->weight,
        );
    }
}
