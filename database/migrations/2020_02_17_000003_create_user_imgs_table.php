<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_imgs', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->bigInteger('img_id')->index()->unsigned();
            $table->bigInteger('user_id')->index()->unsigned();
            $table->timestamps();
            $table->foreign('img_id')->references('id')->on('imgs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_imgs');
    }
}
