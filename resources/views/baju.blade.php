@extends('layouts.app')

@section('title')
    Baju
@endsection
@section('content')
    <!--mainpage chit-chating-->
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
    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                      Data Baju
                                       <!-- Button trigger modal -->
                                    <a type="button" class="btn" data-toggle="modal" data-target="#tambahbaju" style="float: right">
                                        <i class="far fa-plus-square fa-2x text-primary"></i>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Harga Beli</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_baju as $item)
                                            <tr>
                                                 <th scope="row">{{$loop->iteration}}</th>
                                            <td scope="col"><img class="img-responsive" src="images/{{$item["gambar"]}}" alt="" width="100px" height="100px"></td>
                                                 <td scope="col">{{$item["nama_baju"]}}</td>
                                                <td scope="col"><span class="label label-info">{{$item["merk"]}}</td>
                                                @foreach ($data_jenis as $item2)
                                                    @if ($item["id"] == $item2["jenis_id"])
                                                    <td scope="col"><span class="label label-info">{{$item2["nama_jenis"]}}</td>
                                                    @endif
                                                @endforeach
                                                <td scope="col"><span class="badge badge-info">Rp{{$item["harga_beli"]}}</td>
                                                <td scope="col"><span class="badge badge-info">Rp{{$item["harga_jual"]}}</td>
                                                <td>
                                                <a class="btn btn-warning" href="/editbaju/{{$item["id"]}}" role="button"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger" href="/deletebaju/{{$item["id"]}}" role="button"><i class="fas fa-trash"></i></a>
                                                </td>
                                              </tr> 
                                            @endforeach
                                          
                                        </tbody>
                                      </table>
                      </div>
                 </div>
          </div>
    </div>
    <div class="clearfix"> </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="tambahbaju" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Baju</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/tambahbaju" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Baju</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama baju" name="nama_baju" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Merk baju</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk" name="merk" required>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Baju</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="id_jenis" required>
                    <option value="" selected>pilih...</option>
                    @foreach ($data_jenis as $item)
                  <option value="{{$item["id"]}}">{{$item["nama_jenis"]}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto Baju</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Beli</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="berapa harganya" name="harga_beli" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Jual</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="berapa harganya" name="harga_jual" required>
                  </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">tambah</button>
        </form>
        </div>
      </div>
    </div>

    
@endsection


 