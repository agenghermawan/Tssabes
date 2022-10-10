<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatistikPeserta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class PesertaController extends Controller
{
    public function index()
    {
        $data = array(
            'user' => User::with('statistic')->where('namaLengkap', '!=' ,'admin')->get(),
        );
        return view('Admin.Peserta.index',compact('data'));
    }
    public function create()
    {
        $data = array(
            'user' => User::all(),
        );
        return view('Admin.Peserta.create',compact('data'));
    }
    public function store(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(),[
            'user_id' => ['required'],
            'strength' => ['required'],
            'agility' => ['required'],
            'power' =>  ['required'],
        ])->validate();

        StatistikPeserta::create([
            'user_id' => $request->user_id,
            'strength' => $request->strength,
            'agility' => $request->agility,
            'power' => $request->power,
        ]);

        toast('Berhasil menambahkan Statistik','scucess');
        return redirect()->route('peserta.index');

    }
    public function statistic($IdPeserta)
    {
        $data = array(
            'user' => StatistikPeserta::where('user_id',$IdPeserta)->first(),
        );
        return $data;
    }
}
