<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Alumni;
use App\Models\Riwayatpekerjaan;
use App\Models\Sertifikasi;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('nomor_telepon');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('angkatan');
            $table->string('bekerja_di');
            $table->foreignIdFor(Riwayatpekerjaan::class,'id_riwayat_pekerjaan');
            $table->foreignIdFor(Sertifikasi::class,'id_sertifikasi');
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
        Schema::dropIfExists('alumni');
    }
};
