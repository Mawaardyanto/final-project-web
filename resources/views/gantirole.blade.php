@extends('layouts.app')

@section('title')
    Role
@endsection

@section('content')
<div class="inner-block">

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Ganti Peran
                                </div>
                <form action={{url('/gantirole/'.auth()->user()->id)}} method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Input Kode Peran</label>
                <input type="password" class="form-control" id="exampleFormControlInput1"  name="kode" required>
                </div>
                  <button type="submit" class="btn btn-primary">Input</button>
                </form>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>
    </div>

   
@endsection