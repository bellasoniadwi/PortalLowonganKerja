<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganPekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan_pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pekerjaan')->nullable();
            $table->string('perusahaan')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->string('tipe_pekerjaan')->nullable();
            $table->double('x')->nullable();
            $table->double('y')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('lowongan_pekerjaans');
    }
}
