<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Alumnicontroller extends Controller
{
    public function index(Request $request){
        $no = 1;
        if($request->has('search')){
            $alumni = DB::table('alumni')
            ->where('nama','LIKE','%' .$request->search .'%')
            ->get();
            }else{
                $alumni = DB::table('alumni')->whereNull('deleted')->get();
            }
        return view('alumni.index',compact(['alumni', 'no']));
    }

    public function recycle(Request $request){

        if($request->has('search')){
            $alumni = DB::table('alumni')
            ->where('deleted','yes')
            ->where('nama','LIKE','%' .$request->search .'%')
            ->get();
            }else{
                $alumni =
                DB::table('alumni')->whereNotNull('deleted')->get();
            }
        return view('alumni.recycle',compact(['alumni']));
    }


    public function create()
    {
        return view('alumni.create');
    }

    public function store(Request $request)
    {

        DB::table('alumni')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'angkatan' => $request->angkatan,
            'bekerja_di' => $request->bekerja_di,
            'id_riwayat_pekerjaan' => $request->id_riwayat_pekerjaan,
            'id_sertifikasi' => $request->id_sertifikasi,
        ]);
        return redirect('/alumni');
    }

    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return view('alumni.edit',compact(['alumni']));
    }

    public function update($id, Request $request)
    {
        $alumni = Alumni::find($id);
        $alumni->update($request->except(['_token','submit']));
        return redirect('/alumni');
    }

    // public function destroy(request $request,String $id)
    // {
    //     // dd($request);
    //     DB::table('alumni')->where('id',$id)->update([
    //         'deleted' => "yes"]);
    //     return redirect('/alumni');
    // }

    public function destroy($id)
    {
        DB::table('alumni')
            ->where('id', $id)
            ->update(['deleted' => Carbon::now()]);
        return redirect('/alumni');
    }

    public function recover(request $request,String $id)
    {
        //dd($request);
        DB::table('alumni')->where('id',$id)->update([
            'deleted' => null]);
        return redirect('/alumni');
    }

    public function destroy2($id)
    {
        $alumni = DB::table('alumni')->where('id', $id)->delete();
        return redirect('/alumni');
    }
}