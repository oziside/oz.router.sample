<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\Entity;

use App\Sale\Cart\Domain\ValueObject as VO;
use InvalidArgumentException;


final class CartItem
{
    private function __construct(
        private readonly VO\CartItemId $id,
        private readonly VO\ProductId $productId,
        private readonly VO\Quantity $quantity,
        private readonly VO\ProductName $productName,
        private readonly VO\Money $unitPrice,
        private readonly VO\Money $unitDiscount,
        private readonly VO\MeasureName $measureName,
        private readonly VO\Weight $weight
    )
    {
        $this->assertState();
    }

    public function getId(): int
    {
        return $this->id->getValue();
    }

    public function getProductId(): int
    {
        return $this->productId->getValue();
    }

    public function getQuantity(): float
    {
        return $this->quantity->getValue();
    }

    public function getProductName(): string
    {
        return $this->productName->getValue();
    }

    public function getPrice(): float
    {
        return $this->unitPrice->getAmount();
    }

    public function getDiscountPrice(): float
    {
        return $this->unitDiscount->getAmount();
    }

    public function getMeasureName(): string
    {
        return $this->measureName->getValue();
    }

    public function getCurrency(): string
    {
        return $this->unitPrice->getCurrency();
    }

    public function getWeight(): float
    {
        return $this->weight->getValue();
    }

    public function getUnitPrice(): VO\Money
    {
        return $this->unitPrice;
    }

    public function getUnitDiscount(): VO\Money
    {
        return $this->unitDiscount;
    }

    public function getSubtotal(): VO\Money
    {
        return $this->unitPrice->multiply($this->quantity->getValue());
    }

    public function getDiscountTotal(): VO\Money
    {
        return $this->unitDiscount->multiply($this->quantity->getValue());
    }

    public function getFinalTotal(): VO\Money
    {
        return $this->getSubtotal();
    }

    public function isSameProduct(self $item): bool
    {
        return $this->productId->equals($item->productId);
    }

    public function isSameItem(self $item): bool
    {
        return $this->id->equals($item->id);
    }

    public static function restore(
        VO\CartItemId $id,
        VO\ProductId $productId,
        VO\Quantity $quantity,
        VO\ProductName $productName,
        VO\Money $unitPrice,
        VO\Money $unitDiscount,
        VO\MeasureName $measureName,
        VO\Weight $weight
    ): self
    {
        return new self(
            id          : $id,
            productId   : $productId,
            quantity    : $quantity,
            productName : $productName,
            unitPrice   : $unitPrice,
            unitDiscount: $unitDiscount,
            measureName : $measureName,
            weight      : $weight
        );
    }

    private function assertState(): void
    {
        if (!$this->unitPrice->isSameCurrency($this->unitDiscount))
        {
            throw new InvalidArgumentException('Cart item price and discount currency must be equal.');
        }
    }
}
