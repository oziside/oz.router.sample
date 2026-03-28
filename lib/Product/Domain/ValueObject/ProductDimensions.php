<?php
declare(strict_types=1);
namespace App\Product\Domain\ValueObject;

use InvalidArgumentException;


final class ProductDimensions
{
    private function __construct(
        private readonly float $width,
        private readonly float $length,
        private readonly float $height
    ) {}


    /**
     * Creates a new instance of ProductDimensions from float values.
     *
     * @param float $width
     * @param float $length
     * @param float $height
     * 
     * @return self
    */
    public static function fromFloats(
        float $width, 
        float $length, 
        float $height
    ): self
    {
        if ($width < 0 || $length < 0 || $height < 0)
        {
            throw new InvalidArgumentException('Product dimensions cannot be negative.');
        }

        return new self($width, $length, $height);
    }


    /**
     * Returns the width of the product.
     * 
     * @return float
    */
    public function getWidth(): float
    {
        return $this->width;
    }


    /**
     * Returns the length of the product.
     * 
     * @return float
    */
    public function getLength(): float
    {
        return $this->length;
    }


    /**
     * Returns the height of the product.
     * 
     * @return float
    */
    public function getHeight(): float
    {
        return $this->height;
    }
}
