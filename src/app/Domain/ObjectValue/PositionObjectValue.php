<?php

namespace App\Domain\ObjectValue;

class PositionObjectValue extends BaseObjectValue
{
    const PITCHER_CODE  = 1;
    const CATCHER_CODE  = 2;
    const FIRST_CODE    = 3;
    const SECOND_CODE   = 4;
    const THIRD_CODE    = 5;
    const SHORT_CODE    = 6;
    const OUTFIELD_CODE = 7;

    const PITCHER_NAME  = "投手";
    const CATCHER_NAME  = "捕手";
    const FIRST_NAME    = "一塁手";
    const SECOND_NAME   = "二塁手";
    const THIRD_NAME    = "三塁手";
    const SHORT_NAME    = "遊撃手";
    const OUTFIELD_NAME = "外野手";

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::PITCHER_CODE  => self::PITCHER_NAME,
            self::CATCHER_CODE  => self::CATCHER_NAME,
            self::FIRST_CODE    => self::FIRST_NAME,
            self::SECOND_CODE   => self::SECOND_NAME,
            self::THIRD_CODE    => self::THIRD_NAME,
            self::SHORT_CODE    => self::SHORT_NAME,
            self::OUTFIELD_CODE => self::OUTFIELD_NAME,
        ];
    }
}