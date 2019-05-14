<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('celebrity_id')->unsigned();
            $table->string('title');
            $table->string('excerpt');
            $table->string('story');
            $table->string('image');
            $table->string('video');
            $table->integer('social_score');
            $table->integer('source_id')->unsigned();
            $table->string('source_url');
            $table->string('news_date');
            $table->timestamps();

            $table->foreign('celebrity_id')->references('id')->on('celebrities');
            $table->foreign('source_id')->references('id')->on('sources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
}
