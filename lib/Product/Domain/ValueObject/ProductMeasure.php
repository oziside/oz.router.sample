<?php
declare(strict_types=1);
namespace App\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductMeasure
{
    private function __construct(
        private readonly string $name,
        private readonly int $code
    ) {}


    /**
     * Creates a ProductMeasure instance from strings.
     *
     * @param string $name
     * @param int $code
     * 
     * @return self
    */
    public static function fromScalars(
        string $name, 
        int $code
    ): self
    {
        $name = trim($name);

        if ($name === '')
        {
            throw new InvalidArgumentException('Product measure name cannot be empty.');
        }

        if ($code <= 0)
        {
            throw new InvalidArgumentException('Product measure code must be a positive integer.');
        }

        return new self($name, $code);
    }


    /**
     * Returns the name of the product measure.
     * 
     * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Returns the code of the product measure.
     * 
     * @return int
    */
    public function getCode(): int
    {
        return $this->code;
    }
}
