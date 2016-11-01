@extends('layouts.app') 

@section('content')


<style>
    .mySlides {
        display: none;
        width: 900px;
        height: 500px;
        border-radius: 40px;
        border: 5px solid #C52B28;
    }
</style>
            <div class="w3-content w3-section borde">
                <img class="mySlides" src="{{asset('Banner/Sports/1.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('Banner/Sports/2.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('Banner/Sports/3.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('Banner/Sports/4.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('Banner/Sports/5.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('Banner/Sports/6.jpg')}}" style="width:100%">
            </div>
				
<div class="wrap">
	      <div class="section group">
	
					<div class="head">
		   		      <h2>Sports</h2>
		            </div>
			<div class="content-top">
				<div class="col_1_of_3 span_1_of_c2">
					<div class="view second-effect">
						<img src="{{asset('Banner/n1.png')}}"  style="width: 139px;" alt=""/>
				        <div class="mask">
							<a href="{{ url('/futbolCincos') }}" class="info">Read More</a>
						</div>
					</div>
					<div class="clear"></div>	
				</div>
				<div class="col_1_of_3 span_1_of_c2">
					<div class="view second-effect">
						<img src="{{asset('Banner/n2.png')}}"  style="width: 139px;" alt=""/>
				        <div class="mask">
							<a href="{{ url('/futbolDoces') }}" class="info">Read More</a>
						</div>
					 </div>
					  <div class="clear"></div>	
				</div>
				<div class="col_1_of_3 span_1_of_c2">
					<div class="view second-effect">
						<img src="{{asset('Banner/n3.png')}}"  style="width: 139px;" alt=""/>
				        <div class="mask">
							<a href="{{ url('/baloncestos') }}" class="info">Read More</a>
						</div>
					 </div>
					  <div class="clear"></div>	
				</div>
					<div class="col_1_of_3 span_1_of_c2">
					<div class="view second-effect">
						<img src="{{asset('Banner/n4.png')}}"  style="width: 139px;" alt=""/>
				        <div class="mask">
							<a href="{{ url('/voleibols') }}" class="info">Read More</a>
						</div>
					 </div>
					  <div class="clear"></div>	
				</div>
					<div class="col_1_of_3 span_1_of_c2">
					<div class="view second-effect">
						<img src="{{asset('Banner/n5.png')}}"  style="width: 139px;" alt=""/>
				        <div class="mask">
							<a href="{{ url('/bicicrosses') }}" class="info">Read More</a>
						</div>
					 </div>
					  <div class="clear"></div>	
				</div>
			</div>	
		</div>
			<div class="clear"></div>	
		</div>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 3 seconds
    }
</script>

@endsection
