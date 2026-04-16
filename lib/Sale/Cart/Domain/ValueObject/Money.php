<?php
declare(strict_types=1);
namespace App\Sale\Cart\Domain\ValueObject;

use InvalidArgumentException;


final class Money
{
    private function __construct(
        private readonly float $amount,
        private readonly string $currency
    ) {}


    public static function fromAmountAndCurrency(
        float $amount,
        string $currency
    ): self
    {
        $currency = trim($currency);

        if (!is_finite($amount))
        {
            throw new InvalidArgumentException('Cart item money amount must be finite.');
        }

        if ($amount < 0)
        {
            throw new InvalidArgumentException('Cart item money amount must not be negative.');
        }

        if ($currency === '')
        {
            throw new InvalidArgumentException('Cart item currency must not be empty.');
        }

        return new self($amount, $currency);
    }


    public function getAmount(): float
    {
        return $this->amount;
    }


    public function getCurrency(): string
    {
        return $this->currency;
    }


    public function multiply(float $multiplier): self
    {
        if (!is_finite($multiplier))
        {
            throw new InvalidArgumentException('Money multiplier must be finite.');
        }

        if ($multiplier < 0)
        {
            throw new InvalidArgumentException('Money multiplier must not be negative.');
        }

        return new self($this->amount * $multiplier, $this->currency);
    }


    public function subtract(self $money): self
    {
        $this->assertSameCurrency($money);

        $amount = $this->amount - $money->amount;

        if ($amount < 0)
        {
            throw new InvalidArgumentException('Money subtraction result must not be negative.');
        }

        return new self($amount, $this->currency);
    }


    public function add(self $money): self
    {
        $this->assertSameCurrency($money);

        return new self($this->amount + $money->amount, $this->currency);
    }


    public function isSameCurrency(self $money): bool
    {
        return $this->currency === $money->currency;
    }


    private function assertSameCurrency(self $money): void
    {
        if ($this->isSameCurrency($money))
        {
            return;
        }

        throw new InvalidArgumentException('Money currencies must be equal.');
    }
}
