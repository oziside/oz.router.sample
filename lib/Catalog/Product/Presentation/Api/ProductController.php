<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Api;

use OpenApi\Attributes as OA;

use Bitrix\Main\{
    Validation\Rule
};

use App\Catalog\Product\Application\{
    UseCase\GetProduct
};


final class ProductController
{
    public function __construct(
        private readonly GetProduct\Handler $getProduct
    ) {}


    #[OA\Get(
        tags: ['Products'],
        path: '/product/{id}',
        summary: 'Получение информации о товаре',
        operationId: 'getProduct',
        parameters: [
            new OA\Parameter(
                name    : 'id',
                in      : 'path',
                required: true,
                schema  : new OA\Schema(
                    type: 'integer',
                    minimum: 1
                )
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Товар найден',
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
