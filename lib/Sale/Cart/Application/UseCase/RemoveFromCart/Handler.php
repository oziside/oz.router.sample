<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\RemoveFromCart;

use App\Sale\Cart\Domain\Repository;


final class Handler
{
    public function __construct(
        private readonly Repository\CartRepository $repository
    ) {}


    /**
     * Removes item from cart
     * 
     * @return void
    */
    public function exec(
        Command $command
    ): void
    {
        $this->repository->removeProduct($command->productId);
    }
}
