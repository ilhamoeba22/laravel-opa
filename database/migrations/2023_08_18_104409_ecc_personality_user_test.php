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
        Schema::create('ecc_personality_user_test', function (Blueprint $table) {
            $table->increments('id_test')->unsigned();
            $table->tinyInteger('publish');
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('is_last_test');
            $table->string('self_analyze_result');
            $table->tinyInteger('evaluation_grade')->unsigned();
            $table->dateTime('test_date');
            
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
