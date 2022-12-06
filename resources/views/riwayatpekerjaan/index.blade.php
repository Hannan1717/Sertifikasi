@extends('layouts.app')
@section('content')

<center>
    <a class="btn btn-primary" href="/home/">Home</a>
    <a class="btn btn-primary" href="/alumni/">Tabel Alumni</a>
    <a class="btn btn-primary" href="/sertifikasi/">Tabel Sertifikasi</a>
</center><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabel Riwayat Pekerjaan') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/riwayatpekerjaan/create">+ Add</a>
                    <a class="btn btn-primary" href="/riwayatpekerjaan/recycle">Recycle</a>
                        <div class="row g-1 align-items-center mt-3">
                            <form action="/riwayatpekerjaan" method="GET">
                                <label>Search</label>
                                <input type="search" id="inputPassword5" name="search" class="form-control" aria-describedby="passwordHelpBlock">
                            </form>
                        </div><br>
                        
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>NAMA PEKERJAAN</th>
                                <th>JENIS PEKERJAAN</th>
                                <th>TAHUN</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($riwayatpekerjaan as $r)
                            <tr>
                                    <td>{{$r->id_riwayat_pekerjaan}}</td>
                                    <td>{{$r->nama_pekerjaan}}</td>
                                    <td>{{$r->jenis_pekerjaan}}</td>
                                    <td>{{$r->tahun}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-warning" href="/riwayatpekerjaan/{{$r->id_riwayat_pekerjaan}}/edit">Edit</a>
                                            <form action="/riwayatpekerjaan/{{$r->id_riwayat_pekerjaan}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger"type="submit" value="Delete">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection
