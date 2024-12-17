<?php

namespace App\Controllers;
use App\Models\PublishBeritaModel;
class Home extends BaseController
{
    public function index()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita','berita.id_berita = publish.id_berita')->orderBy('tanggal_publish','DESC')->findAll()];
        return view('dashboard_user', $data);
    }
    public function politik()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('berita.kategori', 'POLITIK') // Menambahkan kondisi kategori
                                  ->findAll()
        ];
        return view('politik', $data);
    }
    public function peristiwa()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('berita.kategori', 'PERISTIWA') // Menambahkan kondisi kategori
                                  ->findAll()
            ];
        return view('peristiwa', $data);
    }
    public function nasional()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('berita.kategori', 'NASIONAL') // Menambahkan kondisi kategori
                                  ->findAll()
            ];
        return view('nasional', $data);
    }
    public function hukum()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('berita.kategori', 'HUKUM') // Menambahkan kondisi kategori
                                  ->findAll()
                ];
        return view('hukum', $data);
    }
    public function global()
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('berita.kategori', 'GLOBAL') // Menambahkan kondisi kategori
                                  ->findAll()
            ];
        return view('global', $data);
    }
    public function detail($id_publish)
    {
        $publisBerita = new PublishBeritaModel();
        $data = [
            'title' => 'LPM Sinergis',
            'berita' => $publisBerita->join('berita', 'berita.id_berita = publish.id_berita')
                                  ->where('id_publish', $id_publish) // Menambahkan kondisi id_berita
                                  ->first()
        ];
        return view('detail', $data);
    }
}