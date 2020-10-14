<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index($nama)
    {
        if($nama == 'akses'){
            return abort(403, 'Anda tidak punya hak akses.');
        }elseif($nama == 'salah'){
            return abort(500, 'Kesalahan pada server atau code.');
        }elseif($nama == 'ilham'){
            return 'Halo, '.$nama;
        }else{
            return abort(404);
        }
    }
}
