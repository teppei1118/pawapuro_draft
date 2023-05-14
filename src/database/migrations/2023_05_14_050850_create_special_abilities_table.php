<?php

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
        Schema::create('special_abilities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('特殊能力名');
            $table->text('description')->comment('説明');
            $table->unsignedTinyInteger('position_type_code')->comment('ポジションタイプ');
            $table->unsignedTinyInteger('ability_type_code')->comment('能力タイプ');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_abilities');
    }
};
