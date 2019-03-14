<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->increments('id')->unique();

            //Shipper Information

            $table->string('shipper_firstN');
            $table->string('shipper_lastN');
            $table->string('shipper_phone');
            $table->string('shipper_address');
            $table->string('shipper_city')->nullable();
            $table->string('shipper_state');
            $table->string('shipper_country');
            $table->string('shipper_email');
            $table->string('shipper_postal');

            //Receiver Information

            $table->string('receiver_firstN');
            $table->string('receiver_lastN');
            $table->string('receiver_phone');
            $table->string('receiver_address');
            $table->string('receiver_city')->nullable();
            $table->string('receiver_state');
            $table->string('receiver_country');
            $table->string('receiver_postal');

            //parcel information

            $table->string('slug')->unique()->nullable();
            $table->string('tracking_no')->unique();
            $table->string('weight');
            $table->string('qty');
            $table->string('status');

            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('transport_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            // $table->integer('tracking_id')->unsigned()->nullable();
            // $table->foreign('tracking_id')->references('id')->on('trackings')->onDelete('cascade');

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
        Schema::dropIfExists('shippings');
    }
}
