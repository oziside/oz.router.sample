<?php
declare(strict_types=1);
namespace App\Catalog\Product\Domain\Repository;

use App\Catalog\Product\Domain\{
    Entity
};


interface ProductRepository
{
    public function findById(int $id): ?Entity\Product;
}
