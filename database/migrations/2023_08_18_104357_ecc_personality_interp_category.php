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
        Schema::create('ecc_personality_interp_category', function (Blueprint $table) {
            $table->increments('id_cat')->unsigned();
            $table->string('aspect');
            $table->string('label');
            $table->string('description');
            $table->text('left');
            $table->text('right');
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
