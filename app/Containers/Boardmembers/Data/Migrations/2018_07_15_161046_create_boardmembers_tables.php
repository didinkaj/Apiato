<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardmembersTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boardmembers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('fname');
            $table->string('sname');
            $table->string('lname')->nullable();
            $table->string('email');
            $table->integer('phone_no');
            $table->string('department');

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('boardmembers');
    }
}
