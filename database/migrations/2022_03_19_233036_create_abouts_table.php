<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
             $table->id();
             $table->string('image');
             $table->string('name');
             $table->string('notes');
             $table->string('futhre_1');
             $table->string('futhre_2');
             $table->string('futhre_3');
             $table->string('futhre_4');
             $table->string('futhre_5');
             $table->string('futhre_6');
             $table->string('futhre_7');
             $table->string('futhre_8');
             
             $table->text('number_title_1');
             $table->text('number_1');
             
             $table->text('number_title_2');
             $table->text('number_2');
      
             $table->text('number_3');
             $table->text('number_title_3');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
