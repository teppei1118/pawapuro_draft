<?php

namespace App\Domain\ObjectValue;

class BallHandObjectValue extends BaseObjectValue
{
    public const RIGHT_CODE = 1;
    public const LEFT_CODE = 2;

    public const RIGHT_NAME = "右投げ";
    public const LEFT_NAME = "左投げ";

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::RIGHT_CODE => self::RIGHT_NAME,
            self::LEFT_CODE  => self::LEFT_NAME,
        ];
    }
}