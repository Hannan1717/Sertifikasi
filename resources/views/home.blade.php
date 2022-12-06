@extends('layouts.app')
@section('content')

<center>
    <a class="btn btn-primary" href="/alumni/">Tabel Alumni</a>
    <a class="btn btn-primary" href="/riwayatpekerjaan/">Tabel Riwayat Pekerjaan</a>
    <a class="btn btn-primary" href="/sertifikasi/">Tabel Sertifikasi</a>
</center><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div  class="card-body">
                    <div class="row g-1 align-items-center mt-3">
                        <form action="/alumni" method="GET">
                                <label>Search</label>
                                <input type="search" id="inputPassword5" name="search" class="form-control" aria-describedby="passwordHelpBlock">
                            </form>
                        </div>
                </div>

                <table class="table table-hover mt-2">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>Bekerja Di</th>
                            <th>Nama Sertifikat</th>
                            <th>Nomor Sertifikat</th>
                            <th>Tahun</th>
                            <th>Nama Pekerjaan</th>
                            <th>Jenis Pekerjaan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id}}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>{{ $data->fakultas }}</td>
                                    <td>{{ $data->bekerja_di }}</td>
                                    <td>{{ $data->nama_sertifikat }}</td>
                                    <td>{{ $data->nomor_sertifikat }}</td>
                                    <td>{{ $data->tahun }}</td>
                                    <td>{{ $data->nama_pekerjaan }}</td>
                                    <td>{{ $data->jenis_pekerjaan }}</td>
                                </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection
