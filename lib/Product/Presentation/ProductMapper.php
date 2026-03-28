<?php
declare(strict_types=1);
namespace App\Product\Presentation;

use App\Product\Application\{
    UseCase\GetProduct
};


final class ProductMapper
{
    /**
     * --
     * 
     * @param GetProduct\Result $product
     * 
     * @return Res\ProductRes
    */
    public static function toProductItem(
        GetProduct\Result $product
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
     * @param GetProduct\Result $product
     *
     * @return Res\ProductMeasureRes
    */
    private static function toProductMeasure(
        GetProduct\Result $product
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
     * @param GetProduct\Result $product
     *
     * @return Res\ProductDimensionsRes
    */
    private static function toProductDimensions(
        GetProduct\Result $product
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
     * @param array $properties
     * 
     * @return Res\ProductPropertyRes
    */
    private static function toProductProperty(
        array $properties
    ): Res\ProductPropertyRes
    {
        return new Res\ProductPropertyRes(
            name : $properties['name'],
            code : $properties['code'],
            value: $properties['value']
        );
    }
}
