<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Site;

use Bitrix\Main\Context;
use RuntimeException;


final class CurrentSiteProvider
{
    /**
     * Returns the identifier of the current site.
     * 
     * @return string The current site identifier (e.g., "s1", "s2").
    */
    public function getSiteId(): string
    {
        $siteId = Context::getCurrent()->getSite();

        if (is_string($siteId) && $siteId !== '')
        {
            return $siteId;
        }

        if (defined('SITE_ID') && is_string(SITE_ID) && SITE_ID !== '')
        {
            return SITE_ID;
        }

        throw new RuntimeException('Cannot resolve current site id.');
    }
}
