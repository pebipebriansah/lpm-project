<?php

namespace App\Controllers\Pimpinan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PublishBeritaModel;
use App\Models\BeritaModel;
class BeritaController extends BaseController
{
    public function publish_berita()
    {
    $publishBeritaModel = new PublishBeritaModel();
    $berita = $publishBeritaModel->select('publish.*, berita.*, publish.status')
                                 ->join('berita', 'berita.id_berita = publish.id_berita')
                                 ->findAll();
    $data = [
        'title' => 'Data Publish',
        'berita' => $berita
    ];

    return view('pages/pimpinan/publish_berita', $data);
    }
    public function publish($id_publish) {
        $publishBeritaModel = new PublishBeritaModel();
        $beritaModel = new BeritaModel();
    
        // Ambil data publish berdasarkan id_publish
        $publishData = $publishBeritaModel->find($id_publish);
    
        if (!$publishData) {
            session()->setFlashdata('error', 'Data publish tidak ditemukan');
            return redirect()->back()->withInput();
        }
    
        $id_berita = $publishData['id_berita'];
    
        // Lakukan update status publish
        $approve = $publishBeritaModel->update($id_publish, [
            'status' => 'Publish',
            'tanggal_publish' => date('Y-m-d H:i:s'),
        ]);
    
        if ($approve) {
            // Update kolom pimpinan_redaksi di tabel berita
            $beritaModel->update($id_berita, [
                'pimpinan_redaksi' => session()->get('nama_lengkap'),
            ]);
    
            session()->setFlashdata('success', 'Berita siap di publish');
            return redirect()->to(base_url('pimpinan/publish_berita'));
        } else {
            session()->setFlashdata('error', 'Berita gagal di publish');
            return redirect()->back()->withInput();
        }
    }    
}