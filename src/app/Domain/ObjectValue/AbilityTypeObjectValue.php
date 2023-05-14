<?php

namespace App\Domain\ObjectValue;

class AbilityTypeObjectValue extends BaseObjectValue
{
    public const BLUE_CODE     = 1;
    public const RED_CODE      = 2;
    public const BLUE_RED_CODE = 3;
    public const GREEN_CODE    = 4;
    public const GOLD_CODE     = 5;

    public const BLUE_NAME     = '青';
    public const RED_NAME      = '赤';
    public const BLUE_RED_NAME = '青/赤';
    public const GREEN_NAME    = '緑';
    public const GOLD_NAME     = '金';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::BLUE_CODE     => self::BLUE_NAME,
            self::RED_CODE      => self::RED_NAME,
            self::BLUE_RED_CODE => self::BLUE_RED_NAME,
            self::GREEN_CODE    => self::GREEN_NAME,
            self::GOLD_CODE     => self::GOLD_NAME,
        ];
    }
}