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
        Schema::create('ecc_personality_user_test_score', function (Blueprint $table) {
            $table->increments('id_score')->unsigned();
            $table->integer('test_id')->unsigned();
            $table->tinyInteger('cat_id')->unsigned();
            $table->tinyInteger('score')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
