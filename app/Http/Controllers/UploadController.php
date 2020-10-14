<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use File;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Gambar::get();
        return view('upload', ['gambar' => $gambar]);
    }
 
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:1024',
            'keterangan' => 'required',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        
        $nama_file = time()."_".$file->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        
        // upload file
        $file->move($tujuan_upload, $nama_file);
        
        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);
            
        return redirect()->back();
    }

    public function hapus($id)
    {
        $gambar = Gambar::where('id', $id)->first();
        File::delete('data_file/'.$gambar->file);

        Gambar::where('id', $id)->delete();

        return redirect()->back();
    }
}
