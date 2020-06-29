@extends('layouts.app')

@section('title')
    Edit Size
@endsection

@section('content')
<div class="inner-block">

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Edit Size
                                </div>
                <form action={{url('/prosessize/'.$data_size->id)}} method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama size</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_size->size_baju}}" name="size_baju" required>
                </div>
                  <button type="submit" class="btn btn-primary">ubah</button>
                </form>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>
    </div>

   
@endsection