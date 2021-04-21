<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function tentang()
    {
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang', compact('nama_prodi', 'universitas', 'kajur'));
    }
    public function kontak()
    {
        
        return view('site.kontak');
    }
    public function layanan()
    {
        
        $list_layanan = [
            'pendidikan dan pengajaran',
            'Bakti pada masyarakat',
            'Pengembangan aplikasi',
            'Analisis data'
        ];
        return view('site.layanan', compact('list_layanan'));
    }
    public function listDosen($tahun)
    {
        echo "ini adalah halaman list dosen" . $tahun;
    }
}
