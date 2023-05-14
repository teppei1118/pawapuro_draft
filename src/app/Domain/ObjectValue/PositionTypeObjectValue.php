<?php

namespace App\Domain\ObjectValue;

class PositionTypeObjectValue extends BaseObjectValue
{
    public const COMMON_CODE  = 1;
    public const PITCHER_CODE = 2;
    public const BATTER_CODE  = 3;

    public const COMMON_NAME  = '共通';
    public const PITCHER_NAME = '投手';
    public const BATTER_NAME  = '野手';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::COMMON_CODE  => self::COMMON_NAME,
            self::PITCHER_CODE => self::PITCHER_NAME,
            self::BATTER_CODE  => self::BATTER_NAME,
        ];
    }
}