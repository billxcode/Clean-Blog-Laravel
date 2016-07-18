<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AboutMe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutme', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->string('fullname');
            $table->string('value_about_me');
            $table->string('living_at');
            $table->string('working_at');
            $table->string('studying_at');
            $table->string('site');
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
        Schema::drop('aboutme');
    }
}
