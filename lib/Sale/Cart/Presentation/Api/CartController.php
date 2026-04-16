<?php
declare(strict_types=1);
namespace App\Sale\Cart\Presentation\Api;

use OpenApi\Attributes as OA;
use Bitrix\Main\Validation\Rule;

use App\Sale\Cart\Application\UseCase\{
    GetFullCart,
    AddToCart,
    ClearCart,
    RemoveFromCart
};


final class CartController
{
    public function __construct(
        private readonly GetFullCart\Handler $getFullCart,
        private readonly AddToCart\Handler $addToCart,
        private readonly ClearCart\Handler $clearCart,
        private readonly RemoveFromCart\Handler $removeFromCart
    ){}


    #[OA\Get(
        tags: ['Cart'],
        path: '/cart/full',
        summary: 'Возвращает полную корзину',
        operationId: 'getFullCart',
        responses: [
            new OA\Response(
                response: 200,
                description: 'Корзина получена',
                content : new OA\JsonContent(ref: Res\FullCartRes::class)
            )
        ]
    )]
    public function getFullCart(): Res\FullCartRes
    {
        return CartMapper::toFullCart(
            $this->getFullCart->exec()
        );
    }


    #[OA\Post(
        tags: ['Cart'],
        path: '/cart',
        summary: 'Добавление товара в корзину',
        operationId: 'addToCart',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                ref: Req\AddToCartReq::class
            )
        ),
        responses: [
            new OA\Response(
                response: 201,
                description: 'Товар добавлен в корзину'
            )
        ]
    )]
    public function addToCart(
        Req\AddToCartReq $req
    ): void
    {
        $this->addToCart->exec(new AddToCart\Command(
            productId: $req->productId,
            quantity: $req->quantity
        ));
    }


    #[OA\Delete(
        tags: ['Cart'],
        path: '/cart/{productId}',
        summary: 'Удаляет товар из корзины',
        operationId: 'removeFromCart',
        parameters: [
            new OA\Parameter(
                name    : 'productId',
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
                response: 204,
                description: 'Товар удален из корзины'
            )
        ]
    )]
    public function removeFromCart(
       #[Rule\PositiveNumber] int $productId
    ): void
    {
        $this->removeFromCart->exec(new RemoveFromCart\Command(
            productId: $productId
        ));
    }


    #[OA\Delete(
        tags: ['Cart'],
        path: '/cart/clear',
        summary: 'Очищает корзину',
        operationId: 'clearCart',
        responses: [
            new OA\Response(
                response: 204,
                description: 'Корзина очищена'
            )
        ]
    )]
    public function clearCart(): void
    {
        $this->clearCart->exec();
    }
}
