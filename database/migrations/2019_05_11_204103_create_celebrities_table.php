<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('other_names');
            $table->string('country_TLD', 2);
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->reference('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celebrities');
    }
}
