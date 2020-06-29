<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RoleCont extends Controller
{
    public function show(){
        return view('gantirole');
    }

    public function ganti_role(Request $req,$id){
        $user = User::find($id);
        if($req->kode == 'admin'){
            $user->update(['role' => 'admin']);
        }elseif ($req->kode == 'pemilik toko') {
           $user->update(['role' => 'pemilik toko']);
        }
        return redirect('/');
}

}
