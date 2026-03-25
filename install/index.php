<?php
use Bitrix\{
    Main,
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
        global $USER;

        if ($USER->IsAdmin())
        {
            if (!Main\ModuleManager::isModuleInstalled($this->MODULE_ID))
            {
                $this->InstallDB();
                $this->InstallEvents();
                $this->InstallFiles();

                Main\ModuleManager::registerModule($this->MODULE_ID);
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
}
