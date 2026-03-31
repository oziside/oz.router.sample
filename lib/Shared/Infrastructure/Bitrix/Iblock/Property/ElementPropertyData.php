<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property;


final class ElementPropertyData
{
    /**
     * @param string|int|float|bool|list<string|int|float|bool>|null $value
    */
    public function __construct(
        public readonly int $id,
        public readonly string $code,
        public readonly string $name,
        public readonly PropertyType $type,
        public readonly bool $multiple,
        public readonly string|int|float|bool|array|null $value
    ) {}


    /**
     * @return array{
     *     id: int,
     *     code: string,
     *     name: string,
     *     type: string,
     *     multiple: bool,
     *     value: string|int|float|bool|list<string|int|float|bool>|null
     * }
     */
    public function toArray(): array
    {
        return [
            'id'       => $this->id,
            'code'     => $this->code,
            'name'     => $this->name,
            'type'     => $this->type->value,
            'multiple' => $this->multiple,
            'value'    => $this->value,
        ];
    }
}
