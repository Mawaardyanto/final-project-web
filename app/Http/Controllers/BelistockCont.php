<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use App\detail_pembelian;
use App\pembelian;
use App\baju;
use App\stock_baju;
use App\stock;

class BelistockCont extends Controller
{
    public function show(){
        $pembelian = 1;
        $supplier = supplier::all();
        $baju = baju::all();
        return view('belistock',['pembelian' => $pembelian,"data_supplier" => $supplier,'data_baju' => $baju]);
    }
    public function tambahpembelian(Request $req, $pembelian){
        $pembelian = $pembelian + $req->pembelian;
        $supplier = supplier::all();
        $baju = baju::all();
        return view('belistock',['pembelian' => $pembelian,"data_supplier" => $supplier,'data_baju' => $baju]);
    }
    public function createdatabeli(Request $req,$beli){
        //membuat pembelian
        $supplier = supplier::find($req->supplier_id);
        $req->request->add(['total_pembelian' => $beli]);
        $supplier->pembelian()->create($req->all());
        
        //detail dan stock
        $baju = baju::all();
        for ($i=0; $i < $beli; $i++) { 
            foreach ($baju as $item) {
                if ($item['id'] == $req['bajuid'.$i]) {
                    $pembelian_id = pembelian::max('id');
                    $pembelian = pembelian::find($pembelian_id);
                    //menampung data detail
                    $detail = detail_pembelian::create([
                        'baju_id' => $item['id'],
                        'harga_baju' => $req['hargabaju'.$i]
                    ]);
                    //memasukkan data detail
                    $pembelian->detail_pembelian()->save($detail);
                    //update stock
                    $updatestock = baju::find($item['id']);
                    $updatestock->stock()->update(['jumlah' => $req['jumlahbaju'.$i]]);

                }
            }
        }

       return redirect('/belistock');
    }
}
