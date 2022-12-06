@extends('layouts.app')
@section('content')

<center>
    <a class="btn btn-primary" href="/home/">Home</a>
    <a class="btn btn-primary" href="/riwayatpekerjaan/">Tabel Riwayat Pekerjaan</a>
    <a class="btn btn-primary" href="/sertifikasi/">Tabel Sertifikasi</a>
</center><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Database Alumni Oxford University') }}</div>

                    <div  class="card-body">
                        <a class="btn btn-primary" href="/alumni/create">+ Add</a>
                        <div class="row g-1 align-items-center mt-3">
                            <form action="/alumni" method="GET">
                            <label>Search</label>
                            <input type="search" id="inputPassword5" name="search" class="form-control" aria-describedby="passwordHelpBlock">
                            </form>
                        </div>
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>NIM</th>
                                <th>JENIS KELAMIN</th>
                                <th>NOMOR TELEPON</th>
                                <th>JURUSAN</th>
                                <th>FAKULTAS</th>
                                <th>ANGKATAN</th>
                                <th>BEKERJA DI</th>
                                <th>AKSI</th>
                            </tr>
                                @foreach($alumni as $a)
                                    <tr>
                                        <td>{{$a->id}}</td>
                                        <td>{{$a->nama}}</td>
                                        <td>{{$a->nim}}</td>
                                        <td>{{$a->jenis_kelamin}}</td>
                                        <td>{{$a->nomor_telepon}}</td>
                                        <td>{{$a->jurusan}}</td>
                                        <td>{{$a->fakultas}}</td>
                                        <td>{{$a->angkatan}}</td>
                                        <td>{{$a->bekerja_di}}</td>
                                        <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a class="btn btn-warning" href="/alumni/recover/{{$a->id}}">Recover</a>
                                                        <form action="/alumni/delete/{{$a->id}}" method="POST">
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
                <br><a class="btn btn-primary" href="/alumni">Back</a>
            </div>
        </div>
    </div>
@endsection