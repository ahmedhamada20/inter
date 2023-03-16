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
             $table->string('header_image');
             $table->string('heading');
             $table->string('who_image');
             $table->string('who_title');
             $table->text('who_disc');
             $table->string('why_heading');
             $table->text('why_disc');
             $table->string('why_image');
             $table->string('tab_title_1');
             $table->text('tab_disc_1');
             $table->string('tab_title_2');
             $table->text('tab_disc_2');
             $table->string('tab_title_3');
             $table->text('tab_disc_3');
             $table->string('tab_title_4');
             $table->text('tab_disc_4');
             $table->string('ask_heading');
             $table->string('button_text');
             $table->string('button_link');
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
