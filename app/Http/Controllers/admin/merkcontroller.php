<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class merkcontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $websetting = DB::table('tb_setting')->limit(1)->get();
        $data = DB::table('tb_merk')->orderby('id','desc')->get();
        return view('merk/index',['data'=>$data,'websetting'=>$websetting]);
    }

    public function store(Request $request)
    {
          if ($request->hasFile('foto')) {
            $namaexs = $request->file('foto')->getClientOriginalName();
            //membuat nama  file menjadi lower case / kecil semua
            $lower_file_name=strtolower($namaexs);
            //merubah nama file yg ada spasi menjadi -
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar = time().'-'.$replace_space;
            $destination = public_path('img/merk');
            $request->file('foto')->move($destination,$namagambar);
        }else{
            $namagambar = 'noimage.jpg';
        }

        DB::table('tb_merk')
        ->insert([
            'nama'=>$request->nama,
            'gambar'=>$namagambar
        ]);
        return redirect('merk-barang')->with('status','Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
         $nama = $request->nama;
        $gambarlama = $request->gambar;

        if ($request->hasFile('foto')) {
            File::delete('img/merk/'.$gambarlama);

            $namaexs = $request->file('foto')->getClientOriginalName();
            //membuat nama  file menjadi lower case / kecil semua
            $lower_file_name=strtolower($namaexs);
            //merubah nama file yg ada spasi menjadi -
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar = time().'-'.$replace_space;
            $destination = public_path('img/merk');
            $request->file('foto')->move($destination,$namagambar);
            DB::table('tb_merk')
            ->where('id',$id)
            ->update([
                'nama'=>$nama,
                'gambar'=>$namagambar
            ]);
        }else{
            DB::table('tb_merk')
            ->where('id',$id)
            ->update([
                'nama'=>$nama
            ]);
        }

        return redirect('merk-barang')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('tb_merk')->where('id',$id)->get();
        foreach ($data as $row) {
             File::delete('img/merk/'.$row->gambar);
            DB::table('tb_merk')->where('id',$id)->delete();
        }
        return redirect('merk-barang')->with('status','Data berhasil dihapus');
    }
}
