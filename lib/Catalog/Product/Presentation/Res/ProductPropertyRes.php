<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Res;

use OpenApi\Attributes as OA;
use Oz\Router\Attribute\JsonResource;


#[OA\Schema(
    required: [
        'name', 
        'code', 
        'value'
    ]
)]
#[JsonResource]
final class ProductPropertyRes
{
    public function __construct(
        #[OA\Property(
            description: 'Наименование свойства',
            example: 'Цвет'
        )]
        public readonly string $name,


        #[OA\Property(
            description: 'Код свойства',
            example: 'color'
        )]
        public readonly string $code,

        
        #[OA\Property(
            description: 'Значение свойства',
            example: 'Красный'
        )]
        public readonly string|int|float|bool|array $value
    ) {}
}
