<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use PDF;
// use Barryvdh\DomPDF\Facades\PDF;
use App\Exports\PegawaiExport;
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
}
