<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('date_id');
            $table->integer('staff_id');
            $table->string('booking_name',50);
            $table->text('booking_contact');
            $table->string('booking_email',30)->nullable();
            $table->integer('service_id');
            $table->string('booking_password',20);
            $table->string('booking_status',10);
            $table->text('booking_memo')->nullable();

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
        Schema::dropIfExists('booking');
    }
}
