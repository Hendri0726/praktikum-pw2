<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class SiteBackendController extends Controller
{
    public function indexBackend()
    {
        $layanan = Layanan::all();
        return view('layanan.index_backend', compact('layanan'));
    }
    public function detailBack($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.detailBack', compact('layanan'));
    }
    public function ubahForm($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.ubahform', compact('layanan'));
    }
    public function ubah(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('admin.layanan', ['id' => $layanan->id]);
    }

    public function tambah(Request $request)
    {

        $layanan = new Layanan();
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->deskripsi_layanan = $request->deskripsi_layanan;
        $layanan->save();
        return redirect()->route('admin.layanan');
    }
    public function tambahBack()
    {
        return view('layanan.tambahback');
    }
    public function hapus($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        // echo "sudah terhapus";
        return redirect()->route('layanan.index_backend');
    }
}
