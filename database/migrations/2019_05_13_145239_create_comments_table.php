<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id')->unsigned();
            $table->string('comment');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->integer('reply_id'); // If this comment is a reply of another comment
            $table->string('name');
            $table->string('email');
            $table->string('verified_email');
            $table->timestamps();

            $table->foreign('story_id')->references('id')->on('stories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
