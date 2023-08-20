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
        Schema::create('ecc_personality_statement_page', function (Blueprint $table) {
            $table->increments('id_page')->unsigned();
            $table->tinyInteger('publish');
            $table->tinyInteger('page_no')->unsigned();
            $table->integer('creation_id')->unsigned();
            $table->timestamp('creation_date');
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
