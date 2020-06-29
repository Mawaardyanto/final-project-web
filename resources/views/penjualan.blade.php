@extends('layouts.app')

@section('title')
    Beli Stok Baju
@endsection

@section('content')

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                    @if ($message = Session::get('failed'))
                    <div class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>    
                @endif
                                <div class="chit-chat-heading">
                                     Beli {{$data_baju->nama_baju}}
                                </div>
                                 
                <form action="/penjualan" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                <input type="hidden" class="form-control" value="{{auth()->user()->id}}" name="pelanggan_id">
                <input type="hidden" class="form-control" id="Tanggal" name="tgl_jual">
                <input type="hidden" class="form-control" value="{{$data_baju->harga_jual}}" name="harga_baju">
                <input type="hidden" class="form-control" value="{{$data_baju->id}}" name="baju_id">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">harga Per PCS</label>
                <h3>{{$data_baju->harga_jual}}</h3>
                  </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Tesedia</label>
                    <h3>{{$data_baju->stock->jumlah}}</h3>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah Yang Dibeli</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1"  name="total_penjualan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Size</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="size_id" required>
                      <option value="" selected>pilih...</option>
                      @foreach ($data_size as $item)
                    <option value="{{$item["id"]}}">{{$item["size_baju"]}}</option>
                      @endforeach
                    </select>
                  </div>
                  @if ($data_baju->stock->jumlah == 0)
                  <button type="submit" class="btn btn-primary" disabled>Beli</button>
                  @else
                  <button type="submit" class="btn btn-primary">Beli</button>
                  @endif
                  
                </form>
                 </div>
          </div>
          
         <div class="clearfix"> </div>
    </div>



    <script>
        $('#Tanggal').datetimepicker({
            timepicker: false,
            datepicker: true,
            format: 'Y-m-d',
            value: "Y-m-d" 
        })
        </script>
   
@endsection