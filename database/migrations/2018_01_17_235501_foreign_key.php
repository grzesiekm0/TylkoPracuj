<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


      Schema::table('applies', function($table) {


  //  $table->integer('klient_id')->unsigned(


  //$table->integer('id_user')->unsigned()->nullable();
//  $table->integer('id_job')->unsigned()->nullable();
    $table->foreign('id_user')->references('id')->on('users');
    $table->foreign('id_job')->references('id')->on('job');


  });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         $table->dropForeign('applies_job_id_foreign');
    }
}
