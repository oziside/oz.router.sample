<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\ValueObject;

use InvalidArgumentException;


final class MeasureName
{
    private function __construct(
        private readonly string $value
    ) {}


    public static function fromString(string $value): self
    {
        $value = trim($value);

        if ($value === '')
        {
            throw new InvalidArgumentException('Cart item measure name must not be empty.');
        }

        return new self($value);
    }


    public function getValue(): string
    {
        return $this->value;
    }
}
