<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baju;
use App\jenis;
use App\size;
class DashboardCont extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function show(){
        $baju = baju::all();
        $jenis = jenis::all();
        $size = size::all();

        return view('dashboard',["data_baju" => $baju,"data_jenis" => $jenis,"data_size" => $size]);
    }
}
