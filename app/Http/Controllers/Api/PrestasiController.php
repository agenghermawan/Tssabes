<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrestasiResource;
use App\Models\achievement;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        return PrestasiResource::collection(achievement::paginate(5));
    }
    public function prestasiRemaja()
    {
        return PrestasiResource::collection(achievement::where('status','Prestasi Remaja')->paginate(5));
    }

    public function prestasiSD()
    {
        return PrestasiResource::collection(achievement::where('status','Prestasi SD')->paginate(5));

    }
}
