<?php
declare(strict_types=1);
namespace App\Sale\Cart\Application\Dto;

final class CartDto
{
    /**
     * @param list<CartItemDto> $items
    */
    public function __construct(
        public readonly array $items,
        public readonly float $total
    ) {}
}
