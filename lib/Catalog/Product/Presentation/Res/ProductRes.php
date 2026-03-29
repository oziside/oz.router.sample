<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Res;

use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;


#[OA\Schema(
    required: [
        'name',
        'active',
        'slug',
        'description',
        'measure',
        'dimensions',
        'weight',
        'properties'
    ]
)]
#[JsonResource]
final class ProductRes
{
    public function __construct(
        #[OA\Property(
            description: 'Название товара',
            example: 'Teddy Bear'
        )]
        public readonly string $name,


        #[OA\Property(
            description: 'Активность товара',
            example: true
        )]
        public readonly bool $active,


        #[OA\Property(
            description: 'Символьный код товара',
            example: 'teddy-bear'
        )]
        public readonly string $slug,


        #[OA\Property(
            description: 'Описание товара',
            example: 'Soft teddy bear for kids'
        )]
        public readonly string $description,


        #[OA\Property(
            description: 'Единица измерения товара',
            ref: ProductMeasureRes::class
        )]
        public readonly ProductMeasureRes $measure,


        #[OA\Property(
            description: 'Габариты товара',
            ref: ProductDimensionsRes::class
        )]
        public readonly ProductDimensionsRes $dimensions,


        #[OA\Property(
            description: 'Вес товара',
            format: 'float',
            example: 0.8
        )]
        public readonly float $weight,


        #[OA\Property(
            description: 'Свойства товара',
            type: 'array',
            items: new OA\Items(
                ref: ProductPropertyRes::class
            )
        )]
        public readonly array $properties
    ) {}
}
