<?php
declare(strict_types=1);
namespace App\Product\Application\Mapper;

use App\Product\{
    Domain\Entity,
    Domain\ValueObject as VO,
    Application\Dto
};


final class ProductMapper
{
    /**
     * --
     * 
     * @param Entity\Product $product
     * 
     * @return Dto\ProductDto
    */
    public static function toDto(
        Entity\Product $product
    ): Dto\ProductDto
    {
        $properties = self::toPropertyDtoList(
            $product->getProperties()
        ); 

        return new Dto\ProductDto(
            id         : $product->getId(),
            sectionId  : $product->getSectionId(),
            active     : $product->isActive(),
            sort       : $product->getSort(),
            name       : $product->getName(),
            slug       : $product->getSlug(),
            description: $product->getDescription(),
            measureName: $product->getMeasureName(),
            measureCode: $product->getMeasureCode(),
            width      : $product->getWidth(),
            length     : $product->getLength(),
            height     : $product->getHeight(),
            weight     : $product->getWeight(),
            properties : $properties
        );
    }


    /**
     * --
     * 
     * @param list<VO\ProductProperty> $properties
     *
     * @return list<ProductPropertyDto>
    */
    public static function toPropertyDtoList(array $properties): array
    {
        return array_map(
            static fn($property) => new Dto\ProductPropertyDto(
                name: $property->getName(),
                code: $property->getCode(),
                value: $property->getValue()
            ),
            $properties
        );
    }
}
