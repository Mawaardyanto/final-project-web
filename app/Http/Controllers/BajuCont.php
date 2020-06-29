<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baju;
use App\jenis;
use App\stock;

class BajuCont extends Controller
{
    public function show(){
        $baju = baju::all();
        $jenis = jenis::all();

        return view('baju',["data_baju" => $baju,"data_jenis" => $jenis]);
    }

    public function createbaju(Request $req){
         $jenis=jenis::find($req->id_jenis);
         $baju= baju::create($req->all());
         $baju->stock()->create(['jumlah' => 0]);
         $jenis->baju()->save($baju);
        //meletakkan gambar
        if ($req->file('gambar')) {
            $req->file('gambar')->move('/images',$req->file('gambar')->getClientOriginalName());
            $gambar = $req->file('gambar')->getClientOriginalName();
            $id = baju::max('id');
            baju::where('id', $id)
              ->update(['gambar' => $gambar]);
        }
        
        return redirect('/baju');
    }

    public function showedit($id){
        $baju = baju::find($id);
        $jenis = jenis::all();

        return view('updatebaju',["data_baju" => $baju,"data_jenis" => $jenis]);
    }

    public function updatebaju(Request $req,$id){
        $baju = baju::find($id);
        if ($req->file('gambar')) {
            $req->file('gambar')->move('/images',$req->file('gambar')->getClientOriginalName());
            $gambar = $req->file('gambar')->getClientOriginalName();
            $baju->gambar = $gambar;
            $baju->save();
        }
        $baju->update($req->all());
        return redirect('/baju');
    }



    public function deletebaju($id){
        $baju = baju::find($id);
        $baju->delete();
        return redirect('/baju');
    }
}
