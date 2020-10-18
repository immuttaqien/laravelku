<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Session;
use PDF;
// use Barryvdh\DomPDF\Facades\PDF;
use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadview('pegawai_pdf', ['pegawai' => $pegawai]);
        // return $pdf->stream();
        return $pdf->download('laporan-pegawai-pdf');
    }

    public function export_excel()
    {
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        // menangkap file excel
        $file = $request->file('file');
        
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);
        
        // import data
        Excel::import(new PegawaiImport, public_path('/file_siswa/'.$nama_file));
        
        // notifikasi dengan session
        Session::flash('sukses','Data Pegawai Berhasil Diimport!');
        
        // alihkan halaman kembali
        return redirect('/pegawai');
    }
}
