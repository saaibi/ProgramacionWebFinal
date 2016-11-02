@extends('layouts.app') 
@section('content')
<style>
.navbar-default .navbar-nav>li>a {
    color: #fff;
}
.navbar-default {
    background-color: rgba(197, 43, 40, 0.89);
    border-color: #e7e7e7;
    border-radius: 25px;
}
.w3-section {
    margin-top: 76px!important;
    margin-bottom: 16px!important;
}
a{
    text-decoration: none !important;
}

.sizefooter{
    height: 100px;
    background-color: #000;
    border-radius: 0;
    margin-bottom: -15px;
}
.center{
    text-align: center;
}
.tamanoInput{
    width: 65%;
    margin: 0px auto !important;
    display: block !important;
 }
 .white{
     color: white;
 }
    .mySlides {
        display: none;
        width: 900px;
        height: 500px;
        border-radius: 40px;
        border: 5px solid #C52B28;
    }
</style>

<script>
		jQuery(function(){
			jQuery('#camera_wrap_1').camera({
				height: '500',
				pagination: false,
				thumbnails: false,
				imagePath: '../Banner/Sports/'
			});

		});
	</script>

	<div style="margin-top: 93px;">
		<!---start-image-slider---->
			 <div class="slider">
			 	<div class="wrap">
			<div class="fluid_container">
		        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
		            <div data-thumb="{{asset('Banner/Sports/6.jpg')}}"  style="width:100%" data-src="{{asset('Banner/Sports/6.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		           <div data-thumb="{{asset('Banner/Sports/2.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/2.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                		<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/3.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/3.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                		<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/4.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/4.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                		<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		            <div data-thumb="{{asset('Banner/Sports/5.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/5.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		            <div data-thumb="{{asset('Banner/Sports/1.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/1.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/7.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/7.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/8.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/8.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/9.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/9.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		             <div data-thumb="{{asset('Banner/Sports/10.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/10.jpg')}}">
		                <div class="camera_caption fadeFromBottom">
		                	<h3>Reservas JS</h3>
		                    <p>Reservas de escenarios deportivos</p>
		                    <a href="{{ url('/reservas') }}">Reservas</a>
		                </div>
		            </div>
		        </div>
		        
				</div>
       			<div class="clear"> </div>
			</div>
			</div>
			<!---End-image-slider---->
	
            </div>
				
        <div class="wrap">
	      <div class="section group">
	
					<div class="head" style="margin-top: 53px;">
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
 
		<footer class="footer-bottom" style="margin-top: 71px;">
        <div class="wrap">
            <div class="row white"><br>
   
              <h4>Juan Velásquez - Saaibi Florez</h4>
              <h4>UNAC</h4>

        </div>
        </div>
         </footer>
 

@endsection