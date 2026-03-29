<?php
declare(strict_types=1);
namespace App\Catalog\Product\Domain\Event;


final class ProductUpdated
{
    public const BITRIX_EVENT_NAME = 'OnProductUpdated';
    public const BITRIX_MODULE_ID = 'oz.router.sample';

    public function __construct(
        private readonly int $productId,
        private readonly array $payload
    ) {}

    public function getProductId(): int
    {
        return $this->productId;
    }

    public function toArray(): array
    {
        return $this->payload;
    }
}
