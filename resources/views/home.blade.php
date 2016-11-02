<!DOCTYPE HTML>
<html>
	<head>
	
       
	    <link href="{{asset('slider/css/style.css')}}" rel="stylesheet" type="text/css"  media="all" />
		<link href="{{asset('slider/css/camera.css')}}" rel="stylesheet" type="text/css" media="all" />
		<script src="{{asset('slider/js/jquery.js')}}"></script>
		<script src="{{asset('slider/js/superfish.js')}}"></script>
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
	</head>
	<body>
			<!---start-image-slider---->
			 <div class="slider">
			 	<div class="wrap">
			<div class="fluid_container">
		        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
		            <div data-thumb="{{asset('Banner/Sports/1.jpg')}}"  style="width:100%" data-src="{{asset('Banner/Sports/1.jpg')}}">
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
		            <div data-thumb="{{asset('Banner/Sports/6.jpg')}}" style="width:100%" data-src="{{asset('Banner/Sports/6.jpg')}}">
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
			
			
			    <!-- #camera_wrap_1 -->
			    <script type='text/javascript' src='slider/js/jquery.min.js'></script>
			    <script type='text/javascript' src='slider/js/jquery.easing.1.3.js'></script> 
			    <script type='text/javascript' src='slider/js/camera.min.js'></script> 
	</body>
	
</html>


