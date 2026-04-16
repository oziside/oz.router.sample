<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api\Res;

use OpenApi\Attributes as OA;


#[OA\Schema(
    required: [
        'price',
        'discount',
        'currency',
    ]
)]
class CartPriceRes
{
    public function __construct(
        #[OA\Property(
            description: 'Стоимость товара',
            example: 123.50
        )]
        public float $price,
        

        #[OA\Property(
            description: 'Значение скидки',
            example: 13.50
        )]
        public float $discount,


        #[OA\Property(
            description: 'Валюта цены',
            example: 'RUB'
        )]
        public string $currency,
    ) {}
}