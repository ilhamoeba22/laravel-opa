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
        Schema::create('ecc_personality_user_input', function (Blueprint $table) {
            $table->increments('id_input')->unsigned();
            $table->integer('test_id')->unsigned();
            $table->tinyInteger('choise_id')->unsigned();
            $table->timestamp('creation_date');
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
