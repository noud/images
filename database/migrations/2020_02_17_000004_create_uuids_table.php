<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUuidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uuids', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->bigInteger('user_img_id')->index()->unsigned();
            $table->string('uuid')->index();
            $table->timestamps();
            $table->foreign('user_img_id')->references('id')->on('user_imgs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uuids');
    }
}
