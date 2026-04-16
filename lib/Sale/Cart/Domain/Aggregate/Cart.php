<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\Aggregate;

use App\Sale\Cart\Domain\Entity\CartItem;
use InvalidArgumentException;


final class Cart
{
    /**
     * @param list<CartItem> $items
    */
    private function __construct(
        private readonly array $items
    )
    {
        $this->assertItems();
    }

    /**
     * @return list<CartItem>
    */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotalQuantity(): float
    {
        $total = 0;

        foreach ($this->items as $item)
        {
            $total += $item->getQuantity();
        }

        return $total;
    }

    public function getTotalPrice(): float
    {
        $total = 0;

        foreach ($this->items as $item)
        {
            $total += $item->getFinalTotal()->getAmount();
        }

        return $total;
    }

    public function getTotalDiscount(): float
    {
        $total = 0;

        foreach ($this->items as $item)
        {
            $total += $item->getDiscountTotal()->getAmount();
        }

        return $total;
    }

    public function getCurrency(): ?string
    {
        if ($this->items === [])
        {
            return null;
        }

        return $this->items[0]->getCurrency();
    }

    /**
     * Restores cart from persistence.
     *
     * @param list<CartItem> $items
    */
    public static function restore(array $items): self
    {
        return new self($items);
    }

    private function assertItems(): void
    {
        if (!array_is_list($this->items))
        {
            throw new InvalidArgumentException('Cart items must be a list of CartItem instances.');
        }

        $itemIds  = [];
        $currency = null;

        foreach ($this->items as $item)
        {
            if (!$item instanceof CartItem)
            {
                throw new InvalidArgumentException('Cart items must contain only CartItem instances.');
            }

            $itemId = $item->getId();

            if (isset($itemIds[$itemId]))
            {
                throw new InvalidArgumentException('Cart items must be unique by item id.');
            }

            $itemIds[$itemId] = true;

            if ($currency === null)
            {
                $currency = $item->getCurrency();
                continue;
            }

            if ($currency !== $item->getCurrency())
            {
                throw new InvalidArgumentException('Cart items must have the same currency.');
            }
        }
    }
}
