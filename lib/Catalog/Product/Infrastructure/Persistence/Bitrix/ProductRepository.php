<?php
declare(strict_types=1);
namespace App\Catalog\Product\Infrastructure\Persistence\Bitrix;

use App\Catalog\Product\{
    Domain\Entity,
    Domain\Repository,
    Infrastructure\Persistence\Bitrix
};

use App\Shared\{
    Infrastructure\Bitrix\Module,
    Infrastructure\Bitrix\Iblock\Property
};

use Bitrix\Catalog;
use RuntimeException;


final class ProductRepository implements Repository\ProductRepository
{
    private Property\ElementPropertyReader $elementPropertyReader;

    public function __construct()
    {
        $this->elementPropertyReader = new Property\ElementPropertyReader;
    }


    /**
     * Find product by id.
     * 
     * @param int $id
     * 
     * @return Entity\Product|null
    */
    public function findById(int $id): ?Entity\Product
    {
        Module\ModuleLoader::requireCatalog();

        /**
         * @var ?Bitrix\ORM\ProductObject $productObject 
        */
        $productObject = Bitrix\ORM\ProductTable::query()
            ->setSelect([
                // Iblock element
                'ID',
                'IBLOCK_ID',
                'IBLOCK_SECTION_ID',
                'ACTIVE',
                'NAME',
                'CODE',
                'DETAIL_TEXT',
                'SORT',
                // Product
                'PRODUCT_META.WEIGHT',
                'PRODUCT_META.WIDTH',
                'PRODUCT_META.LENGTH',
                'PRODUCT_META.HEIGHT',
                'PRODUCT_META.MEASURE',
            ])
            ->where('ID', $id)
            ->fetchObject();


        if ($productObject === null)
        {
            return null;
        }

        $measureObject = $this->getProductMeasure(
            $productObject->getProductMeta()->getMeasure()
        );

        $properties = $this->elementPropertyReader->read(
            $productObject->getIblockId(),
            $productObject->getId()
        );

        return ProductMapper::toProductEntity(
            $productObject,
            $measureObject,
            $properties
        );
    }


    /**
     * Return product measure by id.
     * 
     * @param int $measureId
     * 
     * @return Catalog\EO_Measure
    */
    private function getProductMeasure(
        int $measureId
    ): Catalog\EO_Measure
    {
        $select = [
            'ID',
            'CODE',
            'MEASURE_TITLE',
            'SYMBOL',
        ];

        $measure = Catalog\MeasureTable::query()
            ->setSelect($select)
            ->where('ID', $measureId)
            ->fetchObject();

        // try to get default
        if ($measure === null)
        {
            $measure = Catalog\MeasureTable::query()
                ->setSelect($select)
                ->where('IS_DEFAULT', 'Y')
                ->fetchObject();
        }

        if ($measure === null)
        {
            throw new RuntimeException('Default catalog measure is not configured.');
        }

        return $measure;
    }
}
