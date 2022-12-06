@extends('layouts.app')
@section('content')
    <div class="container">
        <h1> Tambah Data Alumni </h1>
        <form action="/alumni/store" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <select class="form-select" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option> 
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fakultas</label>
                <input type="text" name="fakultas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                <input type="text" name="angkatan"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bekerja di</label>
                <input type="text" name="bekerja_di" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID riwayat pekerjaan</label>
                <input type="text" name="id_riwayat_pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID sertifikasi</label>
                <input type="text" name="id_sertifikasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
                <a class="btn btn-primary" href="/alumni">Back</a>
                <input type="submit" name="submit" class="btn btn-success" value="Save"><br>
        </form>
    </div>
@endsection