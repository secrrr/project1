<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){

        $data = Dokter::all();
        return view('/dokter/dataDokter',compact('data'));
    }
}
