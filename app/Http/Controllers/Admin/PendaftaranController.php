<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParentUser;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PendaftaranController extends Controller
{
    public function pendaftaranBaru()
    {
        $dataPendaftar = Register::with('parent')->where('status','Pendaftaran Baru')->get();
        return view('Admin.Pendaftaran.pendaftaranBaru',compact('dataPendaftar'));
    }
    
    public function deletePendaftarBaru(Request $request,$id)
    {
        Register::where('id',$id)->delete();
        ParentUser::where('register_id',$id)->delete();

        toast('Berhasil menghapus pendaftar','success');
        return back();
    }


    public function pendaftaranUlang()
    {
        $dataPendaftar = Register::where('status','Pendaftaran Ulang')->get();
        return view('Admin.Pendaftaran.PendaftaranUlang',compact('dataPendaftar'));
    }

    public function deletePendaftaranUlang(Request $request,$id)
    {
        Register::where('id',$id)->delete();
        toast('Berhasil menghapus pendaftar','success');
        return back();
    }

    public function updateStatusPendaftaran(Request $request,$id)
    {
        $update = Register::where('id',$id)->first();
        $update->status_pendaftaran = $request->status_pendaftaran;
        $update->save();

        if($request->status_pendaftaran == 'Berhasil')
        {
            User::create([
                'namaLengkap' => $update->namaLengkap,
                'alamat' => $update->alamat,
                'tanggalLahir' => $update->tanggalLahir,
                'email' => $update->email,
                'password' => Hash::make($update->namaLengkap),
            ]);
        }

        toast('Berhasil Memperbarui Status Pendaftaran Menjadi '.$request->status_pendaftaran,'success');
        return back();
    }
}
