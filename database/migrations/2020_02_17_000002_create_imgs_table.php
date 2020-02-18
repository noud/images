<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgs', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedInteger('img_type_id')->index();
            $table->string('name')->index();
            $table->string('filename')->unique()->index();
            $table->boolean('time')->default(0);
            $table->timestamp('uploaded_at');
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
        Schema::dropIfExists('imgs');
    }
}
