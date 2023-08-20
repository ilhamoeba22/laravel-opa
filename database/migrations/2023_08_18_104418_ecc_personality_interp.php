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
        Schema::create('ecc_personality_interp', function (Blueprint $table) {
            $table->increments('id_interp')->unsigned();
            $table->tinyInteger('publish');
            $table->tinyInteger('cat_id')->unsigned();
            $table->string('alias_code');
            $table->tinyInteger('range_start')->unsigned();
            $table->text('interpretasi');
            $table->text('interpretasi_alt');
            $table->text('complete_interpretation');
            $table->tinyInteger('range_end')->unsigned();
            $table->string('description',200);
            $table->text('tendency_work');
            $table->text('tendency_communication');
            $table->text('powers');
            $table->text('less');
            $table->text('psychological_dynamics');
            $table->text('dev_advice');
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
