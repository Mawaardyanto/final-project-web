@extends('layouts.app')

@section('title')
    Laporan
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
                                    Laporan Penjualan
                              </div>
                              <div class="table-responsive">
                                  <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Pembeli</th>
                                        <th scope="col">Tanggal Terjual</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Total Penjualan</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                </thead>
                                <tbody>
                                  @foreach ($penjualan as $item)
                                            <tr>
                                                 <th scope="row">{{$loop->iteration}}</th>
                                                 @foreach ($pembeli as $item2)
                                                     @if ($item['pelanggan_id'] == $item2['id'])
                                                     <td scope="col">{{$item2['name']}}</td>
                                                     @endif
                                                 @endforeach
                                                 
                                                <td scope="col"><span class="label label-info">{{$item["tgl_jual"]}}</td>
                                                <td scope="col"><span class="badge badge-info">Rp{{$item["total_harga"]}}</td>
                                                <td scope="col"><span class="badge badge-info">{{$item["total_penjualan"]}}pcs</td>
                                                <td>
                                                <a class="btn hvr-grow" href="/detail/{{$item["id"]}}" role="button"><i class="fas fa-info-circle fa-2x"></i></a>
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




    
@endsection


 