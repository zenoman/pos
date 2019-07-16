<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class supliercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websetting = DB::table('tb_setting')->limit(1)->get();
        $data = DB::table('tb_supplier')->orderby('id','desc')->get();
        return view('suplier/index',['websetting'=>$websetting,'data'=>$data]);
    }
    
    public function store(Request $request)
    {
        DB::table('tb_supplier')
        ->insert([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'keterangan'=>$request->keterangan
        ]);

        return redirect('supplier')->with('status','Data berhasil disimpan');
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
        DB::table('tb_supplier')
        ->where('id',$id)
        ->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'keterangan'=>$request->keterangan
        ]);
        return redirect('supplier')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_supplier')
        ->where('id',$id)
        ->delete();
        return redirect('supplier')->with('status','Data berhasil dihapus');
    }
}
