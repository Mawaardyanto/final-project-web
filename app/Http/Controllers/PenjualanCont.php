<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\baju;
use \App\size;
use \App\stock;
use \App\penjualan;
use \App\detail_penjualan;
use \App\User;
class PenjualanCont extends Controller
{
    public function show($id){
        $size = size::all();
        $baju = baju::find($id);
        return view('penjualan',['data_baju' => $baju, 'data_size' => $size]);
    }

    public function jual(Request $req){
        $baju = baju::find($req->baju_id);
        $total_harga = $req->total_penjualan * $req->harga_baju;
        $req->request->add(['total_harga' => $total_harga]);

        $stock = $baju->stock->jumlah - $req->total_penjualan;
        if ($stock >= 0) {
            $jual = penjualan::create($req->all());
            $jual->detail_penjualan()->create($req->all());
            $baju->stock()->update(['jumlah' => $stock]);
            return redirect ('/shop');
        }else {
            return redirect('/beli/'.$req->baju_id)->with(['failed' => 'Mohon maaf stock tidak mencukupi']);
        }
        
    }
    public function laporan(){
        $penjualan = penjualan::all();
        $user = User::all();
        return view('laporan',['penjualan' => $penjualan,'pembeli' => $user]);
    }
    public function detail_laporan($id){
        $penjualan = penjualan::find($id);
        $detail = $penjualan->detail_penjualan()->get();
        $baju = baju::all();
        $size = size::all();
        return view('detail_laporan',['detail' => $detail,'baju' => $baju, 'size' => $size]);
    }
}
 