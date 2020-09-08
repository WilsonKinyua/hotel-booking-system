<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer("photo_id");
            $table->integer("capacity");
            $table->integer("cost");
            $table->string("name");
            $table->string("size");
            $table->string("bed");
            $table->text("slide_photo_1");
            $table->text("slide_photo_2");
            $table->text("slide_photo_3");
            $table->text("slide_photo_4");
            $table->text("slide_photo_5");
            $table->string("services1");
            $table->string("services2");
            $table->string("services3");
            $table->string("services4");
            $table->string("services5");
            $table->string("services6");
            $table->text("body");
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
        Schema::dropIfExists('rooms');
    }
}
