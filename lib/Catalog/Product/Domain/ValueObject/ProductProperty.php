<?php
declare(strict_types=1);
namespace App\Catalog\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductProperty
{
    private function __construct(
        private readonly string $name,
        private readonly string $code,
        private readonly PropertyValue $value
    ) {}


    /**
     * Creates a ProductProperty instance.
     * 
     * @param string $name
     * @param string $code
     * @param string|int|float|bool|list<string|int|float|bool> $value
     * 
     * @return self
    */
    public static function fromNative(
        string $name,
        string $code,
        string|int|float|bool|array $value
    ): self
    {
        $name = trim($name);
        $code = trim($code);

        if ($name === '')
        {
            throw new InvalidArgumentException('Product property name cannot be empty.');
        }

        if ($code === '')
        {
            throw new InvalidArgumentException('Product property code cannot be empty.');
        }

        return new self(
            $name, 
            $code, 
            PropertyValue::fromNative($value)
        );
    }


    /**
     * Returns the name of the product property.
     * 
     * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * Returns the code of the product property.
     * 
     * @return string
    */
    public function getCode(): string
    {
        return $this->code;
    }


    /**
     * Returns the value of the product property.
     * 
     * @return string|int|float|bool|list<string|int|float|bool>
    */
    public function getValue(): string|int|float|bool|array
    {
        return $this->value->getValue();
    }


    /**
     * Returns the PropertyValue object of the product property.
     * 
     * @return PropertyValue
    */
    public function getValueObject(): PropertyValue
    {
        return $this->value;
    }
}
