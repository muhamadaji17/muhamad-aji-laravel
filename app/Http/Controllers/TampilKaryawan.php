<?php

namespace App\Http\Controllers;

use App\Models\ModelKaryawan;
use Illuminate\Http\Request;

class TampilKaryawan extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'karyawan' => ModelKaryawan::all()
        ]);
    }

    public function tambahData()
    {
        return view('tambahData', [
            'title' => 'Tambah Data'
        ]);
    }

    public function saveData(Request $request)
    {
        ModelKaryawan::create($request->all());
        return redirect('home')->with('success', 'Data Berhasil di Tambah');
    }

    public function editKaryawan($id)
    {
        $karyawan = ModelKaryawan::find($id);
        return view('editKaryawan', [
            'karyawan' => $karyawan,
            'title' => 'Edit Data'
        ]);
    }

    public function updateData(Request $request, $id)
    {

        $karyawan = ModelKaryawan::find($id);
        $karyawan->update($request->all());
        return redirect('home')->with('success', 'Data Berhasil di Update');
    }

    public function deleteData($id)
    {
        $karyawan = ModelKaryawan::find($id);
        $karyawan->delete();
        return redirect('home')->with('success', 'Data Berhasil di Hapus');
    }

    public function detailKaryawan($id)
    {
        return view('detailKaryawan', [
            'title' => 'Detail Karyawan',
            'karyawan' => ModelKaryawan::find($id)
        ]);
    }
}
