<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\ParentUser;
use App\Models\Register;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {

        // $StoreRegister = Register::create([
        //     'namaLengkap' => $request->namaLengkap,
        //     'email' => $request->email,
        //     'tempatLahir' => $request->tempatLahir,
        //     'tanggalLahir' => $request->tanggalLahir,
        //     'jenisKelamin' => $request->jenisKelamin,
        //     'usia' => $request->usia,
        //     'tinggiBadan' => $request->tinggiBadan,
        //     'beratBadan' => $request->beratBadan,
        //     'agama' => $request->agama,
        //     'asalSekolah' => $request->asalSekolah,
        //     'tingkatanSekolah' => $request->tingkatanSekolah,
        //     'unitLatihan' => $request->unitLatihan,
        //     'tingkatanSabuk' => $request->tingkatanSabuk,
        //     'riwayatKesehatan' => $request->riwayatKesehatan,
        //     'alamat' => $request->alamat,
        //     'noTelp' => $request->noTelp,
        //     'foto' => $request->file('foto')->storeAs('image/foto',$request->file('foto')->getClientOriginalName(),'public'),
        //     'akte' => $request->file('akte')->storeAs('image/akte',$request->file('akte')->getClientOriginalName(),'public'),
        //     'status' => $request->status,
        //   ]);

        // ParentUser::create([
        //     'id_pendaftar' => $StoreRegister->id,
        //     'email_wali' => $request->email_wali,
        //     'namaLengkap_wali' => $request->namaLengkap_wali,
        //     'tempatLahir_wali' => $request->tempatLahir_wali,
        //     'tanggalLahir_wali' => $request->tanggalLahir_wali,
        //     'jenisKelamin_wali' => $request->jenisKelamin_wali,
        //     'usia_wali' => $request->usia_wali,
        //     'agama_wali' => $request->agama_wali,
        //     'pekerjaan_wali' => $request->pekerjaan_wali,
        //     'alamat_wali' => $request->alamat_wali,
        //     'noTelp_wali' => $request->noTelp_wali,
        //     'foto_wali' => $request->file('foto_wali')->storeAs('image/foto_wali',$request->file('foto_wali')->getClientOriginalName(),'public'),
        // ]);

        // toast('Berhasil Melakuakan Pendaftaran, Silahkan Menunggu di hubungi oleh tim kami','success');
        // return redirect()->route('Register-user')->with([
        //     'message' => 'Berhasil di daftarkan'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(RegisterRequest $request)
    {

        $StoreRegister = Register::create([
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
            'akte' => $request->file('akte')->storeAs('image/akte',$request->file('akte')->getClientOriginalName(),'public'),
            'status' => $request->status,
          ]);

        ParentUser::create([
            'register_id' => $StoreRegister->id,
            'email_wali' => $request->email_wali,
            'namaLengkap_wali' => $request->namaLengkap_wali,
            'tempatLahir_wali' => $request->tempatLahir_wali,
            'tanggalLahir_wali' => $request->tanggalLahir_wali,
            'jenisKelamin_wali' => $request->jenisKelamin_wali,
            'usia_wali' => $request->usia_wali,
            'agama_wali' => $request->agama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'noTelp_wali' => $request->noTelp_wali,
            'foto_wali' => $request->file('foto_wali')->storeAs('image/foto_wali',$request->file('foto_wali')->getClientOriginalName(),'public'),
        ]);

        toast('Berhasil Melakuakan Pendaftaran, Silahkan Menunggu di hubungi oleh tim kami','success');
        return redirect()->route('sukses')->with([
            'message' => 'Berhasil di daftarkan'
        ]);
    }
    
    public function daftarUlang(Request $request)
    {
        $StoreRegister = Register::create([
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
            'akte' => $request->file('akte')->storeAs('image/akte',$request->file('akte')->getClientOriginalName(),'public'),
            'status' => $request->status,
          ]);

    }
}
