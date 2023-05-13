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
        Schema::create('braking_balls', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('name');
            $table->unsignedTinyInteger('direction_code')->comment('方向');
            $table->boolean('is_original')->default(false)->comment('オリジナル変化球フラグ');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('braking_balls');
    }
};
