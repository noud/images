<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exts', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedInteger('img_type_id')->index();
            $table->string('ext')->unique()->index();
            $table->timestamps();
            $table->foreign('img_type_id')->references('id')->on('img_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exts');
    }
}
