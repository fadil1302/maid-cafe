<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class LandController extends Controller
{
    public function index(){

        $data = Pegawai::get();

        return view('landing', compact('data'));
    }

}
