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
             $table->string('futhre_1')->nullable();
             $table->string('futhre_2')->nullable();
             $table->string('futhre_3')->nullable();
             $table->string('futhre_4')->nullable();
             $table->string('futhre_5')->nullable();
             $table->string('futhre_6')->nullable();
             $table->string('futhre_7')->nullable();
             $table->string('futhre_8')->nullable();
             
             $table->text('number_title_1')->nullable();
             $table->text('number_1')->nullable();
             
             $table->text('number_title_2')->nullable();
             $table->text('number_2')->nullable();
      
             $table->text('number_3')->nullable();
             $table->text('number_title_3')->nullable();
         
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
