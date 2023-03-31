<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // $siswa = Siswa::latest()->paginate(5);
        // return view('siswa.index', compact('siswa'));

        $data = Siswa::all();
        return view('siswa.daftar-siswa', compact('data'));
    }

    public function create()
    {
        return view('siswa.tambah-siswa');
    }

    public function insert(Request $request)
    {
        $data = Siswa::create([
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
        ]);
        // dd($data);
        $data->save();
        return redirect()->route('siswa');
    }

    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('siswa.edit-siswa', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);
        $data->nama = $request->nama;
        $data->asal_sekolah = $request->asal_sekolah;
        $data->tahun_lulus = $request->tahun_lulus;
        $data->save();
        return redirect()->route('siswa');
    }

    public function delete($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa');
    }
}
