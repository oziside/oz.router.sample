<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\AddToCart;

use App\Sale\Cart\Domain\Repository;


final class Handler
{
    public function __construct(
        private readonly Repository\CartRepository $repository
    ) {}


    /**
     * Add product to Cart
     * 
     * @param Command $command
     * 
     * @return void 
    */
    public function exec(
        Command $command
    ): void
    {
        $this->repository->addProduct(
            productId: $command->productId,
            quantity : $command->quantity
        );
    }
}
