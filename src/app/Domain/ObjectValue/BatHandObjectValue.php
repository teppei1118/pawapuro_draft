<?php

namespace App\Domain\ObjectValue;

class BatHandObjectValue extends BaseObjectValue
{
    public const RIGHT_CODE  = 1;
    public const LEFT_CODE   = 2;
    public const SWITCH_CODE = 3;

    public const RIGHT_NAME  = "右打ち";
    public const LEFT_NAME   = "左打ち";
    public const SWITCH_NAME = "両打ち";

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::RIGHT_CODE => self::RIGHT_NAME,
            self::LEFT_CODE  => self::LEFT_NAME,
            self::SWITCH_CODE  => self::SWITCH_NAME,
        ];
    }
}