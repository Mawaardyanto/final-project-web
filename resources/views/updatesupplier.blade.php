@extends('layouts.app')

@section('title')
    Edit Supplier
@endsection

@section('content')

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Edit Supplier
                                </div>
                <form action={{url('/prosessupplier/'.$data_supplier->id)}} method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama supplier</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_supplier->nama_supplier}}" name="nama_supplier" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" >{{$data_supplier->alamat}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Telepon</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_supplier->tlp}}" name="tlp" required>
                </div>
                  <button type="submit" class="btn btn-primary">ubah</button>
                </form>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>


   
@endsection