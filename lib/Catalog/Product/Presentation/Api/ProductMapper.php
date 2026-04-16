<?php
declare(strict_types=1);
namespace App\Catalog\Product\Presentation\Api;

use App\Catalog\Product\Application\Dto;


final class ProductMapper
{
    /**
     * --
     * 
     * @param Dto\ProductDto $product
     * 
     * @return Res\ProductRes
    */
    public static function toProductItem(
        Dto\ProductDto $product
    ): Res\ProductRes
    {
        $measure    = self::toProductMeasure($product);
        $dimensions = self::toProductDimensions($product);
        $properties = array_map(
            [self::class, 'toProductProperty'], 
            $product->properties
        );


        return new Res\ProductRes(
            name       : $product->name,
            active     : $product->active,
            slug       : $product->slug,
            description: $product->description,
            measure    : $measure,
            dimensions : $dimensions,
            weight     : $product->weight,
            properties : $properties
        );
    }


    /**
     * --
     *
     * @param Dto\ProductDto $product
     *
     * @return Res\ProductMeasureRes
    */
    private static function toProductMeasure(
        Dto\ProductDto $product
    ): Res\ProductMeasureRes
    {
        return new Res\ProductMeasureRes(
            name: $product->measureName,
            code: $product->measureCode
        );
    }


    /**
     * --
     *
     * @param Dto\ProductDto $product
     *
     * @return Res\ProductDimensionsRes
    */
    private static function toProductDimensions(
        Dto\ProductDto $product
    ): Res\ProductDimensionsRes
    {
        return new Res\ProductDimensionsRes(
            width : $product->width,
            length: $product->length,
            height: $product->height
        );
    }


    /**
     * --
     * 
     * @param Dto\ProductPropertyDto $property
     * 
     * @return Res\ProductPropertyRes
    */
    private static function toProductProperty(
        Dto\ProductPropertyDto $property
    ): Res\ProductPropertyRes
    {
        return new Res\ProductPropertyRes(
            name : $property->name,
            code : $property->code,
            value: $property->value
        );
    }
}
