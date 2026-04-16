<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\ClearCart;

use App\Sale\Cart\Domain\Repository;


final class Handler
{
    public function __construct(
        private readonly Repository\CartRepository $repository
    ) {}


    /**
     * Clear all items from cart
     * 
     * @return void
    */
    public function exec(): void
    {
        $this->repository->clear();
    }
}
