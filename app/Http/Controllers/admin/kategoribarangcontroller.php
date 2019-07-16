<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class kategoribarangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websetting = DB::table('tb_setting')->limit(1)->get();
        $data = DB::table('tb_kategori')->orderby('id','desc')->get();
        return view('kategoribarang/index',['data'=>$data,'websetting'=>$websetting]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('gambar_kategori')) {
            $namaexs = $request->file('gambar_kategori')->getClientOriginalName();
            //membuat nama  file menjadi lower case / kecil semua
            $lower_file_name=strtolower($namaexs);
            //merubah nama file yg ada spasi menjadi -
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar = time().'-'.$replace_space;
            $destination = public_path('img/kategori');
            $request->file('gambar_kategori')->move($destination,$namagambar);
        }else{
            $namagambar = 'noimage.jpg';
        }

        DB::table('tb_kategori')
        ->insert([
            'kategori'=>$request->nama,
            'gambar'=>$namagambar
        ]);
        return redirect('kategori-barang')->with('status','Data berhasil disimpan');
    }
    public function update(Request $request, $id)
    {
        $kategori = $request->kategori;
        $gambarlama = $request->gambar;

        if ($request->hasFile('gambar_kategori')) {
            File::delete('img/kategori/'.$gambarlama);

            $namaexs = $request->file('gambar_kategori')->getClientOriginalName();
            //membuat nama  file menjadi lower case / kecil semua
            $lower_file_name=strtolower($namaexs);
            //merubah nama file yg ada spasi menjadi -
            $replace_space=str_replace(' ', '-', $lower_file_name);
            $namagambar = time().'-'.$replace_space;
            $destination = public_path('img/kategori');
            $request->file('gambar_kategori')->move($destination,$namagambar);
            DB::table('tb_kategori')
            ->where('id',$id)
            ->update([
                'kategori'=>$kategori,
                'gambar'=>$namagambar
            ]);
        }else{
            DB::table('tb_kategori')
            ->where('id',$id)
            ->update([
                'kategori'=>$kategori
            ]);
        }

        return redirect('kategori-barang')->with('status','Data berhasil diubah');
    }
    public function destroy($id)
    {
        $data = DB::table('tb_kategori')->where('id',$id)->get();
        foreach ($data as $row) {
             File::delete('img/kategori/'.$row->gambar);
            DB::table('tb_kategori')->where('id',$id)->delete();
        }
        return redirect('kategori-barang')->with('status','Data berhasil dihapus');
    }
}
