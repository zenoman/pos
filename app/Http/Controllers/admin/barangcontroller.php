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
        $kategori = DB::table('tb_kategori')->orderby('id','desc')->get();
        $subkategori = DB::table('tb_sub_kategori')->orderby('id','desc')->get();
        $merk = DB::table('tb_merk')->orderby('id','desc')->get();
        return view('barang/create',['kode'=>$finalkode,'newkode'=>$finalkodenew,'kategori'=>$kategori,'subkategori'=>$subkategori,'merk'=>$merk]);
    }

    //==========================================
    public function import(){
        return view('barang/import');
    }
    //============================================
    public function carisubkategori($id){
        $data = DB::table('tb_sub_kategori')->where('id_kategori',$id)->get();
        return response()->json($data);
    }
}
