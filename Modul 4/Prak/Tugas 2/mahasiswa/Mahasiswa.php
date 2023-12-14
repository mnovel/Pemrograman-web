<?php

namespace mahasiswa;

use data\Biodata;

class Mahasiswa extends Biodata
{
    use \data\Jabatan;

    public function showData()
    {
        return [
            'nama' => $this->nama,
            'tanggal_lahir' => $this->tglLahir,
            'alamat' => $this->alamat,
            'status' => $this->Mahasiswa()
        ];
    }
}
