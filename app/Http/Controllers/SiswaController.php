<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    function index() {
        $siswa = CalonSiswa::paginate(4);
        return view('list-siswa', compact('siswa'));
    }
    function viewTambahSiswa() {
        return view('tambah-siswa');
    }
    function actionTambahSiswa(Request $request) {
        $data = [
            'name' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'sekolah_asal' => $request->input('sekolah_asal')
        ];
        CalonSiswa::create($data);
        if (Auth::check()) {
            return redirect('/list-siswa');
        }
        else {
            return redirect('/');
        }
    }
    function hapus($id) {
        $a = CalonSiswa::find($id);
        $a->delete();
        return redirect()->route('list-siswa');
    }

    function viewEdit($id) {
        $a = CalonSiswa::find($id);
        return view('edit', compact('a'));
    }
    function edit(Request $request) {
        $id = $request->input('id');
        $data = [
            'name' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'sekolah_asal' => $request->input('sekolah_asal')
        ];
        CalonSiswa::find($id)->update($data);
        return redirect()->route('list-siswa');
    }

    function viewLogin() {
        $pw = Hash::make('femas');
        return view('login', compact('pw'));
    }
    function actionLogin(Request $request) {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('list-siswa');
        }
        return redirect('/login');
    }
    function logout() {
        Auth::logout();
        return view('login');
    }
}
