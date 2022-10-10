<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrestasiRequest;
use App\Models\achievement;
use App\Models\ListAchievement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Prestasi.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrestasiRequest $request)
    {
        
        $achievement = new achievement;
        $achievement->namaLengkap = $request->namaLengkap;
        $achievement->asalSekolah = $request->asalSekolah;
        $achievement->tingkatanSekolah = $request->tingkatanSekolah;
        $achievement->status = $request->status;
        $achievement->save();
        
        $length = count($request->daftarJuara);
        for($i = 0 ; $i < $length ; $i++){
            $listachievement = new ListAchievement;
            $listachievement->achievements_id = $achievement->id;
            $listachievement->Juara = $request->daftarJuara[$i]['daftarJuara'];
            $listachievement->save();
        }
        toast('Berhasil menambahkan prestasi','success');
        return back();
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

    public function prestasiSD()
    {
        $prestasiSD = achievement::where('status','Prestasi SD')->get();
        return view('Admin.Prestasi.PrestasiSD',compact('prestasiSD'));
    }

    public function prestasiRemaja()
    {
        $prestasiRemaja = achievement::where('status','Prestasi Remaja')->get();
        return view('Admin.Prestasi.PrestasiRemaja',compact('prestasiRemaja'));
    }
}
