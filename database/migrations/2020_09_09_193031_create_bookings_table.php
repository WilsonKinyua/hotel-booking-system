<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("room_id");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->text("check_in");
            $table->text("check_out");
            $table->integer("rooms");
            $table->integer("adults");
            $table->integer("children")->default(0);
            $table->string("phone");
            $table->text("body")->default(0)->nullable();
            $table->string("unique_id");
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
        Schema::dropIfExists('bookings');
    }
}
