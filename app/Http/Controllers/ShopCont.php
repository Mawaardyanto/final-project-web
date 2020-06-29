<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baju;
use App\jenis;
class ShopCont extends Controller
{
    public function show(){
        $baju = baju::all();
        $jenis = jenis::all();

        return view('shop',["data_baju" => $baju,"data_jenis" => $jenis]);
    }
}
