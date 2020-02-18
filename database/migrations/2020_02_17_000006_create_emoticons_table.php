<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmoticonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emoticons', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedInteger('emoticon_type_id')->nullable()->index();
            $table->unsignedInteger('emoticon_type_order')->nullable()->index();
            $table->unsignedInteger('img_id')->default(2)->index();
            $table->timestamps();
            $table->foreign('emoticon_type_id')->references('id')->on('emoticon_types');
            $table->foreign('img_id')->references('id')->on('imgs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emoticons');
    }
}
