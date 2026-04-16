<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api\Req;

use OpenApi\Attributes as OA;
use Bitrix\Main\Validation\Rule;


#[OA\Schema(
    required: [
        'productId',
        'quantity'
    ]
)]
final class AddToCartReq
{
    public function __construct(
        #[OA\Property(
            description: "ID Товара",
            minimum: 1,
            example: 25
        )]
        #[Rule\PositiveNumber]
        public int $productId,


        #[OA\Property(
            description: "Количество",
            minimum: 1,
            example: 1
        )]
        #[Rule\PositiveNumber]
        public int $quantity
    ) {}
}
