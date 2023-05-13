<?php

namespace App\Models;

use App\Domain\ObjectValue\BallHandObjectValue;
use App\Domain\ObjectValue\BatHandObjectValue;
use App\Domain\ObjectValue\PositionObjectValue;
use App\Domain\ObjectValue\SpecialAbilityObjectValue;
use App\Domain\ObjectValue\TeamObjectValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Player extends Model
{
    use HasFactory;

    // 所属球団のデフォルト
    const DEFAULT_TEAM_CODE = TeamObjectValue::ORIGINAL_CODE;

    // 利き手（投）のデフォルト
    const DEFAULT_BALL_HAND_CODE = BallHandObjectValue::RIGHT_CODE;

    // 利き手（打席）のデフォルト
    const DEFAULT_BAT_HAND_CODE = BatHandObjectValue::RIGHT_CODE;

    // メインポジションのデフォルト
    const DEFAULT_MAIN_POSITION_CODE = PositionObjectValue::PITCHER_CODE;

    // 球速のデフォルト値
    const DEFAULT_BALL_SPEED = 120;

    // 基本能力のデフォルト値
    const DEFAULT_BASIC_ABILITY = 0;

    // 特殊能力のデフォルト値
    const DEFAULT_SPECIAL_ABILITY = SpecialAbilityObjectValue::D_CODE;
}
