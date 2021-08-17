<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_am');
            $table->string('title_ru');
            $table->string('category_en');
            $table->string('category_am');
            $table->string('category_ru');
            $table->string('image');
            $table->integer('views');
            $table->text('description_en');
            $table->text('description_am');
            $table->text('description_ru');

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
        Schema::dropIfExists('blogs');
    }
}
