<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\SpecialAbility
 *
 * @property int $id
 * @property string $name 特殊能力名
 * @property int $position_type_code ポジションタイプ
 * @property int $ability_type_code 能力タイプ
 * @property int $is_gold 超特殊能力（金色）フラグ
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\SpecialAbilityFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility query()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereAbilityTypeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereIsGold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility wherePositionTypeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialAbility whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SpecialAbility extends Model
{
    use HasFactory;
}
