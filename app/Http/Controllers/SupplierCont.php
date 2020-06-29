<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;

class SupplierCont extends Controller
{
    public function show(){
        $supplier = supplier::all();
        return view('supplier',["data_supplier" => $supplier]);
    }

    public function createsupplier(Request $req){
        supplier::create($req->all());
        return redirect('/supplier');
    }

    public function showedit($id){
        $supplier = supplier::find($id);
        return view('updatesupplier',["data_supplier" => $supplier]);
    }

    public function updatesupplier(Request $req,$id){
        $supplier = supplier::find($id);
        $supplier->update($req->all());
        return redirect('/supplier');
    }

    public function deletesupplier($id){
        $supplier = supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }
}
