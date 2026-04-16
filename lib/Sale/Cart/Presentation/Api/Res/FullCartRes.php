<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api\Res;

use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;


#[OA\Schema(
    required: [
        'list',
        'total'
    ]
)]
#[JsonResource]
final class FullCartRes
{
    public function __construct(
        #[OA\Property(
            description: "Список товаров",
            type: 'array',
            items: new OA\Items(ref: CartItemRes::class) 
        )]
        public array $list,


        #[OA\Property(
            description: "Общее количество",
            minimum: 0,
            example: 12
        )]
        public float $total
    ) {}
}
