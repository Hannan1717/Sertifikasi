<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SertifikasiController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $sertifikasi = DB::select('select * from sertifikasi where (nama_sertifikat LIKE "%' . $request->search . '%")' . 'AND deleted is null');

            return view('sertifikasi.index')
                ->with('sertifikasi', $sertifikasi);
        } else {
            $sertifikasi = DB::table('sertifikasi')->whereNull('deleted')->get();

            return view('sertifikasi.index')
                ->with('sertifikasi', $sertifikasi);
        }
    }

    public function recycle(Request $request)
    {
        if ($request->has('search')) {
            $sertifikasi = DB::select('select * from sertifikasi where (nama_sertifikat LIKE "%' . $request->search . '%")' . 'AND deleted is not null');
        } else {
            $sertifikasi = DB::table('sertifikasi')->whereNotNull('deleted')->get();
        }
        return view('sertifikasi.recycle')
            ->with('sertifikasi', $sertifikasi);
    }

    public function create()
    {
        return view('sertifikasi.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_sertifikasi' => 'required',
            'nama_sertifikat' => 'required',
            'nomor_sertifikat' => 'required',
            'tahun' => 'required',
        ]);
        DB::table('sertifikasi')->insert([

            'id_sertifikasi' => $request->id_sertifikasi,
            'nama_sertifikat' => $request->nama_sertifikat,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'tahun' => $request->tahun,
        ]);
        return redirect()->route('sertifikasi.index');
    }

    public function edit($id)
    {

        $sertifikasi = DB::table('sertifikasi')->where('id_sertifikasi', $id)->first();
        return view('sertifikasi.edit')->with('sertifikasi', $sertifikasi);
    }



    public function update($id, Request $request)
    {
        $request->validate([
            'nama_sertifikat' => 'required',
            'nomor_sertifikat' => 'required',
            'tahun' => 'required',
        ]);

        DB::table('sertifikasi')->where('id_sertifikasi', $id)->update([
            'id_sertifikasi' => $request->id_sertifikasi,
            'nama_sertifikat' => $request->nama_sertifikat,
            'nomor_sertifikat' => $request->nomor_sertifikat,
            'tahun' => $request->tahun,
        ]);
        return redirect()->route('sertifikasi.index')->with('success', 'Data sertifikat berhasil diubah');
    }


    public function destroy($id)
    {

        DB::table('sertifikasi')
            ->where('id_sertifikasi', $id)
            ->update(['deleted' => Carbon::now()]);
        return redirect()->route('sertifikasi.index')->with('success', 'Data sertifikasi berhasil Dihapus ke recyle');
    }

    public function recover(request $request, String $id)
    {
        DB::table('sertifikasi')->where('id_sertifikasi', $id)->update([
            'deleted' => null
        ]);
        return redirect()->route('sertifikasi.index')->with('success', 'Data sertifikasi berhasil di recover');
    }

    public function forceDelete($id)
    {
        DB::delete('DELETE FROM sertifikasi WHERE id_sertifikasi = :id_sertifikasi', ['id_sertifikasi' => $id]);

        return redirect()->route('sertifikasi.recycle')->with('success', 'Data sertifikasi berhasil dihapus permanent');
    }
}
