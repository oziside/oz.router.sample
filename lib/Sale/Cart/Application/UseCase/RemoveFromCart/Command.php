<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\UseCase\RemoveFromCart;

final class Command
{
    public function __construct(
        public readonly int $productId
    ) {}
}
