<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\AddToCart;


final class Command
{
    public function __construct(
        public readonly int $productId,
        public readonly int $quantity
    ) {}
}
