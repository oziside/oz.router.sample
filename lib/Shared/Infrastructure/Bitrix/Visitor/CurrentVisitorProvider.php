<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Visitor;

use Bitrix\Sale\Fuser;
use RuntimeException;


final class CurrentVisitorProvider
{
    /**
     * Returns the current Bitrix Sale visitor identifier.
     *
     * Creates a visitor record when Bitrix cannot resolve an existing one.
     *
     * @return int Current FUSER_ID.
    */
    public function getVisitorId(): int
    {
        $visitorId = $this->findVisitorId(skipCreate: false);

        if ($visitorId === null)
        {
            throw new RuntimeException('Cannot resolve current Bitrix visitor id.');
        }

        return $visitorId;
    }


    /**
     * Returns an existing Bitrix Sale visitor identifier without creating one.
     *
     * @return int|null Existing FUSER_ID or null when visitor is not resolved.
    */
    public function getExistingVisitorId(): ?int
    {
        return $this->findVisitorId(skipCreate: true);
    }


    private function findVisitorId(bool $skipCreate): ?int
    {
        $visitorId = Fuser::getId($skipCreate);

        return $visitorId !== null && $visitorId > 0 ? $visitorId : null;
    }
}
