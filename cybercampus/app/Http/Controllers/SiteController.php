<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataku;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('site.beranda'); //lokasi: resource/views/beranda.php
    }

    public function testing()
    {
        return view('site.testing');
    }

    public function tentang()
    {
        $nama_prodi = 'Sistem Informasi';
        $universitas = 'Universitas Tanjungpura';
        $kajur = 'Ilhamsyah';

        return view('site.tentang', compact('nama_prodi', 'universitas', 'kajur')); //menggunakan compact untuk value dan key yang sama
    }

    public function kontak()
    {
        return view('site.kontak');
    }

    public function layanan()
    {
        $list_layanan = [
            'Pendidikan dan Pengajaran',
            'Bakti pada Masyarakat',
            'Penelitian',
            'Pengembangan Aplikasi',
            'Analisis Data'
        ];
        return view('site.layanan', compact('list_layanan'));
    }

    public function listDosen($tahun)
    {
        echo "ini adalah halaman list dosen " . $tahun;
    }

    public function percontohan()
    {
        $dataku = new Dataku();
        $dt = $dataku->semuaData();
        return view('site.percontohan', compact('dt'));
    }
    
    public function tampilLayananRaw()
    {
        $layanan = DB::select('select * from layanan');
        return view('site.tampil_layanan_raw', compact('layanan'));
    }

    public function cobaForm()
    {
        return view('site.coba_form');
    }

    public function prosesForm(Request $request)
    {
        $nama = $request->nama;
        //di sini terdapat proses masukkan nama ke database

        //setelah diproses akan dilempar ke halaman lain
        return redirect()->route('kontak');
    }
}