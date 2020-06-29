@extends('layouts.app')

@section('title')
    Edit Baju
@endsection

@section('content')


    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Edit Baju
                                </div>
                <form action={{url('/prosesbaju/'.$data_baju->id)}} method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Baju</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_baju->nama_baju}}" name="nama_baju" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Merk baju</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_baju->merk}}" name="merk" required>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Baju</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jenis_id" required>
                    <option value="">pilih...</option>
                    @foreach ($data_jenis as $item)
                    @if ($item["id"] == $data_baju->jenis_id)
                    <option value="{{$item["id"]}}" selected>{{$item["nama_jenis"]}}</option>                        
                    @else
                    <option value="{{$item["id"]}}">{{$item["nama_jenis"]}}</option>
                    @endif
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Baju</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Beli</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_baju->harga_beli}}" name="harga_beli" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Jual</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_baju->harga_jual}}" name="harga_jual" required>
                  </div>
                  <button type="submit" class="btn btn-primary">ubah</button>
                </form>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>

   
@endsection