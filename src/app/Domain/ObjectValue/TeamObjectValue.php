<?php

namespace App\Domain\ObjectValue;

class TeamObjectValue extends BaseObjectValue
{
    const SWALLOWS_CODE  = 1;
    const BAY_STARS_CODE = 2;
    const TIGERS_CODE    = 3;
    const GIANTS_CODE    = 4;
    const CARP_CODE      = 5;
    const DRAGONS_CODE   = 6;

    const BUFFALOES_CODE = 7;
    const HAWKS_CODE     = 8;
    const LIONS_CODE     = 9;
    const EAGLES_CODE    = 10;
    const MARINES_CODE   = 11;
    const FIGHTERS_CODE  = 12;

    const OB_CODE       = 13;
    const SUCCESS_CODE  = 14;
    const ORIGINAL_CODE = 15;

    const SWALLOWS_NAME  = 'ヤクルト';
    const BAY_STARS_NAME = 'DeNA';
    const TIGERS_NAME    = '阪神';
    const GIANTS_NAME    = '巨人';
    const CARP_NAME      = '広島';
    const DRAGONS_NAME   = '中日';

    const BUFFALOES_NAME = 'オリックス';
    const HAWKS_NAME     = 'ソフトバンク';
    const LIONS_NAME     = '西武';
    const EAGLES_NAME    = '楽天';
    const MARINES_NAME   = 'ロッテ';
    const FIGHTERS_NAME  = '日本ハム';

    const OB_NAME       = 'OB';
    const SUCCESS_NAME  = 'サクセス';
    const ORIGINAL_NAME = 'オリジナル';

    /**
     * @return string[]
     */
    public function list(): array
    {
        return $this->listCentral() + $this->listPacific() + $this->listOther();
    }

    /**
     * @return string[]
     */
    public function listCentral(): array
    {
        return [
            self::SWALLOWS_CODE  => self::SWALLOWS_NAME,
            self::BAY_STARS_CODE => self::BAY_STARS_NAME,
            self::TIGERS_CODE    => self::TIGERS_NAME,
            self::GIANTS_CODE    => self::GIANTS_NAME,
            self::CARP_CODE      => self::CARP_NAME,
            self::DRAGONS_CODE   => self::DRAGONS_NAME,
        ];
    }

    /**
     * @return string[]
     */
    public function listPacific(): array
    {
        return [
            self::BUFFALOES_CODE => self::BUFFALOES_NAME,
            self::HAWKS_CODE     => self::HAWKS_NAME,
            self::LIONS_CODE     => self::LIONS_NAME,
            self::EAGLES_CODE    => self::EAGLES_NAME,
            self::MARINES_CODE   => self::MARINES_NAME,
            self::FIGHTERS_CODE  => self::FIGHTERS_NAME,
        ];
    }

    /**
     * @return string[]
     */
    public function listOther(): array
    {
        return [
            self::OB_CODE       => self::OB_NAME,
            self::SUCCESS_CODE  => self::SUCCESS_NAME,
            self::ORIGINAL_CODE => self::ORIGINAL_NAME,
        ];
    }

    /**
     * @return LeagueObjectValue
     */
    public function getLeague(): LeagueObjectValue
    {
        if (array_key_exists($this->code(), $this->listCentral())) {
            return new LeagueObjectValue(LeagueObjectValue::CENTRAL_CODE);
        } elseif (array_key_exists($this->code(), $this->listPacific())) {
            return new LeagueObjectValue(LeagueObjectValue::PACIFIC_CODE);
        } elseif (array_key_exists($this->code(), $this->listPacific())) {
            return new LeagueObjectValue(LeagueObjectValue::OTHER_CODE);
        }
        return new LeagueObjectValue(self::UNKNOWN_CODE);
    }
}