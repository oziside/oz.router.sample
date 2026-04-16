<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api\Res;

use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;


#[OA\Schema(
    required: [
        'id',
        'productId',
        'name',
        'price',
        'quantity',
        'measure',
        'weight'
    ]
)]
#[JsonResource]
final class CartItemRes
{
    public function __construct(
        #[OA\Property(
            description: "ID позиции корзины",
            minimum: 1,
            example: 42
        )]
        public int $id,


        #[OA\Property(
            description: "ID Товара",
            minimum: 1,
            example: 12
        )]
        public int $productId,


        #[OA\Property(
            description: "Наименование товара",
            example: "Гвоздь на 200"
        )]
        public string $name,

        
        #[OA\Property(
            description: 'Стоимость товара',
            ref: CartPriceRes::class
        )]
        public CartPriceRes $price,


        #[OA\Property(
            description: "Количество товара",
            minimum: 1,
            example: 2
        )]
        public float $quantity,


        #[OA\Property(
            description: 'Единица измерения',
            example: 'шт'
        )]
        public string $measure,


        #[OA\Property(
            description: 'Вес товара в граммах',
            minimum: 0,
            example: 703
        )]
        public float $weight
    ){}
}
