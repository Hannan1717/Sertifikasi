<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayatpekerjaan;
use illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class RiwayatpekerjaanController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $riwayatpekerjaan = DB::table('riwayatpekerjaan')->where('nama_pekerjaan','LIKE','%' .$request->search .'%')->get();
            }else{
                $riwayatpekerjaan = DB::table('riwayatpekerjaan')->where('deleted',null)->get();
            }
    
        return view('riwayatpekerjaan.index',compact(['riwayatpekerjaan']));
    }

    public function recycle(Request $request){

        if($request->has('search')){
            $riwayatpekerjaan = DB::table('riwayatpekerjaan')->where('deleted',"yes")->where('nama_pekerjaan','LIKE','%' .$request->search .'%')->get();
            }else{
                $riwayatpekerjaan = DB::table('riwayatpekerjaan')->where('deleted',"yes")->get();
            }
    
        return view('riwayatpekerjaan.recycle',compact(['riwayatpekerjaan']));
    }

    public function create()
    {
        return view('riwayatpekerjaan.create');
    }

    public function store(Request $request)
    {

        DB::table('riwayatpekerjaan')->insert([
                'id_riwayat_pekerjaan' => $request->id_riwayat_pekerjaan,
                'nama_pekerjaan' => $request->nama_pekerjaan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'tahun' => $request->tahun,
        ]);
        return redirect('/riwayatpekerjaan');
    }

    public function edit(request $request, $id)
    {
        $riwayatpekerjaan = DB::table('riwayatpekerjaan')->where('id_riwayat_pekerjaan', $id)->get();
        return view('riwayatpekerjaan.edit',compact(['riwayatpekerjaan']));
    }

    public function update($id, Request $request)
    {
        DB::table('riwayatpekerjaan')->where('id_riwayat_pekerjaan', $id)->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'tahun' => $request->tahun,
        ]);
        return redirect('/riwayatpekerjaan');
    }

    public function destroy(request $request,String $id)
    {
        // dd($request);
        DB::table('riwayatpekerjaan')->where('id',$id)->update([
            'deleted' => "yes"]);
        return redirect('/riwayatpekerjaan');
    }

    public function recover(request $request,String $id)
    {
        //dd($request);
        DB::table('riwayatpekerjaan')->where('id',$id)->update([
            'deleted' => null]);
        return redirect('/riwayatpekerjaan');
    }

    public function destroy2($id)
    {
        $riwayatpekerjaan = Riwayatpekerjaan::find($id);
        $riwayatpekerjaan->delete();
        return redirect('/riwayatpekerjaan');
    }

}
