<?php

namespace data;

abstract class Biodata
{
    protected $nama;
    protected $tglLahir;
    protected $alamat;

    public function __construct($nama, $tglLahir, $alamat)
    {
        $this->nama = $nama;
        $this->tglLahir = $tglLahir;
        $this->alamat = $alamat;
    }

    abstract public function showData();
}
