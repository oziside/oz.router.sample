<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\Repository;

use App\Sale\Cart\Domain\Aggregate;


interface CartRepository
{
    public function getCurrent(): Aggregate\Cart;

    public function addProduct(int $productId, int $quantity): void;

    public function removeProduct(int $productId): void;

    public function clear(): void;
}
