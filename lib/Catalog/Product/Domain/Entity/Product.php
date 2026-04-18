<?php
declare(strict_types=1);
namespace App\Catalog\Product\Domain\Entity;

use App\Catalog\Product\Domain\{
    ValueObject as VO
};
use InvalidArgumentException;


final class Product
{
    /**
     * @param list<VO\ProductProperty> $properties
    */
    private function __construct(
        private readonly int $id,
        private int $sectionId,
        private bool $active,
        private int $sort,
        private VO\ProductName $name,
        private VO\ProductSlug $slug,
        private string $description,
        private VO\ProductMeasure $measure,
        private VO\ProductDimensions $dimensions,
        private float $weight,
        private array $properties = []
    )
    {
        $this->assertState();
        $this->assertProperties();
    }

    /**
     * Returns the unique identifier of the product.
     * 
     * @return int
    */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Returns the section ID of the product.
     * 
     * @return int
    */
    public function getSectionId(): int
    {
        return $this->sectionId;
    }

    /**
     * Returns whether the product is active.
     * 
     * @return bool
    */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Returns the sort order of the product.
     * 
     * @return int
    */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * Returns the name of the product.
     * 
     * @return string
    */
    public function getName(): string
    {
        return $this->name->getValue();
    }

    /**
     * Returns the slug of the product.
     * 
     * @return string
    */
    public function getSlug(): string
    {
        return $this->slug->getValue();
    }

    /**
     * Returns the description of the product.
     * 
     * @return string
    */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Returns the measure name of the product.
     * 
     * @return string
    */
    public function getMeasureName(): string
    {
        return $this->measure->getName();
    }

    /**
     * Returns the measure code of the product.
     * 
     * @return int
    */
    public function getMeasureCode(): int
    {
        return $this->measure->getCode();
    }

    /**
     * Returns the width of the product.
     * 
     * @return float
    */
    public function getWidth(): float
    {
        return $this->dimensions->getWidth();
    }

    /**
     * Returns the length of the product.
     * 
     * @return float
    */
    public function getLength(): float
    {
        return $this->dimensions->getLength();
    }

    /**
     * Returns the height of the product.
     * 
     * @return float
    */
    public function getHeight(): float
    {
        return $this->dimensions->getHeight();
    }

    /**
     * Returns the weight of the product.
     * 
     * @return float
    */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Returns the properties of the product.
     * 
     * @return list<VO\ProductProperty>
    */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * Restores an existing product instance.
     * 
     * @param list<VO\ProductProperty> $properties
     *
     * @return self
    */
    public static function restore(
        int $id,
        int $sectionId,
        bool $active,
        int $sort,
        VO\ProductName $name,
        VO\ProductSlug $slug,
        string $description,
        VO\ProductMeasure $measure,
        VO\ProductDimensions $dimensions,
        float $weight,
        array $properties = []
    ): self
    {
        return new self(
            id: $id,
            sectionId: $sectionId,
            active: $active,
            sort: $sort,
            name: $name,
            slug: $slug,
            description: $description,
            measure: $measure,
            dimensions: $dimensions,
            weight: $weight,
            properties: $properties
        );
    }

    /**
     * Asserts that the product's state is valid.
     * 
     * @return void
    */
    private function assertState(): void
    {
        if ($this->sectionId <= 0)
        {
            throw new InvalidArgumentException('Product section id must be greater than zero.');
        }

        if ($this->weight < 0)
        {
            throw new InvalidArgumentException('Product weight cannot be negative.');
        }

        if ($this->sort < 0)
        {
            throw new InvalidArgumentException('Product sort cannot be negative.');
        }
    }


    /**
     * Asserts that the product's properties are valid.
     * 
     * @return void
    */
    private function assertProperties(): void
    {
        if (!array_is_list($this->properties))
        {
            throw new InvalidArgumentException('Product properties must be a list of ProductProperty objects.');
        }

        foreach ($this->properties as $property)
        {
            if (!$property instanceof VO\ProductProperty)
            {
                throw new InvalidArgumentException('Product properties must contain only ProductProperty objects.');
            }
        }
    }
}
