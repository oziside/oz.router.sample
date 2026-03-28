<?php
declare(strict_types=1);
namespace App\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductUuid
{
    private function __construct(
        private readonly string $value
    ) {}


    /**
     * Creates a ProductUuid instance from a string.
     *
     * @param string $value
     * 
     * @return self
    */
    public static function fromString(string $value): self
    {
        $pattern = '/^[0-9a-f]{8}-[0-9a-f]{4}-[1-8][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i';
        $value   = trim($value);

        if ($value === '')
        {
            throw new InvalidArgumentException('Product uuid cannot be empty.');
        }

        if (!preg_match($pattern, $value))
        {
            throw new InvalidArgumentException('Product uuid must be a valid UUID string.');
        }

        return new self(strtolower($value));
    }


    /**
     * Returns the string representation of the product UUID.
     * 
     * @return string
    */
    public function getValue(): string
    {
        return $this->value;
    }
}
