<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis;

class JenisCont extends Controller
{
    public function show(){
        $jenis = jenis::all();
        return view('jenis',["data_jenis" => $jenis]);
    }

    public function createjenis(Request $req){
        jenis::create($req->all());
        return redirect('/jenis');
    }

    public function showedit($id){
        $jenis = jenis::find($id);
        return view('updatejenis',["data_jenis" => $jenis]);
    }

    public function updatejenis(Request $req,$id){
        $jenis = jenis::find($id);
        $jenis->update($req->all());
        return redirect('/jenis');
    }

    public function deletejenis($id){
        $jenis = jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');
    }
}
