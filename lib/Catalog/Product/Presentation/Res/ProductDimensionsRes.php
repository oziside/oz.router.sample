<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Res;

use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;


#[OA\Schema(
    required: [
        'width',
        'length',
        'height',
    ]
)]
#[JsonResource]
final class ProductDimensionsRes
{
    public function __construct(
        #[OA\Property(
            description: 'Ширина товара',
            format: 'float',
            example: 30.5
        )]
        public readonly float $width,

        #[OA\Property(
            description: 'Длина товара',
            format: 'float',
            example: 20.0
        )]
        public readonly float $length,

        #[OA\Property(
            description: 'Высота товара',
            format: 'float',
            example: 15.0
        )]
        public readonly float $height
    ) {}
}
