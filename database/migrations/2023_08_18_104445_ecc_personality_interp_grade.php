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
        Schema::create('ecc_personality_interp_grade', function (Blueprint $table) {
            $table->increments('id_grade')->unsigned();
            $table->tinyInteger('publish');
            $table->tinyInteger('interp_id')->unsigned();
            $table->tinyInteger('grade_value')->unsigned();
            $table->tinyInteger('range_start')->unsigned();
            $table->tinyInteger('range_end')->unsigned();
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
