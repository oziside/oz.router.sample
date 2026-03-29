<?php
declare(strict_types=1);
namespace App\Catalog\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductSlug
{
    private function __construct(
        private readonly string $value
    ) {}


    /**
     * Creates a ProductSlug instance from a string.
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
            throw new InvalidArgumentException('Product slug cannot be empty.');
        }

        return new self($value);
    }


    /**
     * Returns the value of the product slug.
     * 
     * @return string
    */
    public function getValue(): string
    {
        return $this->value;
    }
}
