<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::orderby('id', 'DESC')->paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function formmahasiswa(){
        return view('formmhs', ['cek' => 'mahasiswa']);
    }

    public function simpanmahasiswa(Request $request){
        $bdg_min = implode(', ', $request->get('bdg_min'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bdg_min' => $bdg_min
        ]);
        return redirect("/mahasiswa")->with('alertcreate', 'Data Berhasil Disimpan');
    }

    public function editmhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmhs', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function updatemhs($id, Request $request)
    {
        $bdg_min = implode(',',$request->bdg_min);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama = $request -> nama;
        $mahasiswa -> gender = $request -> gender;
        $mahasiswa -> jurusan = $request -> jurusan;
        $mahasiswa -> bdg_min = $bdg_min;
        $mahasiswa ->save();
        return redirect('/mahasiswa')->with('alertupdate', 'Data Berhasil Diubah');
    }

    public function hapusmhs($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alertdelete', 'Data Berhasil Dihapus');
    }
}