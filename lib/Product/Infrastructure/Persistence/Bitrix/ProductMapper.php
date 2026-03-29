<?php
declare(strict_types=1);
namespace App\Product\Infrastructure\Persistence\Bitrix;

use App\Product\{
    Domain\Entity,
    Domain\ValueObject as VO,
    Infrastructure\Persistence\Bitrix
};

use App\Shared\{
    Infrastructure\Bitrix\Iblock\Property
};

use Bitrix\Catalog;


final class ProductMapper
{
    /**
     * --
     * 
     * @param Bitrix\ORM\ProductObject $productObject
     * @param Catalog\EO_Measure $measureObject
     * @param list<Property\ElementPropertyData> $properties
     * 
     * @return Entity\Product
    */
    public static function toProductEntity(
        Bitrix\ORM\ProductObject $productObject,
        Catalog\EO_Measure $measureObject,
        array $properties
    ): Entity\Product
    {
        $productMeta = $productObject->getProductMeta();

        $uuidVO = VO\ProductUuid::fromString(
            $productObject->getXmlId()
        );

        $nameVO = VO\ProductName::fromString(
            $productObject->getName()
        );

        $slugVO = VO\ProductSlug::fromString(
            $productObject->getCode()
        );

        $measureVO = VO\ProductMeasure::fromScalars(
            $measureObject->getMeasureTitle() ?: '--',
            $measureObject->getCode()
        );

        $dimensionsVO = VO\ProductDimensions::fromFloats(
            $productMeta->getWidth(),
            $productMeta->getLength(),
            $productMeta->getHeight()
        );

        $propertiesVO = self::restoreProperties($properties);

        return Entity\Product::restore(
            id         : $productObject->getId(),
            uuid       : $uuidVO,
            sectionId  : $productObject->getIblockSectionId(),
            active     : $productObject->getActive(),
            sort       : $productObject->getSort(),
            name       : $nameVO,
            slug       : $slugVO,
            description: $productObject->getDetailText(),
            measure    : $measureVO,
            dimensions : $dimensionsVO,
            weight     : $productMeta->getWeight(),
            properties : $propertiesVO
        );
    }


    /**
     * --
     * 
     * @param list<Property\ElementPropertyData> $properties
     * 
     * @return list<VO\ProductProperty>
    */
    private static function restoreProperties(
        array $properties
    ): array
    {
        $properties = [];

        foreach ($properties as $propertyData)
        {
            if ($propertyData->value === null)
            {
                continue;
            }

            if (
                $propertyData->code === '' || 
                $propertyData->name === ''
            )
            {
                continue;
            }

            $properties[] = VO\ProductProperty::fromNative(
                name: $propertyData->name,
                code: $propertyData->code,
                value: $propertyData->value
            );
        }

        return $properties;
    }
}
