<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BeritaModel;
class BeritaController extends BaseController
{
    public function index()
    {
        $beritaModel = new BeritaModel();
        $data = [
            'title' => 'Data Berita',
            'berita' => $beritaModel->findAll()
        ];
    return view('pages/admin/berita', $data);
    }
    public function save(){
        $beritaModel = new BeritaModel();
        $lastID = $beritaModel->getLastID();
        if($lastID == null){
            $incrementId = 1;
        }else{
            $sliceId = substr($lastID, 3);
            $incrementId = $sliceId + 1;
        }
        $id_berita = 'BRT'.str_pad($incrementId, 3, '0', STR_PAD_LEFT);
        $data = [
            'id_berita' => $id_berita,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
            'kategori' => $this->request->getPost('kategori'),
            'tanggal' => date('Y-m-d'),
            'jurnalis' => session()->get('nama_lengkap'),
            'editor' => '',
            'pimpinan_redaksi' => '',
            'status' => 'Belum Cek',
        ];
        $beritaModel->insert($data);
        return redirect()->to('/admin/berita');
    }
}