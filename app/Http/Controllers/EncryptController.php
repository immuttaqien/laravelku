<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class EncryptController extends Controller
{
    public function enkripsi()
    {        
        $encrypted = Crypt::encryptString('Belajar Laravel Di malasngoding.com');
        $decrypted = Crypt::decryptString($encrypted);
        
        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }

    public function data()
    {
        $parameter = [
            'nama' => 'Ilham Muttaqien',
            'pekerjaan' => 'Programmer'
        ];

        $enkripsi = Crypt::encrypt($parameter);
        echo '<a href="/data/'.$enkripsi.'">Klik</a>';
    }

    public function data_proses($data)
    {
        $data = Crypt::decrypt($data);

        echo 'Nama : '.$data['nama'];
        echo '<br>';
        echo 'Pekerjaan : '.$data['pekerjaan'];
    }

    public function hash()
    {
        $hash_password = Hash::make('rahasia');
        echo $hash_password;
    }

    public function hash_check()
    {
        if (Hash::check('rahasia', '$2y$10$Gc84tq/v9mORTaBd.YekKexoNeoUeCe11vq0vhcItCHUwH1RLmeqG')) {
            echo 'Password sesuai';
        }else{
            echo 'Password tidak sesuai';
        }
    }
}
