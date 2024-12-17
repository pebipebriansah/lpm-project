<?php

namespace App\Controllers\Jurnalis;

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
    return view('pages/jurnalis/berita', $data);
    }
    public function save() {
        $beritaModel = new BeritaModel();
        
        // Generate ID berita
        $lastID = $beritaModel->getLastID();
        if ($lastID == null) {
            $incrementId = 1;
        } else {
            $sliceId = substr($lastID, 3);
            $incrementId = $sliceId + 1;
        }
        $id_berita = 'BRT' . str_pad($incrementId, 3, '0', STR_PAD_LEFT);
    
        // Proses upload gambar
        $photo = $this->request->getFile('photo');
        if ($photo->isValid() && !$photo->hasMoved()) {
            $newName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/uploads', $newName);
            $photoPath = '' . $newName;
        } else {
            $photoPath = ''; // Atur nilai default jika upload gagal
        }
    
        // Data untuk disimpan
        $data = [
            'id_berita' => $id_berita,
            'photo' => $photoPath,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
            'kategori' => $this->request->getPost('kategori'),
            'tanggal' => date('Y-m-d'),
            'jurnalis' => session()->get('nama_lengkap'),
            'editor' => 'Belum ada Editor',
            'pimpinan_redaksi' => 'Belum Ada Pimpinan',
            'status' => 'Belum Cek',
        ];
    
        // Simpan data ke database
        $beritaModel->insert($data);
    
        return redirect()->to('/jurnalis/berita');
    }
    
}