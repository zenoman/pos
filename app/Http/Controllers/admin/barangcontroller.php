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
        $data = DB::table('tb_kodebarang')
        ->select(DB::raw('tb_kodebarang.*, tb_kategori.kategori as namakategori, tb_sub_kategori.nama as namasub'))
        ->leftjoin('tb_kategori','tb_kategori.id','=','tb_kodebarang.kategori')
        ->leftjoin('tb_sub_kategori','tb_sub_kategori.id','=','tb_kodebarang.subkategori')
        ->orderby('id','desc')->get();
        return view('barang/index',['data'=>$data]);
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

    //============================================================
    public function store(Request $request){
        DB::table('tb_kodebarang')
        ->insert([
            'kode_asli'   => $request->kode,
            'kode'        => $request->newkode,
            'nama'        => $request->nama,
            'asal'        => $request->asal,
            'bahan'       => $request->bahan,
            'deskripsi'   => $request->deskripsi,
            'kategori'    => $request->kategori,
            'subkategori' => $request->subkategori,
            'merk'        => $request->merk,
            'status'      => $request->status,
            'subvarian'   => $request->namasubvariasi,
            'varian'      => $request->namavariasi
        ]);

        //-----------------------------------------------
        $i=0;
        foreach ($request->variasisatu as $variasisatu){
            $data[] = [
            'kode_barang'   => $request->newkode,
            'variasi'       => $variasisatu,
            'subvariasi'    => $request->variasidua[$i],
            'harga_beli'    => $request->harga[$i],
            'harga_jual'    => $request->hargajual[$i],
            'stok'          => $request->stok[$i]
            ];
            $i++;
        }
        DB::table('tb_barang')->insert($data);

        //-----------------------------------------------
        foreach ($request->file('fotobarang') as $photos){
            $namagambar=$photos->
            getClientOriginalname();
            $lower_file_name=strtolower($namagambar);
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar=time().'-'.$replace_space;
            $destination=public_path('img/barang/');
            //$destination=base_path('../public_html/img/barang');
            $photos->move($destination,$namagambar);
            
            $datafoto[] = [
                'kode_barang' => $request->newkode,
                'nama'        => $namagambar
            ];
           
        }
        DB::table('gambar')->insert($datafoto);

        //------------------------------------------------
        if($request->hasFile('fotoutama')){
            $namagambar=$request->file('fotoutama')->
            getClientOriginalname();
            $lower_file_name=strtolower($namagambar);
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar=time().'-'.$replace_space;
            $destination=public_path('img/barang/');
            $request->file('fotoutama')->move($destination,$namagambar);

            DB::table('gambar')
            ->insert([
                'kode_barang' => $request->newkode,
                'nama'        => $namagambar,
                'status'      => 'GU'
            ]);

        }

        //------------------------------------------------
        return redirect('barang')
        ->with('status','Data Berhasil Disimpan');
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
    //============================================
    public function show($id){
        $kategori = DB::table('tb_kategori')->orderby('id','desc')->get();
        $subkategori = DB::table('tb_sub_kategori')->orderby('id','desc')->get();
        $merk = DB::table('tb_merk')->orderby('id','desc')->get();
        return view('barang/edit',['kategori'=>$kategori,'subkategori'=>$subkategori,'merk'=>$merk]);
    }
}
