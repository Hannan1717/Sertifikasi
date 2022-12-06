@extends('layouts.app')
@section('content')
    <div class="container">
        <h1> Edit Data Riwayat Pekerjaan </h1>
        <form action="/riwayatpekerjaan/{{$riwayatpekerjaan->id}}" method="POST"> 
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$riwayatpekerjaan->nama_pekerjaan}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Pekerjaan</label>
                <input type="text" name="jenis_pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$riwayatpekerjaan->jenis_pekerjaan}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$riwayatpekerjaan->tahun}}">
            </div>
            
            <a class="btn btn-primary" href="/riwayatpekerjaan">Back</a>
            <input type="submit" name="submit" class="btn btn-success" value="Save">
        </form>
    </div>
@endsection