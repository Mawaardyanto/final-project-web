@extends('layouts.app')

@section('title')
    shop
@endsection

@section('content')
    <div class="product-block">
    	<div class="pro-head">
    		<h2>Products</h2>
		</div>
		@foreach ($data_baju as $item)
		<div class="col-md-3 product-grid">
    		<div class="product-items">
	    		    <div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="images/{{$item["gambar"]}}"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> </a></p></div>     
							<img class="img-responsive" src="/images/{{$item["gambar"]}}" alt="">
					</div>
	    		<div class="produ-cost">
				<h4>{{$item["nama_baju"]}} <a class="btn btn-warning hvr-pulse" href="/beli/{{$item['id']}}" role="button" style="float: right"><i class="far fa-shopping-cart"></i>  Beli</a></h4>
	    			<h5>Rp {{$item["harga_jual"]}}</h5>
	    		</div>
    		</div>
    	</div>
		@endforeach
    
    	
      <div class="clearfix"> </div>
    </div>

<!--inner block end here-->
@endsection