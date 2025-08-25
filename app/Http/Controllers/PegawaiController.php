<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // tampilkan semua data
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('tabel-pegawai', compact('pegawai'));
    }

    // simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:pegawais',
            'nama' => 'required',
            'nomer_telepon' => 'required',
            'email' => 'required|email|unique:pegawais',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambahkan');
    }

    // hapus data
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus');
    }
}
