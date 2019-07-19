<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class uombarangcontroller extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('tb_uom')->orderby('id','desc')->get();
        $websetting = DB::table('tb_setting')->limit(1)->get();
        return view('uom/index',['data'=>$data,'websetting'=>$websetting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_uom')
        ->insert([
            'nama'=>$request->nama,
            'jumlah'=>$request->isi
        ]);

        return redirect('uom-barang')->with('status','Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        DB::table('tb_uom')
        ->where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'jumlah'=>$request->isi
        ]);
      return redirect('uom-barang')->with('status','Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        DB::table('tb_uom')->where('id',$id)->delete();
        return redirect('uom-barang')->with('status','Data Berhasil Dihapus');
    }
}
