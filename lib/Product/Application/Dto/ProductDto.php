<?php
declare(strict_types=1);
namespace App\Product\Application\Dto;


final class ProductDto
{
    /**
     * @param list<ProductPropertyDto> $properties
    */
    public function __construct(
        public readonly int $id,
        public readonly int $sectionId,
        public readonly bool $active,
        public readonly int $sort,
        public readonly string $name,
        public readonly string $slug,
        public readonly string $description,
        public readonly string $measureName,
        public readonly int $measureCode,
        public readonly float $width,
        public readonly float $length,
        public readonly float $height,
        public readonly float $weight,
        public readonly array $properties
    ) {}
}
