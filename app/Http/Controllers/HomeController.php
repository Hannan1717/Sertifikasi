<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index() {
        $datas = DB::select('select * from alumni a inner join sertifikasi s on a.id_sertifikasi = s.id_sertifikasi inner join riwayatpekerjaan r on a.id_riwayat_pekerjaan = r.id_riwayat_pekerjaan');
        return view('home')
            ->with('datas', $datas);
    }

}

