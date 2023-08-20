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
        Schema::create('ecc_personality_config', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->tinyInteger('periode_test_monthly');
            $table->mediumInteger('maxtime_per_page');
            $table->integer('modified_id')->unsigned();
            $table->timestamp('modified_date');
            
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
