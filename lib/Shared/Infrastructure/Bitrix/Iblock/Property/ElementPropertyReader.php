<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property;

use App\Shared\Infrastructure\Bitrix\Module\ModuleLoader;


final class ElementPropertyReader
{
    private readonly PropertyValueNormalizer $normalizer;

    public function __construct()
    {
        $this->normalizer = new PropertyValueNormalizer;
    }
    

    /**
     * Reads properties for a given element 
     * in a specified information block.
     * 
     * @param int $iblockId
     * @param int $elementId
     * 
     * @return list<ElementPropertyData>
    */
    public function read(
        int $iblockId, 
        int $elementId
    ): array
    {
        ModuleLoader::requireIblock();

        $properties      = [];
        $propertyBuckets = $this->collectBuckets($iblockId, $elementId);

        foreach ($propertyBuckets as $bucket)
        {
            $properties[] = new ElementPropertyData(
                id  : $bucket['id'],
                code: $bucket['code'],
                name: $bucket['name'],
                type: $bucket['type'],
                multiple: $bucket['multiple'],
                value: $this->normalizer->normalize(
                    propertyType: $bucket['type'],
                    multiple: $bucket['multiple'],
                    rows: $bucket['rows']
                )
            );
        }

        return $properties;
    }

    /**
     * @return list<array{
     *     id: int,
     *     code: string,
     *     name: string,
     *     type: PropertyType,
     *     multiple: bool,
     *     rows: list<array<string, mixed>>
     * }>
     */
    private function collectBuckets(int $iblockId, int $elementId): array
    {
        $buckets = [];

        $result = \CIBlockElement::GetProperty(
            $iblockId,
            $elementId
        );

        while ($row = $result->Fetch())
        {
            $propertyId = (int)$row['ID'];

            if (!isset($buckets[$propertyId]))
            {
                $propertyType = PropertyType::fromStringCode($row['PROPERTY_TYPE']);

                $buckets[$propertyId] = [
                    'id'       => $propertyId,
                    'code'     => $row['CODE'],
                    'name'     => $row['NAME'],
                    'type'     => $propertyType,
                    'multiple' => $row['MULTIPLE'] === 'Y',
                    'rows'     => [],
                ];
            }

            $buckets[$propertyId]['rows'][] = $row;
        }

        return array_values($buckets);
    }
}
