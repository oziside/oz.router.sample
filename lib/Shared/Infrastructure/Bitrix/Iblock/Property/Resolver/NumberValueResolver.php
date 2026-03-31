<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property\Resolver;

use App\Shared\Infrastructure\Bitrix\Iblock\Property\{
    PropertyType
};


final class NumberValueResolver
{
    /**
     * Checks if the resolver supports the given property type.
     *
     * @param PropertyType $propertyType
     *
     * @return bool
    */
    public function supports(PropertyType $propertyType): bool
    {
        return $propertyType === PropertyType::NUMBER;
    }


    /**
     * Resolves the values for the given rows.
     * 
     * @param bool $multiple
     * @param list<array<string, mixed>> $rows
     *
     * @return int|float|list<int|float>|null
    */
    public function resolve(
        bool $multiple, 
        array $rows
    ): int|float|array|null
    {
        $values = [];

        foreach ($rows as $row)
        {
            $value = $row['VALUE'] ?? null;

            if ($value === null)
            {
                continue;
            }

            if (is_string($value))
            {
                $value = trim($value);
            }

            if ($value === '' || !is_numeric((string)$value))
            {
                continue;
            }

            $values[] = $this->castNumeric($value);
        }

        if ($values === [])
        {
            return null;
        }

        return $multiple ? $values : $values[0];
    }


    /**
     * Casts a value to a numeric type.
     *
     * @param mixed $value
     *
     * @return int|float
    */
    private function castNumeric(mixed $value): int|float
    {
        if (is_int($value))
        {
            return $value;
        }

        if (is_float($value))
        {
            return $value;
        }

        $value = (string)$value;

        if (preg_match('/^-?\d+$/', $value) === 1)
        {
            return (int)$value;
        }

        return (float)$value;
    }
}
