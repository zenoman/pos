<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class admincontroller extends Controller
{
    
    public function index()
    {
        $data = DB::table('users')->orderby('id','desc')->get();
        return view('admin/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username   = $request->username;
        $nama       = $request->nama;
        $notelp     = $request->notelp;
        $email      = $request->email;
        $level      = $request->level;
        $password   = $request->password;
        $kpassword  = $request->konfirmasi_password;

        if($password==$kpassword){
                    DB::table('users')
                    ->insert([
                        'name'      => $nama,
                        'username'  => $username,
                        'no_telp'    => $notelp,
                        'email'     => $email,
                        'level'     => $level,
                        'password'  => Hash::make($password)
                    ]);
                    return redirect('admin')->with('status','Tambah data sukses');
                }else{
                return back()->with('status','Maaf, Konfirmasi Password Salah');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('users')
        ->where('id',$id)
        ->get();
        return view('admin/edit',['data'=>$data]);
    }
    
    public function update(Request $request, $id)
    {
        $username   = $request->username;
        $nama       = $request->nama;
        $notelp     = $request->notelp;
        $email      = $request->email;
        $level      = $request->level;
        $password   = $request->password;
        $kpassword  = $request->konfirmasi_password;

        if($password!=''){
            if($kpassword!=''){
                if($password==$kpassword){
                    DB::table('users')
                    ->where('id',$id)
                    ->update([
                        'name'      => $nama,
                        'username'  => $username,
                        'no_telp'    => $notelp,
                        'email'     => $email,
                        'level'     => $level,
                        'password'  => Hash::make($password)
                    ]);
                    return redirect('admin')->with('status','Edit data sukses');
                }else{
                return back()->with('status','Maaf, Konfirmasi Password Salah');
                }
            }else{
                return redirect('admin')->with('status','Maaf, Konfirmasi password harus di isi saat mengganti password');
            }
        }else{
             DB::table('users')
                    ->where('id',$id)
                    ->update([
                        'name'      => $nama,
                        'username'  => $username,
                        'no_telp'    => $notelp,
                        'email'     => $email,
                        'level'     => $level
                    ]);
            return redirect('admin')->with('status','Edit data sukses');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')
        ->where('id',$id)
        ->delete();
        return redirect('admin')->with('status','Hapus Data berhasil');
    }
}
