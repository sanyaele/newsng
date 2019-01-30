<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('synonyms');
            $table->string('ussd')->nullable();
            $table->string('website')->nullable();
            $table->string('other_websites')->nullable();
            $table->string('phone_numbers')->nullable();
            $table->string('email_addresses')->nullable();
            $table->string('countryTLD', 2)->default('NG');
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
        Schema::dropIfExists('banks');
    }
}
