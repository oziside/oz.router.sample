<?php
declare(strict_types=1);

namespace App\Catalog\Product\Infrastructure\Eventing\Bitrix;

use Bitrix\Main\Event;

final class ProductUpdatedEventHandler
{
    public static function onProductUpdated(Event $event): void
    {
        $payload = $event->getParameter('payload');

        \CEventLog::Add([
            'SEVERITY' => \CEventLog::SEVERITY_INFO,
            'AUDIT_TYPE_ID' => 'PRODUCT_UPDATED',
            'MODULE_ID' => 'oz.router.sample',
            'ITEM_ID' => (string)($payload['productId'] ?? 'unknown'),
            'DESCRIPTION' => $payload,
        ]);
    }
}
