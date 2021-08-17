<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title'); 
            $table->string('job_title_am');
            $table->string('job_title_ru');
            $table->string('location');
            $table->string('location_am');
            $table->string('location_en');
            $table->text('job_desc');
            $table->text('job_desc_am');
            $table->text('job_desc_ru');
            $table->text('technologies');
            $table->text('technologies_am');
            $table->text('technologies_ru');
            $table->text('requirements');
            $table->text('requirements_am');
            $table->text('requirements_ru');
            $table->text('benefits');
            $table->text('benefits_am');
            $table->text('benefits_ru');
            $table->date('deadline');
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
        Schema::dropIfExists('careers');
    }
}
