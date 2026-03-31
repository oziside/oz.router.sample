<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property;

use App\Shared\Infrastructure\Bitrix\Iblock\Property\{
    Resolver
};


final class PropertyValueNormalizer
{
    /**
     * Normalizes the property values based on their type.
     * 
     * @param list<array<string, mixed>> $rows
     *
     * @return string|int|float|list<string|int|float>|null
     */
    public function normalize(
        PropertyType $propertyType, 
        bool $multiple, 
        array $rows
    ): string|int|float|array|null
    {
        $resolvers = $this->getResolvers();

        foreach ($resolvers as $resolver)
        {
            if ($resolver->supports($propertyType))
            {
                return $resolver->resolve($multiple, $rows);
            }
        }

        return null;
    }


    /**
     * Returns the list of available resolvers.
     * 
     * @return list<StringValueResolver|NumberValueResolver|ListValueResolver>
    */
    private function getResolvers(): array
    {
        return [
            new Resolver\StringValueResolver,
            new Resolver\NumberValueResolver,
            new Resolver\ListValueResolver
        ];
    }
}
