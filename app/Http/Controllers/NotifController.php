<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NotifController extends Controller
{
    public function index()
    {
        return view('notifikasi');
    }

    public function sukses()
    {
        Session::flash('type', 'success');
        Session::flash('message', 'Ini notifikasi SUKSES');

        return redirect('pesan');
    }

    public function peringatan()
    {
        Session::flash('type', 'warning');
        Session::flash('message', 'Ini notifikasi PERINGATAN');

        return redirect('pesan');
    }

    public function gagal()
    {
        Session::flash('type', 'danger');
        Session::flash('message', 'Ini notifikasi GAGAL');

        return redirect('pesan');
    }
}
