<?php
use Bitrix\{
    Main,
    Iblock,
    Catalog,
    Main\Loader,
    Main\Localization\Loc
};


Loc::loadMessages(__FILE__);

class oz_router_sample extends CModule
{
    public $MODULE_ID = 'oz.router.sample';

    public $MODULE_NAME;
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_DESCRIPTION;

    public $PARTNER_NAME;
    public $PARTNER_URI;


    public function __construct()
    {
        $arModuleVersion = [];

        include(__DIR__ . "/version.php");

        //version info
        $this->MODULE_VERSION      = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

        //module info
        $this->MODULE_NAME        = Loc::getMessage('MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('MODULE_DESCRIPTION');
        
        //partner info
        $this->PARTNER_NAME       = Loc::getMessage('PARTNER_NAME');
        $this->PARTNER_URI        = Loc::getMessage('PARTNER_URI');
    }

    public function InstallDB(): bool
    {
		return true;
    }

    public function UnInstallDB(): bool
    {
		return true;
    }

    public function InstallEvents(): bool
    {
        return true;
    }

    public function UnInstallEvents(): bool
    {
		return true;
    }

    public function InstallFiles(): bool
    {
        return true;
    }

    public function UnInstallFiles(): bool
    {
        return true;
    }

    public function DoInstall(): void
    {
        global $APPLICATION, $USER, $step;

        $step = (int)$step;

        if ($USER->IsAdmin())
        {
            if ($step < 2)
            {
                $GLOBALS['oz_router_sample_install_context'] = $this->getInstallContext();
                $APPLICATION->IncludeAdminFile('', __DIR__ . '/step1.php');
            }
            elseif ($step === 2)
            {
                $request = Main\Application::getInstance()->getContext()->getRequest();
                
                $catalogIblockId = $request->get('catalog_iblock_id') ?? 0;

                if (!Main\ModuleManager::isModuleInstalled($this->MODULE_ID))
                {
                    if ($this->setConfig((int)$catalogIblockId))
                    {
                        $this->InstallDB();
                        $this->InstallEvents();
                        $this->InstallFiles();

                        Main\ModuleManager::registerModule($this->MODULE_ID);
                    }
                }

                $APPLICATION->IncludeAdminFile('',__DIR__ . '/step2.php');
            }         
        }
    }

    public function DoUninstall(): void
    {
        global $USER;

        if ($USER->IsAdmin())
        {
            Main\ModuleManager::unRegisterModule($this->MODULE_ID);
            $this->UnInstallDB();
            $this->UnInstallEvents();
            $this->UnInstallFiles();
        }
    }


    /**
     * Возвращает контекст для первого шага установки
     * 
     * @return array
    */
    private function getInstallContext(): array
    {
        if(!Loader::includeModule('catalog'))
        {
            return [
                'status'  => 'error',
                'message' => 'Для установки требуется установленный модуль "Торговый каталог" (catalog).'
            ];
        }

        $catalogs = Catalog\CatalogIblockTable::getList([
            'select' => [
                'ID'       => 'IBLOCK_ID',
                'NAME'     => 'IBLOCK.NAME',
                'API_CODE' => 'IBLOCK.API_CODE',
            ],
            'filter' => [
                '=PRODUCT_IBLOCK_ID' => 0,
            ]
        ])->fetchAll();


        if(empty($catalogs))
        {
            return [
                'status'  => 'error',
                'message' => 'Не найдено ни одного торгового каталога.'
            ];
        }

        return [
            'status'   => 'ok',
            'catalogs' => $catalogs,
        ];
    }


    /**
     * Устанавливает конфигурацию для 
     * выбранного торгового каталога
     * 
     * @param int $iblockId
     * 
     * @return bool
    */
    private function setConfig(
        int $iblockId
    ): bool
    {
        global $APPLICATION;

        if(!Loader::includeModule('iblock'))
        {
            $APPLICATION->ThrowException('Для установки требуется установленный модуль "Информационные блоки" (iblock).');
            return false;
        }

        Iblock\IblockTable::update($iblockId, [
            'API_CODE' => 'catalog'
        ]);


        return $this->setRouterConfig();
    }


    /**
     * Устанавливает базовую конфигурацию модуля oz.router
     * 
     * @return bool
    */
    private function setRouterConfig(): bool
    {
        global $APPLICATION;

        if(!Loader::includeModule('oz.router'))
        {
            $APPLICATION->ThrowException('Для установки требуется установленный модуль "API Router" (oz.router).');
            return false;
        }

        $configPath   = '/local/modules/'. $this->MODULE_ID . '/config';
        $routesConfig = $configPath.'/routes/api.php';
        $diConfig     = $configPath.'/di.php';

        if(!is_file($_SERVER['DOCUMENT_ROOT'] . $routesConfig))
        {
            $APPLICATION->ThrowException('Не найден файл конфигурации маршрутов:' .$routesConfig);
            return false;
        }

        if(!is_file($_SERVER['DOCUMENT_ROOT'] . $diConfig))
        {
            $APPLICATION->ThrowException('Не найден файл конфигурации DI:' .$diConfig);
            return false;
        }

        $config = Oz\Router\Module\Module::getConfig();
        $config->setConfigRoutesFilePath($routesConfig);
        $config->setConfigDIFilePath($diConfig);

        return true;
    }
}
