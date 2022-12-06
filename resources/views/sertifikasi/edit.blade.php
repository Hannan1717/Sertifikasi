@extends('layouts.app')
@section('content')
   <div class="container">
      <h1> Edit Data Sertifikat </h1>
      <form method="post" action="{{ route('sertifikasi.update', $sertifikasi->id_sertifikasi) }}">
         @csrf
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Sertifikasi</label>
            <input type="text" name="id_sertifikasi" class="form-control" aria-describedby="emailHelp"
               value="{{ $sertifikasi->id_sertifikasi }}">
         </div>

         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Sertifikat</label>
            <input type="text" name="nama_sertifikat" class="form-control" aria-describedby="emailHelp"
               value="{{ $sertifikasi->nama_sertifikat }}">
         </div>

         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor Sertifikat</label>
            <input type="text" name="nomor_sertifikat" class="form-control" aria-describedby="emailHelp"
               value="{{ $sertifikasi->nomor_sertifikat }}">
         </div>

         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun</label>
            <input type="text" name="tahun" class="form-control" aria-describedby="emailHelp"
               value="{{ $sertifikasi->tahun }}">
         </div>

         <a class="btn btn-primary" href="{{ route('sertifikasi.index') }}">Back</a>
         <input type="submit" name="submit" class="btn btn-success" value="Save">
      </form>
   </div>
@endsection
