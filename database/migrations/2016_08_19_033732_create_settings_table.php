<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('site_code');
            $table->string('site_title');
            $table->string('owner');
            $table->string('street');
            $table->string('barangay');
            $table->integer('municipality_id');
            $table->integer('region_id');
            $table->integer('country_id');
            $table->string('zip_code');
            $table->string('contact');
            $table->string('fax');
            $table->string('tin');
            $table->integer('site_level_id');
            $table->integer('site_type_id');
            $table->integer('academic_year');
            $table->integer('template_id');
            $table->integer('activated_modules');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
