<?php
declare(strict_types=1);
namespace App\Catalog\Product\Application\UseCase\GetProduct;


final class Query
{
    public function __construct(
        public readonly int $id
    ) {}
}
