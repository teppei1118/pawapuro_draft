<?php

namespace App\Domain\ObjectValue;

class LeagueObjectValue extends BaseObjectValue
{
    const CENTRAL_CODE = 1;
    const PACIFIC_CODE = 2;
    const OTHER_CODE   = 3;

    const CENTRAL_NAME = 'セ・リーグ';
    const PACIFIC_NAME = 'パ・リーグ';
    const OTHER_NAME   = 'その他';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::CENTRAL_CODE => self::CENTRAL_NAME,
            self::PACIFIC_NAME => self::PACIFIC_NAME,
            self::OTHER_CODE   => self::OTHER_NAME,
        ];
    }
}