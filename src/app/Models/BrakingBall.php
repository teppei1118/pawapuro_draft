<?php

namespace App\Models;

use App\Domain\ObjectValue\BrakingBallDirectionObjectValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\BrakingBall
 *
 * @property int $id
 * @property string $name name
 * @property int $direction_code 方向
 * @property int $is_original オリジナル変化球フラグ
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\BrakingBallFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall query()
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereDirectionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereIsOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrakingBall whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BrakingBall extends Model
{
    use HasFactory;
}
