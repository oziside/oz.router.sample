<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property\Resolver;

use App\Shared\Infrastructure\Bitrix\Iblock\Property\{
    PropertyType
};


final class ListValueResolver
{
    /**
     * Checks if the resolver supports the given property type.
     *
     * @param PropertyType $propertyType
     *
     * @return bool
     */
    public function supports(
        PropertyType $propertyType
    ): bool
    {
        return $propertyType === PropertyType::LIST;
    }

    /**
     * Resolves the values for the given rows.
     * 
     * @param bool $multiple
     * @param list<array<string, mixed>> $rows
     *
     * @return string|list<string>|null
     */
    public function resolve(
        bool $multiple, 
        array $rows
    ): string|array|null
    {
        $values = [];

        foreach ($rows as $row)
        {
            $value = $row['VALUE_ENUM'] ?? $row['VALUE'] ?? null;

            if ($value === null)
            {
                continue;
            }

            $value = trim((string)$value);

            if ($value === '')
            {
                continue;
            }

            $values[] = $value;
        }

        if ($values === [])
        {
            return null;
        }

        return $multiple ? $values : $values[0];
    }
}
