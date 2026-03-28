<?php
declare(strict_types=1);
namespace App\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductName
{
    private function __construct(
        private readonly string $value
    ) {}


    /**
     * Creates a ProductName instance from a string.
     * 
     * @param string $value    
     * 
     * @return self
    */
    public static function fromString(string $value): self
    {
        $value = trim($value);

        if ($value === '')
        {
            throw new InvalidArgumentException('Product name cannot be empty.');
        }

        return new self($value);
    }


    /**
     * Returns the value of the product name.
     * 
     * @return string
    */
    public function getValue(): string
    {
        return $this->value;
    }
}
