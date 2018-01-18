<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Job extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('job', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->double('price');
          $table->string('address');
          $table->integer('phone_number');
          $table->string('postal_code');
          $table->string('email');
          $table->string('contents');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('job');
    }
}
