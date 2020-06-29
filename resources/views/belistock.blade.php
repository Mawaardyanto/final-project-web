@extends('layouts.app')

@section('title')
    Beli Stok Baju
@endsection

@section('content')

    <!--mainpage chit-chating-->
    <div class="chit-chat-layer1">
        <div class="col-md-8 chit-chat-layer1-left">
                   <div class="work-progres">
                                <div class="chit-chat-heading">
                                     Edit Supplier
                                </div>
                                <form action="/tambahpembelian/{{$pembelian}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="pembelian" value="1">
                                      <button type="submit" class="btn btn-sm" style="float: right"><i class="far fa-plus-square fa-2x text-primary"></i></button>
                                    </form>
                <form action="/belistockbaju/{{$pembelian}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Supplier</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="supplier_id" required>
                      <option value="" selected>pilih...</option>
                      @foreach ($data_supplier as $item)
                    <option value="{{$item["id"]}}">{{$item["nama_supplier"]}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Tanggal Berlabuh">Tanggal Beli</label>
                        <input type="text" class="form-control" id="Tanggal" name="tgl_beli" required>
                  </div>
                
                @for ($i = 0; $i < $pembelian; $i++)
                    <div class="form-row">
                       <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Nama Baju</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="bajuid{{$i}}" required>
                      <option value="" selected>pilih...</option>
                      @foreach ($data_baju as $item)
                    <option value="{{$item["id"]}}">{{$item["nama_baju"]}}</option>
                      @endforeach
                    </select>
                </div>
                      <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1">Jumlah Baju</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="jumlahbaju{{$i}}" required>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="exampleFormControlInput1">Harga Baju</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="hargabaju{{$i}}" required>
                      </div>
                      @if ($pembelian < 2)
                      <small>tekan tomboh tambah untuk menambahkan kolom</small>
                      @endif
                    </div>
                @endfor
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Total Harga</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1"  name="total_harga" required>
                  </div>
               
                  <button type="submit" class="btn btn-primary">Simpan</button>
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