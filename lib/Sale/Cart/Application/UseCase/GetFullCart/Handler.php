<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\GetFullCart;

use App\Sale\Cart\{
    Domain\Repository,
    Application\Dto,
    Application\Mapper
};


final class Handler
{
    public function __construct(
        private readonly Repository\CartRepository $repository
    ) {}


    /**
     * Returns the current user's cart.
     * 
     * @return Dto\CartDto
    */
    public function exec(): Dto\CartDto
    {
        $currentCart = $this->repository->getCurrent();

        return Mapper\CartMapper::toDto($currentCart);
    }
}
