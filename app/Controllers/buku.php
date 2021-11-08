<?php

namespace App\Controllers;

use App\Models\Buku as BukuModel;
use App\Models\Kategori;

use App\Controllers\BaseController;

class Buku extends BaseController
{
    public function __construct()
    {
        $this->buku = new BukuModel();
        $this->kategori = new Kategori();
    }

    public function index()
    {
        $buku = $this->buku->join('kategori', 'buku.id_kategori = kategori.id_kategori')->get()->getResultArray();
        $data = [
            'title' => 'Data Buku',
            'buku' => $buku
        ];
        return view('buku/index', $data);
    }
}
