<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarUlangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namaLengkap' => 'required',
            'email' => 'required|email|unique:registers',
            'tempatLahir' => 'required|string',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required',
            'usia' => 'required|numeric',
            'tinggiBadan' => 'required|numeric',
            'beratBadan' => 'required|numeric',
            'agama' => 'required',
            'asalSekolah' => 'required',
            'tingkatanSekolah' => 'required',
            'unitLatihan' => 'required',
            'tingkatanSabuk' => 'required',
            'riwayatKesehatan' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required|unique:registers',
            'foto' => 'required|mimes:jpg,png,jpeg,webp|max:4096|image',
        ];
    }

    public function messages()
    {
        return [
            'namaLengkap.required' => 'Nama Lengkap harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email harus diisi dengan benar',

            'tempatLahir.required' => 'Tempat Lahir harus diisi',
            'tanggalLahir.required' => 'Tanggal Lahir harus diisi',
            'jenisKelamin.required' => 'Jenis Kelamin harus diisi',
            'usia.required' => 'Usia anda harus diisi',
            'usia.numeric' => 'Usia anda harus diisi dengan benar',

            'tinggiBadan.required' => 'Masukan tinggi badan anda ',
            'tinggiBadan.numeric' => 'Masukan tinggi harus diisi dengan benar',

            'beratBadan.required' => 'Berat badan harus diisi',
            'beratBadan.numeric' => 'Berat badan harus diisi dengan benar',


            'agama.required' => 'agama harus diisi',
            'asalSekolah.required' => 'Asal sekolah harus diisi',
            'tingkatanSekolah.required' => 'Tingkatan Sekolah harus diisi',
            'unitLatihan.required' => 'Unit Latihan harus diisi',
            'tingkatanSabuk.required' => 'Tingkatan Sabuk harus diisi',
            'riwayatKesehatan.required' => 'Riwayat Kesehatan harus diisi',
            'alamat.required' => 'Alamat harus diisi',

            'noTelp.required' => 'No Telp harus diisi',
            'noTelp.unique' => 'No Telp Sudah terdaftar',

            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus image',
            'foto.max' => 'Ukuran file foto harus kurang dari 2mb',
            'foto.mimes' => 'File foto harus bertipe jpeg png web jpg',
        ];
    }
}
