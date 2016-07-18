<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactMe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactme', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->string('email',50);
            $table->string('facebook',50);
            $table->string('linkedin',50);
            $table->string('twitter',50);
            $table->string('brandedme',50);
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
        Schema::drop('contactme');
    }
}
