@extends('layouts.app')
@section('content')
    <div class="container">
    <h1> Edit Data Alumni </h1>
        <form action="/alumni/{{$alumni->id}}" method="POST"> 
            @method('put')    
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->nama}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="nim" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->nim}}">
        </div>

        <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($alumni->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($alumni->jenis_kelamin == "P") selected @endif>Perempuan</option> 
        </select><br>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->nomor_telepon}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->jurusan}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->fakultas}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Angkatan</label>
            <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->angkatan}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bekerja di</label>
            <input type="text" name="bekerja_di" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->bekerja_di}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID riwayatpekerjaan</label>
            <input type="text" name="id_riwayat_pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->id_riwayat_pekerjaan}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID sertifikasi</label>
            <input type="text" name="id_sertifikasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$alumni->id_sertifikasi}}">
        </div>
            
            <a class="btn btn-primary" href="/alumni">Back</a>
            <input type="submit" name="submit" class="btn btn-success" value="Save">
        </form>
    </div>
@endsection