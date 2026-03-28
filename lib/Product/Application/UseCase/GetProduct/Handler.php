<?php
declare(strict_types=1);
namespace App\Product\Application\UseCase\GetProduct;

use App\Product\{
    Domain\Exception,
    Domain\Repository,
    Application\Dto,
    Application\Mapper
};


final class Handler
{
    public function __construct(
        private readonly Repository\ProductRepository $products
    ) {}


    /**
     * Returns product by id.
     * 
     * @param Query $query
     *
     * @return Dto\ProductDto
    */
    public function exec(
        Query $query
    ): Dto\ProductDto
    {
        $product = $this->products->findById(
            $query->id
        );

        if ($product === null)
        {
            throw new Exception\ProductNotFoundException($query->id);
        }

        return Mapper\ProductMapper::toDto(
            $product
        );
    }
}
