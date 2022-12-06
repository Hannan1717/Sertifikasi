@extends('layouts.app')
@section('content')
    <div class="container">
        <h1> Tambah Data Sertifikasi </h1>
        <form action="/sertifikasi/store" method="POST"> 
            @csrf
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Sertifikasi</label>
                <input type="text" name="id_sertifikasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Sertifikat</label>
                <input type="text" name="nama_sertifikat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Sertifikat</label>
                <input type="text" name="nomor_sertifikat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <a class="btn btn-primary" href="/sertifikasi">Back</a>
            <input type="submit" name="submit" class="btn btn-success" value="Save">
        </form>
    </div>
@endsection