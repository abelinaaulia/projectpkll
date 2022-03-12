<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangkeluars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_barang')->unsigned();
            $table->bigInteger('jumlah');
            $table->date('tgl_keluar');
            $table->foreign('id_barang')->references('id')->
<<<<<<< HEAD
                on('barangs');
=======
            on('barangs')->onUpdate('cascade')->onDelete('cascade');
>>>>>>> 6f8881011d14a6a1e0dde8f298a37e1e47aa0a5a
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
        Schema::dropIfExists('barangkeluars');
    }
}
