<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Module;

use Bitrix\Main\Loader;
use RuntimeException;


final class ModuleLoader
{
    /**
     * Requires a specific module to be available.
     * 
     * @param string $moduleId
     * 
     * @return void
     */
    public static function require(string $moduleId): void
    {
        if (Loader::includeModule($moduleId))
        {
            return;
        }

        throw new RuntimeException(sprintf(
            'Bitrix module "%s" is not available.',
            $moduleId
        ));
    }

    /**
     * Requires multiple modules to be available.
     * 
     * @param list<string> $moduleIds
     * 
     * @return void
     */
    public static function requireMany(array $moduleIds): void
    {
        foreach ($moduleIds as $moduleId)
        {
            self::require($moduleId);
        }
    }
    
    /**
     * Requires the main module to be available.
     * 
     * @return void
    */
    public static function requireMain(): void
    {
        self::require('main');
    }

    /**
     * Requires the information block module to be available.
     * 
     * @return void
    */
    public static function requireIblock(): void
    {
        self::require('iblock');
    }

    /**
     * Requires the catalog module to be available.
     * 
     * @return void
    */
    public static function requireCatalog(): void
    {
        self::require('catalog');
    }

    /**
     * Requires the sale module to be available.
     * 
     * @return void
    */
    public static function requireSale(): void
    {
        self::require('sale');
    }
}
