<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Http\Requests\DaftarUlangRequest;

class DaftarUlangController extends Controller
{
    public function index()
    {
        return view('User.DaftarUlang');
    }

    public function store(DaftarUlangRequest $request)
    {
        Register::create([
            'namaLengkap' => $request->namaLengkap,
            'email' => $request->email,
            'tempatLahir' => $request->tempatLahir,
            'tanggalLahir' => $request->tanggalLahir,
            'jenisKelamin' => $request->jenisKelamin,
            'usia' => $request->usia,
            'tinggiBadan' => $request->tinggiBadan,
            'beratBadan' => $request->beratBadan,
            'agama' => $request->agama,
            'asalSekolah' => $request->asalSekolah,
            'tingkatanSekolah' => $request->tingkatanSekolah,
            'unitLatihan' => $request->unitLatihan,
            'tingkatanSabuk' => $request->tingkatanSabuk,
            'riwayatKesehatan' => $request->riwayatKesehatan,
            'alamat' => $request->alamat,
            'noTelp' => $request->noTelp,
            'foto' => $request->file('foto')->storeAs('image/foto',$request->file('foto')->getClientOriginalName(),'public'),
            'status' => $request->status,
          ]);

        toast('Berhasil Melakuakan Pendaftaran Ulang, Silahkan Menunggu di hubungi oleh tim kami','success');
        return redirect()->route('sukses.daftarUlang')->with([
                'message' => 'Berhasil di daftarkan'
            ]);
    }
}
