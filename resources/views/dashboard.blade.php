@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-3 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                      List Size
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                      <thead>
                                       <th>No</th>
                                       <th>Size</th>
                                  </thead>
                                  <tbody>
                                      @foreach ($data_size as $item)
                                          <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td><span class="label label-primary">{{$item["size_baju"]}}</td>

                                          </tr>
                                      @endforeach
                                    
                                  
                              </tbody>
                          </table>
                      </div>
                 </div>
          </div>

          <div class="col-md-3 chit-chat-layer1-left">
            <div class="work-progres">
                         <div class="chit-chat-heading">
                            List Jenis
                         </div>
                         <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                               <th>No</th>
                               <th>Jenis</th>
                          </thead>
                          <tbody>
                              @foreach ($data_jenis as $item)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                              <td><span class="label label-info">{{$item["nama_jenis"]}}</td>
                              </tr>
                              @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
   </div>
         <div class="clearfix"> </div>
    </div>
    <div class="chit-chat-layer1">
        <div class="col-md-12 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                      Data Baju
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
                                                    @if ($item["id_jenis"] == $item2["id_jenis"])
                                                    <td scope="col"><span class="label label-info">{{$item2["nama_jenis"]}}</td>
                                                    @endif
                                                @endforeach
                                                <td scope="col"><span class="badge badge-info">Rp{{$item["harga_beli"]}}</td>
                                                <td scope="col"><span class="badge badge-info">Rp{{$item["harga_jual"]}}</td>
                                              </tr> 
                                            @endforeach
                                          
                                        </tbody>
                                      </table>
                      </div>
                 </div>
          </div>
         <div class="clearfix"> </div>
    </div>

@endsection