<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
      schema::create('tests', function(Blueprint $table){
        $table->increments('id');
        $table->text('project');
        $table->text('beschrijving');
        //$table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('tests');    //
    }
}
