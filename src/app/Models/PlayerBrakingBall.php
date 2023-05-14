<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\PlayerBrakingBall
 *
 * @property int $id
 * @property int $player_id
 * @property int $braking_ball_id
 * @property int $amount 変化量
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\PlayerBrakingBallFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereBrakingBallId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBrakingBall whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PlayerBrakingBall extends Model
{
    use HasFactory;
}
