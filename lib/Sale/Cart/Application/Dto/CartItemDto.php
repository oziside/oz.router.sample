<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\Dto;

final class CartItemDto
{
    public function __construct(
        public readonly int $id,
        public readonly int $productId,
        public readonly float $quantity,
        public readonly string $productName,
        public readonly float $price,
        public readonly float $discountPrice,
        public readonly string $measureName,
        public readonly string $currency,
        public readonly float $weight
    ) {}
}
