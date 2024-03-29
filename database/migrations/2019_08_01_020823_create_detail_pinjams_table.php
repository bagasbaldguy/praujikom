<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pinjams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peminjaman_kode');
            $table->foreign('peminjaman_kode')->references('id')->on('peminjamen')->onDelete('cascade');
            
            $table->unsignedBigInteger('buku_kode');
            $table->foreign('buku_kode')->references('id')->on('bukus')->onDelete('cascade');

            $table->date('detail_tgl_kembali');
            $table->integer('detail_denda');
            $table->string('detail_status_kembali');
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
        Schema::dropIfExists('detail_pinjams');
    }
}
