<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Api\Res;

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
    /**
     * @param string|int|float|bool|list<string|int|float|bool> $value
     */
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
            oneOf: [
                new OA\Schema(type: 'string'),
                new OA\Schema(type: 'integer'),
                new OA\Schema(type: 'number', format: 'float'),
                new OA\Schema(type: 'boolean'),
                new OA\Schema(
                    type: 'array',
                    items: new OA\Items(
                        oneOf: [
                            new OA\Schema(type: 'string'),
                            new OA\Schema(type: 'integer'),
                            new OA\Schema(type: 'number', format: 'float'),
                            new OA\Schema(type: 'boolean'),
                        ]
                    )
                ),
            ],
            example: 'Красный'
        )]
        public readonly string|int|float|bool|array $value
    ) {}
}
