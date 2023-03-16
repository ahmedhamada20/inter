<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('social_icon');
            $table->string('social_link');
            $table->string('phone');
            $table->string('mail');
            $table->string('slider_image');
            $table->string('slider_heading');
            $table->string('slider_disc');
            $table->string('button_text');
            $table->string('button_link');
            $table->string('tab_title_1');
            $table->string('tab_disc_1');
            $table->string('tab_title_2');
            $table->string('tab_disc_2');
            $table->string('tab_title_3');
            $table->string('tab_disc_3');
            $table->string('course_heading');
            $table->string('course_disc');
            $table->string('select_image');
            $table->string('select_title');
            $table->string('select_disc');
            $table->string('select_icon_1');
            $table->string('select_heading_1');
            $table->string('select_disc_1');
            $table->string('select_icon_2');
            $table->string('select_heading_2');
            $table->string('select_disc_2');
            $table->string('form_title');
            $table->string('form_client_name');
            $table->string('form_client_phone');
            $table->string('form_client_mail');
            $table->string('event_heading');
            $table->string('event_disc');
            $table->string('event_image');
            $table->string('event_date');
            $table->string('event_name');
            $table->string('event_short_disc');
            $table->string('event_full_disc');
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
        Schema::dropIfExists('homes');
    }
}
