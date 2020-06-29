<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\size;

class SizeCont extends Controller
{
    public function show(){
        $size = size::all();
        return view('size',["data_size" => $size]);
    }

    public function createsize(Request $req){
        size::create($req->all());
        return redirect('/size');
    }

    public function showedit($id){
        $size = size::find($id);
        return view('updatesize',["data_size" => $size]);
    }

    public function updatesize(Request $req,$id){
        $size = size::find($id);
        $size->update($req->all());
        return redirect('/size');
    }

    public function deletesize($id){
        $size = size::find($id);
        $size->delete();
        return redirect('/size');
    }


}
