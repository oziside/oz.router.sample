<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\ValueObject;

use InvalidArgumentException;


final class ProductId
{
    private function __construct(
        private readonly int $value
    ) {}


    public static function fromInt(int $value): self
    {
        if ($value <= 0)
        {
            throw new InvalidArgumentException('Cart item product id must be greater than zero.');
        }

        return new self($value);
    }


    public function getValue(): int
    {
        return $this->value;
    }


    public function equals(self $id): bool
    {
        return $this->value === $id->value;
    }
}
