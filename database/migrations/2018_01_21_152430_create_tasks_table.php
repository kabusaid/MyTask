<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('notes');
            $table->integer('status');
            $table->string('list');
            $table->integer('archived');
            $table->integer('user_id');
            $table->dateTime('due');
            $table->timestamps();

            /*
            "notes": "Terrace Rialto: \n-Add promo rates 1-14 August \n-Decrease prices for November",
            "created": 1501341293,
            "pkey": "0201578d-a850-46c2-9a52-716e3bb8e373",
            "name": "Pricing Booking.com",
            "status": 2,
            "list": "Pricing",
            "user_id": "bfc2dd52-e114-4ba1-9350-5a57bfcf5742",
            "due": 1501484400,
            "account": 1499700995.4461,
            "archived": 0,
            "inquiry_id": "73283de8-f629-479d-9946-24df3bba0a39"
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
