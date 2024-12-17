<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BeritaModel;
use App\Models\PublishBeritaModel;

class BeritaController extends BaseController
{
    public function index()
    {
        $beritaModel = new BeritaModel();
        $data = [
            'title' => 'Halaman Berita',
            'berita' => $beritaModel->findAll(),
        ];
        return view('pages/editor/berita', $data);
    }
    public function history(){
        $beritaModel = new BeritaModel();
        $id_user = session()->get('id_user');
        $berita = $beritaModel->where('editor', session()->get('nama_lengkap'))->findAll();    
        $data = [
            'title' => 'History Berita',
            'berita' => $berita,
        ];
    
        return view('pages/editor/history', $data);
    }
    
    public function update($id_berita){
        $beritaModel = new BeritaModel();
        $data = [
            'judul_berita' => $this->request->getPost('judul_berita'),
            'isi_berita' => $this->request->getPost('isi_berita'),
            'kategori' => $this->request->getPost('kategori'),
            'editor' => session()->get('nama_lengkap'),
            'status' => 'Lulus Cek'
        ];
        if($data){
            $beritaModel->update($id_berita, $data);
            session()->setFlashdata('success', 'Data berhasil diubah');
            return redirect()->to('/editor/berita');
        }else{
            session()->setFlashdata('error', 'Data gagal diubah');
            return redirect()->to('/editor/berita');
        }
    }
    public function konfirmasi($id_berita){
        $beritaModel = new BeritaModel();
        $publishBerita = new PublishBeritaModel();
        $lastID = $publishBerita->getLastID();
        if($lastID == null){
            $incrementId = 1;
        }else{
            $sliceId = substr($lastID, 3);
            $incrementId = $sliceId + 1;
        }
        $id_publish = 'PBS'.str_pad($incrementId, 3, '0', STR_PAD_LEFT);
        $row = [
            'id_publish' => $id_publish,
            'id_berita' => $id_berita,
            'status' => 'Belum Publish',
            'tanggal_publish' => 'Belum Publish'
        ];
        $approve = $beritaModel->update($id_berita,[
            'status' => 'Siap Publish'
        ]);
        if($approve == true){
            $publishBerita->insert($row);
            session()->setFlashdata('success', 'Berita siap di publish');
            return redirect()->to(base_url('editor/berita'));
        } else {
            session()->setFlashdata('error', 'Berita gagal di publish');
            return redirect()->back()->withInput();
        }
    }
}