<?php
declare(strict_types=1);
namespace App\Catalog\Product\Application\Dto;


final class ProductPropertyDto
{
    /**
     * @param string|int|float|bool|list<string|int|float|bool> $value
    */
    public function __construct(
        public readonly string $name,
        public readonly string $code,
        public readonly string|int|float|bool|array $value
    ) {}
}
