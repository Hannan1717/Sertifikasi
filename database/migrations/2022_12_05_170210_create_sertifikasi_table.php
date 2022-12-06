<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasi', function (Blueprint $table) {
            $table->id('id_sertifikasi');
            $table->string('nama_sertifikat');
            $table->string('nomor_sertifikat');
            $table->string('tahun');
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
        Schema::table('sertifikasi', function (Blueprint $table) {
            $table->dropColumnIfExist('deleted');
        });
    }
};
