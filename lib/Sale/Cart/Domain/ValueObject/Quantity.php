<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\ValueObject;

use InvalidArgumentException;


final class Quantity
{
    private function __construct(
        private readonly float $value
    ) {}


    public static function fromFloat(float $value): self
    {
        if (!is_finite($value))
        {
            throw new InvalidArgumentException('Cart item quantity must be finite.');
        }

        if ($value <= 0)
        {
            throw new InvalidArgumentException('Cart item quantity must be greater than zero.');
        }

        return new self($value);
    }


    public function getValue(): float
    {
        return $this->value;
    }


    public function multiply(float $value): float
    {
        return $this->value * $value;
    }
}
