<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\ValueObject;

use InvalidArgumentException;


final class Weight
{
    private function __construct(
        private readonly float $value
    ) {}


    public static function fromFloat(float $value): self
    {
        if (!is_finite($value))
        {
            throw new InvalidArgumentException('Cart item weight must be finite.');
        }

        if ($value < 0)
        {
            throw new InvalidArgumentException('Cart item weight must not be negative.');
        }

        return new self($value);
    }


    public function getValue(): float
    {
        return $this->value;
    }
}
