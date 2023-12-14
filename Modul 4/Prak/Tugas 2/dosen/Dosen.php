<?php

namespace dosen;

use data\Biodata;
use data\Jabatan;

class Dosen extends Biodata
{
    use Jabatan;

    public function showData()
    {
        return [
            'nama' => $this->nama,
            'tanggal_lahir' => $this->tglLahir,
            'alamat' => $this->alamat,
            'status' => $this->Dosen()
        ];
    }
}
