<?php

namespace App\Imports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class PegawaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            'nama' => $row[1],
            'email' => $row[2],
            'alamat' => $row[3],
            'telepon' => $row[4],
            'pekerjaan' => $row[5],
        ]);
    }
}
