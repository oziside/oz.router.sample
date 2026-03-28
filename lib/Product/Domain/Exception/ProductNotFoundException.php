<?php
declare(strict_types=1);
namespace App\Product\Domain\Exception;


final class ProductNotFoundException extends \RuntimeException
{
    public function __construct(int $productId)
    {
        parent::__construct(
            sprintf('Product with id %d was not found.', $productId)
        );
    }
}
