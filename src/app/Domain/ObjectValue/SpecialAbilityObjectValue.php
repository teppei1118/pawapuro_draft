<?php

namespace App\Domain\ObjectValue;

class SpecialAbilityObjectValue extends BaseObjectValue
{
    public const G_CODE = 1;
    public const F_CODE = 2;
    public const E_CODE = 3;
    public const D_CODE = 4;
    public const C_CODE = 5;
    public const B_CODE = 6;
    public const A_CODE = 7;

    public const G_NAME = 'G';
    public const F_NAME = 'F';
    public const E_NAME = 'E';
    public const D_NAME = 'D';
    public const C_NAME = 'C';
    public const B_NAME = 'B';
    public const A_NAME = 'A';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::G_CODE => self::G_NAME,
            self::F_CODE => self::F_NAME,
            self::E_CODE => self::E_NAME,
            self::D_CODE => self::D_NAME,
            self::C_CODE => self::C_NAME,
            self::B_CODE => self::B_NAME,
            self::A_CODE => self::A_NAME,
        ];
    }
}