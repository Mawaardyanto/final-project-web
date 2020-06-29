@extends('layouts.app')

@section('title')
    Data Jenis
@endsection

@section('content')
<!--icons-css-->
<div class="market-updates">
    <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-8 market-update-left">
                <h3>83</h3>
                <h4>Registered User</h4>
                <p>Other hand, we denounce</p>
            </div>
            <div class="col-md-4 market-update-right">
                <i class="fa fa-book fa-4x"> </i>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
            <h3>135</h3>
            <h4>Daily Visitors</h4>
            <p>Other hand, we denounce</p>
          </div>
            <div class="col-md-4 market-update-right">
                <i class="fa fa-book fa-4x"> </i>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-8 market-update-left">
                <h3>23</h3>
                <h4>New Messages</h4>
                <p>Other hand, we denounce</p>
            </div>
            <div class="col-md-4 market-update-right">
                <i class="fa fa-book fa-4x"> </i>
            </div>
          <div class="clearfix"> </div>
        </div>
    </div>
   <div class="clearfix"> </div>
</div>  
    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Data Jenis
                                </div>
                                  <!-- Button trigger modal -->
                                  <a type="button" class="btn" data-toggle="modal" data-target="#tambahjenis" style="float: right">
                                    <i class="far fa-plus-square fa-2x text-primary"></i>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                      <thead>
                                       <th>No</th>
                                       <th>Jenis</th>
                                       <th>Aksi</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($data_jenis as $item)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                      <td><span class="label label-info">{{$item["nama_jenis"]}}</td>
                                        <td>
                                        <a class="btn btn-warning" href="/editjenis/{{$item["id"]}}" role="button"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger" href="/deletejenis/{{$item["id"]}}" role="button"><i class="fas fa-trash"></i></a>
                                        </td>
                                      </tr>
                                      @endforeach
        
                              </tbody>
                          </table>
                      </div>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>
 
 
  <!-- Modal -->
  <div class="modal fade" id="tambahjenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/tambahjenis" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Jenis</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama jenis" name="nama_jenis" required>
                  </div>
               
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection