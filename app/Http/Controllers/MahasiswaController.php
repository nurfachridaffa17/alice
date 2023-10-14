<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbMahasiswa;

class MahasiswaController extends Controller
{
    public function getAllMahasiswa()
    {
        $mahasiswa = TbMahasiswa::select('*') -> get();
        return view('allmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function addMahasiswa()
    {
        return view('addmahasiswa');
    }

    public function getMahasiswa($id)
    {
        $mahasiswa = TbMahasiswa::select('*')->where('id', $id)->get();
        
        return view('datamahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updateMahasiswa(Request $request)
    {
        $mahasiswa = TbMahasiswa::where('id', $request->id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('getAllMahasiswa');
    }

    public function saveMahasiswa(Request $request)
    {
        $mahasiswa = TbMahasiswa::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('getAllMahasiswa');
    }

    public function deleteMahasiswa($id)
    {
        $mahasiswa = TbMahasiswa::where('id', $id)->delete();

        return redirect()->route('getAllMahasiswa');
    }
}
