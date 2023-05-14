<?php

namespace App\Models;

use App\Domain\ObjectValue\BallHandObjectValue;
use App\Domain\ObjectValue\BatHandObjectValue;
use App\Domain\ObjectValue\PositionObjectValue;
use App\Domain\ObjectValue\SpecialAbilityAmountObjectValue;
use App\Domain\ObjectValue\TeamObjectValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * App\Models\Player
 *
 * @property int $id
 * @property string $name 選手名
 * @property int $team_code 所属球団
 * @property int $ball_hand_code 利き手（投）
 * @property int $bat_hand_code 利き手（打席）
 * @property int $main_position_code メインポジション
 * @property int $ball_speed 球速
 * @property int $control コントロール
 * @property int $stamina スタミナ
 * @property int $ballistic 弾道
 * @property int $meet ミート
 * @property int $power パワー
 * @property int $running_speed 走力
 * @property int $shoulder 肩力
 * @property int $defence 守備力
 * @property int $catch 補給
 * @property int $vs_pinch_code ピンチ
 * @property int $vs_left_hitter_code 対左打者
 * @property int $strength_code 打たれ強さ
 * @property int $stretch_code ノビ
 * @property int $quick_code クイック
 * @property int $vs_chance_code チャンス
 * @property int $vs_left_pitcher_code 対左投手
 * @property int $catcher_code キャッチャー
 * @property int $steal_code 盗塁
 * @property int $base_running_code 走塁
 * @property int $throwing_code 送球
 * @property int $not_injury_code ケガしにくさ
 * @property int $recovery_code 回復
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\PlayerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player query()
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBallHandCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBallSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBallistic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBaseRunningCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBatHandCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCatcherCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereDefence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereMainPositionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereMeet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereNotInjuryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereQuickCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereRecoveryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereRunningSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereShoulder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereStealCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereStrengthCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereStretchCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereTeamCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereThrowingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereVsChanceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereVsLeftHitterCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereVsLeftPitcherCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereVsPinchCode($value)
 * @mixin \Eloquent
 */
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
    const DEFAULT_SPECIAL_ABILITY = SpecialAbilityAmountObjectValue::D_CODE;
}
