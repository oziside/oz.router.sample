<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Api\Res;


use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;

#[OA\Schema(
    required: [
        'name',
        'code',
    ]
)]
#[JsonResource]
final class ProductMeasureRes
{
    public function __construct(
        #[OA\Property(
            description: 'Наименование единицы измерения',
            example: 'Штука'
        )]
        public readonly string $name,

        #[OA\Property(
            description: 'Код единицы измерения',
            example: 798
        )]
        public readonly int $code
    ) {}
}
