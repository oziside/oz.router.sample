<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property\Resolver;

use App\Shared\Infrastructure\Bitrix\Iblock\Property\{
    PropertyType
};


final class StringValueResolver
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
        return $propertyType === PropertyType::STRING;
    }

    
    /**
     * Resolves the values for the given rows.
     * 
     * @param list<array<string, mixed>> $rows
     *
     * @return string|list<string>|null
     */
    public function resolve(
        bool $multiple, 
        array $rows
    ): string|array|null
    {
        $values = $this->collectValues($rows, 'VALUE');

        if ($values === [])
        {
            return null;
        }

        return $multiple ? $values : $values[0];
    }


    /**
     * Collects values from the given rows 
     * based on the specified field.
     * 
     * @param list<array<string, mixed>> $rows
     *
     * @return list<string>
     */
    private function collectValues(
        array $rows, 
        string $field
    ): array
    {
        $values = [];

        foreach ($rows as $row)
        {
            $value = $row[$field] ?? null;

            if($value === null)
            {
                continue;
            }

            $value = trim((string)$value);

            if($value === '')
            {
                continue;
            }

            $values[] = $value;
        }

        return $values;
    }
}
