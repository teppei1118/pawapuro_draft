<?php

use App\Models\Player;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('選手名');
            $table->unsignedTinyInteger('team_code')->default(Player::DEFAULT_TEAM_CODE)->comment('所属球団');
            $table->unsignedTinyInteger('ball_hand_code')->default(Player::DEFAULT_BALL_HAND_CODE)->comment('利き手（投）');
            $table->unsignedTinyInteger('bat_hand_code')->comment('利き手（打席）');
            $table->unsignedTinyInteger('main_position_code')->comment('メインポジション');
            $table->unsignedTinyInteger('ball_speed')->default(Player::DEFAULT_BALL_SPEED)->comment('球速');
            $table->unsignedTinyInteger('control')->default(Player::DEFAULT_BASIC_ABILITY)->comment('コントロール');
            $table->unsignedTinyInteger('stamina')->default(Player::DEFAULT_BASIC_ABILITY)->comment('スタミナ');
            $table->unsignedTinyInteger('ballistic')->default(Player::DEFAULT_BASIC_ABILITY)->comment('弾道');
            $table->unsignedTinyInteger('meet')->default(Player::DEFAULT_BASIC_ABILITY)->comment('ミート');
            $table->unsignedTinyInteger('power')->default(Player::DEFAULT_BASIC_ABILITY)->comment('パワー');
            $table->unsignedTinyInteger('running_speed')->default(Player::DEFAULT_BASIC_ABILITY)->comment('走力');
            $table->unsignedTinyInteger('shoulder')->default(Player::DEFAULT_BASIC_ABILITY)->comment('肩力');
            $table->unsignedTinyInteger('defence')->default(Player::DEFAULT_BASIC_ABILITY)->comment('守備力');
            $table->unsignedTinyInteger('catch')->default(Player::DEFAULT_BASIC_ABILITY)->comment('補給');
            $table->unsignedTinyInteger('vs_pinch_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default()->comment('ピンチ');
            $table->unsignedTinyInteger('vs_left_hitter_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('対左打者');
            $table->unsignedTinyInteger('strength_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('打たれ強さ');
            $table->unsignedTinyInteger('stretch_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('ノビ');
            $table->unsignedTinyInteger('quick_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('クイック');
            $table->unsignedTinyInteger('vs_chance_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('チャンス');
            $table->unsignedTinyInteger('vs_left_pitcher_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('対左投手');
            $table->unsignedTinyInteger('catcher_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('キャッチャー');
            $table->unsignedTinyInteger('steal_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('盗塁');
            $table->unsignedTinyInteger('base_running_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('走塁');
            $table->unsignedTinyInteger('throwing_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('送球');
            $table->unsignedTinyInteger('not_injury_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('ケガしにくさ');
            $table->unsignedTinyInteger('recovery_code')->default(Player::DEFAULT_SPECIAL_ABILITY)->default(4)->comment('回復');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
