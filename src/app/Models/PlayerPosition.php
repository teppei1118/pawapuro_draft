<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\PlayerPosition
 *
 * @property int $id
 * @property int $player_id
 * @property int $position_code ポジション
 * @property int $amount 守備力
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition wherePositionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition whereUpdatedAt($value)
 * @method static \Database\Factories\PlayerPositionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPosition query()
 * @mixin \Eloquent
 */
class PlayerPosition extends Model
{
    use HasFactory;
}
