<?php
declare(strict_types=1);
namespace App\Product\Domain\Repository;

use App\Product\Domain\{
    Entity
};


interface ProductRepository
{
    public function findById(int $id): ?Entity\Product;
}
