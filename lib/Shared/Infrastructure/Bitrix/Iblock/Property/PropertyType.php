<?php
declare(strict_types=1);
namespace App\Shared\Infrastructure\Bitrix\Iblock\Property;


enum PropertyType: string
{
    case STRING  = 'S'; // String
    case NUMBER  = 'N'; // Number
    case LIST    = 'L'; // List
    case FILE    = 'F'; // File
    case ELEMENT = 'E'; // Element of iblock
    case SECTION = 'G'; // Section of iblock
    
    case UNKNOWN = 'UNKNOWN';

    
    /**
     * Creates a PropertyType instance from 
     * a Bitrix property type string.
     *
     * @param string $value
     *
     * @return self
     */
    public static function fromStringCode(string $value): self
    {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
