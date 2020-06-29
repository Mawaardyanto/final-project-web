@extends('layouts.app')

@section('title')
    Data Supplier
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
                                     Data Supplier
                                </div>
                                  <!-- Button trigger modal -->
                                  <a type="button" class="btn" data-toggle="modal" data-target="#tambahsupplier" style="float: right">
                                    <i class="far fa-plus-square fa-2x text-primary"></i>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                      <thead>
                                       <th>No</th>
                                       <th>Nama Suplier</th>
                                       <th>No Telp</th>
                                       <th>Alamat</th>
                                       <th>Aksi</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($data_supplier as $item)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                      <td><span class="label label-info">{{$item["nama_supplier"]}}</td>
                                        <td><span class="label label-info">{{$item["tlp"]}}</td>
                                            <td><span class="label label-info">{{$item["alamat"]}}</td>
                                        <td>
                                        <a class="btn btn-warning" href="/editsupplier/{{$item["id"]}}" role="button"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger" href="/deletesupplier/{{$item["id"]}}" role="button"><i class="fas fa-trash"></i></a>
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
  <div class="modal fade" id="tambahsupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/tambahsupplier" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Supplier</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama supplier" name="nama_supplier" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Telepon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nomor telepon" name="tlp" required>
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