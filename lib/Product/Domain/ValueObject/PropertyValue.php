<?php
declare(strict_types=1);
namespace App\Product\Domain\ValueObject;

use InvalidArgumentException;


final class PropertyValue
{
    private function __construct(
        private string|int|float|bool|array $value
    )
    {
        $this->value = $value;
    }

    /**
     * Creates a new instance from a native value.
     * 
     * @param string|int|float|bool|list<string|int|float|bool> $value
     * 
     * @return self
    */
    public static function fromNative(
        string|int|float|bool|array $value
    ): self
    {
        if (is_array($value))
        {
            return new self(self::normalizeList($value));
        }

        return new self(self::normalizeScalar($value));
    }

    /**
     * Returns the native value.
     * 
     * @return string|int|float|bool|list<string|int|float|bool>
    */
    public function getValue(): string|int|float|bool|array
    {
        return $this->value;
    }


    /**
     * Checks if the value is a list.
     * 
     * @return bool
    */
    public function isMultiple(): bool
    {
        return is_array($this->value);
    }


    /**
     * Normalizes an array value by validating that it's a list 
     * and that all items are scalar values.
     * 
     * @param array<mixed> $value
     * 
     * @return list<string|int|float|bool>
     */
    private static function normalizeList(
        array $value
    ): array
    {
        if (!array_is_list($value))
        {
            throw new InvalidArgumentException('Product property array value must be a list.');
        }

        if ($value === [])
        {
            throw new InvalidArgumentException('Product property array value cannot be empty.');
        }

        $normalized = [];

        foreach ($value as $item)
        {
            if (!is_string($item) && !is_int($item) && !is_float($item) && !is_bool($item))
            {
                throw new InvalidArgumentException('Product property array value must contain only scalar items.');
            }

            $normalized[] = self::normalizeScalar($item);
        }

        return $normalized;
    }


    /**
     * Normalizes a scalar value by trimming it if it's a string 
     * and validating that it's not empty.
     * 
     * @param string|int|float|bool $value
     * 
     * @return string|int|float|bool
     */
    private static function normalizeScalar(
        string|int|float|bool $value
    ): string|int|float|bool
    {
        if (is_string($value))
        {
            $value = trim($value);

            if ($value === '')
            {
                throw new InvalidArgumentException('Product property value cannot be empty.');
            }
        }

        return $value;
    }
}
