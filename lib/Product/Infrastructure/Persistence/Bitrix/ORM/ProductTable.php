<?php
declare(strict_types=1);
namespace App\Product\Infrastructure\Persistence\Bitrix\ORM;

use Bitrix\{
    Main\ORM\Query\Join,
    Main\ORM\Fields\Relations,
    
    Iblock\Elements,
    Catalog\ProductTable as CatalogProductTable
};


class ProductTable extends Elements\ElementCatalogTable
{
    public static function getObjectClass()
    {
        return ProductObject::class;
    }

    public static function getCollectionClass()
    {
        return ProductObjectCollection::class;
    }


    /**
     * Override getEntity to add product meta reference
    */
    public static function getEntity()
    {
        $entity = parent::getEntity();

        // add product meta reference if not exists
        $productMetaField = self::getProductField();

        if (!$entity->hasField($productMetaField->getName()))
        {
            $entity->addField($productMetaField);
        }

        return $entity;
    }


    /**
     * Override getMap to include product meta reference.
     * Need to generate map for ORM to recognize the relation and allow fetching related data.
    */
    public static function getMap(): array
    {
		return [
        	...parent::getMap(),

            self::getProductField()
        ];
    }

    private static function getProductField(): Relations\Reference
    {
        return new Relations\Reference(
            'PRODUCT_META',
            CatalogProductTable::class,
            Join::on('this.ID', 'ref.ID')
        );
    }
}
