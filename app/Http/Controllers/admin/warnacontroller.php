<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class warnacontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $websetting = DB::table('tb_setting')->limit(1)->get();
        $data = DB::table('tb_warna')->orderby('id','desc')->get();
        return view('warna/index',['data'=>$data,'websetting'=>$websetting]);
    }

    public function store(Request $request)
    {
        $kode = $request->kode;
        $warna = $request->warna;
        $hex = $request->hex;

        DB::table('tb_warna')
        ->insert([
            'kode'=>$kode,
            'warna'=>$warna,
            'hex' =>$hex
        ]);

        return redirect('warna')->with('status','Data berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        $kode = $request->kode;
        $warna = $request->warna;
        $hex = $request->hex;
        DB::table('tb_warna')
        ->where('id',$id)
        ->update([
            'kode'=>$kode,
            'warna'=>$warna,
            'hex'=>$hex
        ]);

        return redirect('warna')->with('status','Data Berhasil Di ubah');
    }

    public function destroy($id)
    {
        DB::table('tb_warna')
        ->where('id',$id)
        ->delete();
        return redirect('warna')->with('status','Data Berhasil Dihapus');
    }
}
