<?php
declare(strict_types=1);

namespace App\Catalog\Product\Infrastructure\Eventing\Bitrix;

use App\Catalog\Product\Domain\Event\ProductUpdated;
use App\Shared\Application\Port\EventBus;
use Bitrix\Main\Event;
use Bitrix\Main\EventManager;

final class BitrixEventBus implements EventBus
{
    public function publish(object $event): void
    {
        if (!$event instanceof ProductUpdated)
        {
            return;
        }

        EventManager::getInstance()->send(new Event(
            ProductUpdated::BITRIX_MODULE_ID,
            ProductUpdated::BITRIX_EVENT_NAME,
            [
                'productId' => $event->getProductId(),
                'payload' => $event->toArray(),
                'event' => $event,
            ]
        ));
    }
}
