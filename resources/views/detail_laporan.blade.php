@extends('layouts.app')

@section('title')
    Detail Laporan
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
        <div class="col-md-6 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                      Detail Laporan
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Baju</th>
                                            <th scope="col">Size</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detail as $item)
                                            <tr>
                                                 <th scope="row">{{$loop->iteration}}</th> 
                                                 @foreach ($baju as $item2)
                                                     @if ($item2['id'] == $item['baju_id'])
                                                     <td scope="col">{{$item2['nama_baju']}}</td>
                                                         
                                                     @endif
                                                 @endforeach
                                                 @foreach ($size as $item3)
                                                 @if ($item3['id'] == $item['size_id'])
                                                 <td scope="col"><span class="label label-info">{{$item3["size_baju"]}}</td>
                                                     
                                                 @endif
                                             @endforeach
                                                
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


@endsection


 