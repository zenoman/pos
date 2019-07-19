<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class settingcontroller extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$websetting = DB::table('tb_setting')->limit(1)->get();
    	$data = DB::table('tb_setting')->limit(1)->get();
    	return view('setting/index',['data'=>$data,'websetting'=>$websetting]);
    }

    public function store(Request $request){
    	$kode = $request->kode;
    	$name = $request->nama;
    	$emai = $request->email;
    	$alamat = $request->alamat;
    	$kontak1 = $request->kontak1;
    	$kontak2 = $request->kontak2;
    	$kontak3 = $request->kontak3;
    	$ketarangan = $request->keterangan;
    	$peraturan = $request->peraturan;

    	$setting = DB::table('tb_setting')->where('idsettings',$kode)->get();
        foreach ($setting as $row){
        	if($request->hasFile('ico') && $request->hasFile('logo')){

        		if($request->hasFile('ico')){
		            File::delete('img/setting/'.$row->ico);
		            $nameico=$request->file('ico')->
		            getClientOriginalname();
		            $lower_file_name=strtolower($nameico);
		            $replace_space=str_replace(' ', '-', $lower_file_name);
		            $nameicon=time().'-'.$replace_space;
		            $destination=public_path('img/setting');
		            $request->file('ico')->move($destination,$nameicon);
	            }

	            if($request->hasFile('logo')){
		            File::delete('img/setting/'.$row->logo);
		            $namelog=$request->file('logo')->
		            getClientOriginalname();
		            $lower_file_name=strtolower($namelog);
		            $replace_space=str_replace(' ', '-', $lower_file_name);
		            $namelogo=time().'-'.$replace_space;
		            $destination=public_path('img/setting');
		            $request->file('logo')->move($destination,$namelogo);
	            }

	            DB::table('tb_setting')
	            ->where('idsettings',$kode)
	            ->update([
	            'webName'=>$request->nama,
	            'kontak1'=>$request->kontak1,
	            'kontak2'=>$request->kontak2,
	            'kontak3'=>$request->kontak3,
	            'email'=>$request->email,
	            'ico'=>$nameicon,
	            'logo'=>$namelogo,
	            'peraturan'=>$request->peraturan,
	            'alamat'=>$request->alamat,
	            'keterangan'=>$request->keterangan
	            ]);
        	}elseif($request->hasFile('ico')){
        		if($request->hasFile('ico')){
		            File::delete('img/setting/'.$row->ico);
		            $nameico=$request->file('ico')->
		            getClientOriginalname();
		            $lower_file_name=strtolower($nameico);
		            $replace_space=str_replace(' ', '-', $lower_file_name);
		            $nameicon=time().'-'.$replace_space;
		            $destination=public_path('img/setting');
		            $request->file('ico')->move($destination,$nameicon);
	            }

	             DB::table('tb_setting')
	            ->where('idsettings',$kode)
	            ->update([
	            'webName'=>$request->nama,
	            'kontak1'=>$request->kontak1,
	            'kontak2'=>$request->kontak2,
	            'kontak3'=>$request->kontak3,
	            'email'=>$request->email,
	            'ico'=>$nameicon,
	            'peraturan'=>$request->peraturan,
	            'alamat'=>$request->alamat,
	            'keterangan'=>$request->keterangan
	            ]);
        	}elseif($request->hasFile('logo')){
        		if($request->hasFile('logo')){
		            File::delete('img/setting/'.$row->logo);
		            $namelog=$request->file('logo')->
		            getClientOriginalname();
		            $lower_file_name=strtolower($namelog);
		            $replace_space=str_replace(' ', '-', $lower_file_name);
		            $namelogo=time().'-'.$replace_space;
		            $destination=public_path('img/setting');
		            $request->file('logo')->move($destination,$namelogo);
	            }

	             DB::table('tb_setting')
	            ->where('idsettings',$kode)
	            ->update([
	            'webName'=>$request->nama,
	            'kontak1'=>$request->kontak1,
	            'kontak2'=>$request->kontak2,
	            'kontak3'=>$request->kontak3,
	            'email'=>$request->email,
	            'logo'=>$namelogo,
	            'peraturan'=>$request->peraturan,
	            'alamat'=>$request->alamat,
	            'keterangan'=>$request->keterangan
	            ]);
        	}else{
        		 DB::table('tb_setting')
	            ->where('idsettings',$kode)
	            ->update([
	            'webName'=>$request->nama,
	            'kontak1'=>$request->kontak1,
	            'kontak2'=>$request->kontak2,
	            'kontak3'=>$request->kontak3,
	            'email'=>$request->email,
	            'peraturan'=>$request->peraturan,
	            'alamat'=>$request->alamat,
	            'keterangan'=>$request->keterangan
	            ]);
        	}
        }
        return redirect('setting')->with('status','Data Berhasil Diubah');
    }
}
