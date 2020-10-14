<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\KirimEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        Mail::to('mt.ilham@gmail.com')->send(new KirimEmail());
        return 'Email telah dikirim.';
    }
}
