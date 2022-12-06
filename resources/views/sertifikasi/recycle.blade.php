@extends('layouts.app')
@section('content')
   <center>
      <a class="btn btn-primary" href="/home/">Home</a>
      <a class="btn btn-primary" href="/alumni/">Tabel Alumni</a>
      <a class="btn btn-primary" href="/riwayatpekerjaan/">Tabel Riwayat Pekerjaan</a>
   </center><br>

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Tabel Sertifikasi Alumni') }}</div>

               <div class="card-body">
                  <a href="{{ route('sertifikasi.create') }}" type="button" class="btn btn-primary rounded-3">+ Add</a>
                  <div class="row g-1 align-items-center mt-3">
                     <form class="d-flex mb-4" role="search" action="{{ route('sertifikasi.recycle') }}" method="GET">
                        <input class="form-control me-2" id="search" name="search" value="{{ request('keyword') }}"
                           type="search" placeholder="Cari sertifikasi" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  </div><br>

                  <table class="table table-hover">
                     <tr>
                        <th>ID</th>
                        <th>NAMA SERTIFIKAT</th>
                        <th>NOMOR SERTIFIKAT</th>
                        <th>TAHUN</th>
                        <th>AKSI</th>
                     </tr>
                     @foreach ($sertifikasi as $s)
                        <tr>
                           <td>{{ $s->id_sertifikasi }}</td>
                           <td>{{ $s->nama_sertifikat }}</td>
                           <td>{{ $s->nomor_sertifikat }}</td>
                           <td>{{ $s->tahun }}</td>
                           <td>
                              @method('POST')
                              <form method="POST" action="{{ route('sertifikasi.recover', $s->id_sertifikasi) }}">
                                 @csrf
                                 <button type="submit" class="btn btn-warning">Recover</button>
                              </form>
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal"
                                 data-bs-target="#hapusModal{{ $s->id_sertifikasi }}">
                                 Delete
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="hapusModal{{ $s->id_sertifikasi }}" tabindex="-1"
                                 aria-labelledby="hapusModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                       </div>
                                       <form method="POST"
                                          action="{{ route('sertifikasi.forceDelete', $s->id_sertifikasi) }}">
                                          @csrf
                                          <div class="modal-body">
                                             Apakah anda yakin ingin menghapus {{ $s->nama_sertifikat }} permanent?
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                             <button type="submit" class="btn btn-primary">Ya</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
               </div>
               </td>
               </tr>
               @endforeach
               </table>
            </div>
            <a class="btn btn-primary" href="{{ route('sertifikasi.index') }}">
               <- Back</a>
         </div>
      </div>
   </div>
   </div>
   </div>
@endsection
