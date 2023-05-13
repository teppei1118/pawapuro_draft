<?php

namespace App\Domain\ObjectValue;

class BrakingBallDirectionObjectValue extends BaseObjectValue
{
    public const STRAIGHT_CODE = 1;
    public const SLIDER_CODE   = 2;
    public const CURVE_CODE    = 3;
    public const FORK_CODE     = 4;
    public const SINKER_CODE   = 5;
    public const SHOOT_CODE    = 6;

    public const STRAIGHT_NAME = 'ストレート';
    public const SLIDER_NAME   = 'スライダー';
    public const CURVE_NAME    = 'カーブ';
    public const FORK_NAME     = 'フォーク';
    public const SINKER_NAME   = 'シンカー';
    public const SHOOT_NAME    = 'シュート';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::STRAIGHT_CODE => self::STRAIGHT_NAME,
            self::SLIDER_CODE   => self::SLIDER_NAME,
            self::CURVE_CODE    => self::CURVE_NAME,
            self::FORK_CODE     => self::FORK_NAME,
            self::SINKER_CODE   => self::SINKER_NAME,
            self::SHOOT_CODE    => self::SHOOT_NAME,
        ];
    }
}