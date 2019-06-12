<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblKamera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tbl_kamera', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nik', 16);
            $table->string('nama', 100);
            $table->string('alamat', 255);
            $table->string('nama_kamera', 100);
            $table->string('harga', 100);
            

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
        Schema::drop('tbl_kamera');
    }
}
