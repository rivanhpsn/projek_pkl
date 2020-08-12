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
            $table->bigIncrements('id');
            $table->string('contact_person');
            $table->date('tgl_servis')->nullable();
            $table->unsignedBigInteger('pelanggan_id')->nullable(); // menambahkan kolom baru
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('user_id')->nullable(); // menambahkan kolom baru
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('respon_id')->nullable(); // menambahkan kolom baru
            $table->foreign('respon_id')->references('id')->on('respons');
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
