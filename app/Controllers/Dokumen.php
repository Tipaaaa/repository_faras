<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use App\Models\JurusanModel;
use App\Models\JendokModel;
use App\Models\TipeModel;

class Dokumen extends BaseController
{
    protected $fakultasModel;
    protected $jurusanModel;
    protected $jendokModel;
    protected $tipeModel;

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
        $this->jurusanModel = new JurusanModel();
        $this->jendokModel = new JendokModel();
        $this->tipeModel = new TipeModel();
    }
    public function fakultas()
    {
        $fakultas = $this->fakultasModel->findAll();
        $data = [
            'title' => 'Fakultas',
            'dokumen' => $fakultas
        ];
        return view('pages/koleksi', $data);
    }

    public function jurusan()
    {
        $jurusan = $this->jurusanModel->findAll();
        $data = [
            'title' => 'Jurusan',
            'dokumen' => $jurusan
        ];
        return view('pages/koleksi', $data);
    }

    public function jenis_dokumen()
    {
        $jendok = $this->jendokModel->findAll();
        $data = [
            'title' => 'Jenis Dokumen',
            'dokumen' => $jendok
        ];
        return view('pages/koleksi', $data);
    }
    public function add()
    {
        $tipeitem = $this->tipeModel->findAll();
        $data = [
            'tipeitem' => $tipeitem
        ];
        return view('user/upload', $data);
    }
}
