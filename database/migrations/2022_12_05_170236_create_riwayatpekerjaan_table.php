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
        Schema::create('riwayatpekerjaan', function (Blueprint $table) {
            $table->id('id_riwayat_pekerjaan');
            $table->string('nama_pekerjaan');
            $table->string('jenis_pekerjaan');
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
        Schema::table('riwayatpekerjaan', function (Blueprint $table) {
            $table->dropColumnIfExist('deleted');
        });
    }
};
