<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class barangcontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    //==========================================
    public function index()
    {
        return view('barang/index');
    }

    //==========================================
    public function create()
    {
        $tanggal    = date('dmy');
        $hari       = date('d');
        $bulan      = date('m');
        $tahun      = date('y');
        //----------------------------------
        $newhari    = $hari*2+5;
        $newtahun   = $tahun*2+5;
        $newbulan   = $bulan*2+5;
         //----------------------------------
        $kodeuser   = sprintf("%02s",Auth::user()->id);
        $lastuser   = $tanggal."".$kodeuser;
            $kode = DB::table('tb_kodebarang')
            ->where('kode_asli','like','%'.$lastuser.'-%')
            ->max('kode_asli');
        //----------------------------------
            if(!$kode){
                $finalkode      = $tanggal."".$kodeuser."-".sprintf("%03s",1);
                $finalkodenew   = $newhari."".$newbulan."".$newtahun."".$kodeuser."-".sprintf("%03s",1);
            }else{
                $newkode        = explode("-", $kode);
                $nomer          = sprintf("%03s",$newkode[1]+1);
                $finalkode      = $tanggal."-".$kodeuser."-".$nomer;
                $finalkodenew   = $newhari."".$newbulan."".$newtahun."".$kodeuser."-".$nomer;
            }
        return view('barang/create',['kode'=>$finalkode,'newkode'=>$finalkodenew]);
    }

    //==========================================
    public function import(){
        return view('barang/import');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
