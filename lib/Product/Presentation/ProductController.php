<?php
declare(strict_types=1);
namespace App\Product\Presentation;

use OpenApi\Attributes as OA;

use Bitrix\Main\{
    Validation\Rule
};

use App\Product\Application\{
    UseCase\GetProduct
};


final class ProductController
{
    public function __construct(
        private readonly GetProduct\Handler $getProduct
    ) {}


    #[OA\Get(
        tags: ['Product Controller'],
        path: '/v1/product/{id}',
        summary: 'Получение информации о товаре',
        operationId: 'getProduct',
        parameters: [
            new OA\Parameter(
                name    : 'id',
                in      : 'path',
                required: true,
                schema  : new OA\Schema(type: 'integer')
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                content: new OA\JsonContent(ref: Res\ProductRes::class)
            )
        ]
    )]
    public function getProduct(
        #[Rule\PositiveNumber] int $id
    ): Res\ProductRes
    { 
        $product = $this->getProduct->exec(new GetProduct\Query(
            id: $id
        ));

        return ProductMapper::toProductItem($product);
    }
}
