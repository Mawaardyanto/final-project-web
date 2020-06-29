@extends('layouts.app')

@section('title')
    Edit Jenis
@endsection

@section('content')
<div class="inner-block">

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Edit Jenis
                                </div>
                <form action={{url('/prosesjenis/'.$data_jenis->id)}} method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama jenis</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_jenis->nama_jenis}}" name="nama_jenis" required>
                </div>
                  <button type="submit" class="btn btn-primary">ubah</button>
                </form>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>
    </div>

   
@endsection