	@extends('main')

	@section('title', '| Turistic Sites')

	@section('content')

	<!-- Content Header (Page header) -->

	<style type="text/css">
	#map{
		width: 100%;
		height: 400px;

	}
</style>
<section class="content-header">
	<h1>
		Turistic Sites
		<small>Estos son algunos sitios que se encuentran en nuestra Bolivia</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
</section>

<section class="content container-fluid">

		  	 <!--------------------------
		     | Your Page Content Here |
		     -------------------------->
		     <div class="col-md-6 col-md-offset-3">
		     	<!-- Form Element sizes -->
		     	<div class="box box-success">
		     		<div class="box-header with-border">
		     			<h3 class="box-title">Register a New Turistic Site</h3>
		     		</div>
		     		{{Form::open(array('url'=>'turisticsite/store','files'=>true,'method'=>'post'))}}
		     		<div class="box-body">
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     				<input type="text" class="form-control" name='name_title' placeholder="Nombre del Sitio">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     				<input type="text" class="form-control" name='summary' placeholder="Resunen">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     				<input type="text" class="form-control" name='description' placeholder="Descripción">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     				<input type="text" class="form-control" name='how_to_come' placeholder="Como Llego">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     				<input type="text" class="form-control" name='resomendation' placeholder="Recomendaciones">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     				<input type="text" class="form-control" name='Province' placeholder="Provincia">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     				<input type="text" class="form-control" name='lat'  id="lat" placeholder="">
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     				<input type="text" class="form-control" name='long' id="lng" placeholder="">
		     			</div>
		     			<br>
		     			<h3 class="box-title">Localizacion</h3>
		     			<div class="input-group">
		     				<span class="input-group-addon"><i class="fa fa-map"></i></span>
		     				<input type="text" class="form-control"  id="searchmap">
		     			</div>
		     			<br>
		     			<div class="input-group" id="map">

		     			</div>
		     			<br>
		     			<div class="input-group">
		     				<input type="file" class="form-control" name='photografic' id="photografic">
		     				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		     				<input type="submit" class="pull-right btn btn-primary">
		     				<div class="input-group">
		     					<label type="text" class="form-control">Update File</label>
		     					<div class="input-group-btn">
		     					</div>
		     				</div>
		     			</div>
		     			<br>
		     			<div class="input-group">
		     				
		     			<button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
		     			</div>

		     			
		     		</div>
		     		<!-- /.box-body -->
		     		{{Form::close()}}
		     	</div>
		     	
		     	<!-- /.box -->
		     </div>
		     <!-- Input addon -->

		 </section>
		 <!-- /.content -->
		 <script>
		 	function initMap() {
		 		var bolivia = {
		 			lat: -16.2901540, 
		 			lng: -63.5886530};
		 			var map = new google.maps.Map(document.getElementById('map'), {
		 				zoom: 15,
		 				center: bolivia
		 			});
		 			var marker = new google.maps.Marker({
		 				position: {
		 					lat: -16.2901540, 
		 					lng: -63.5886530
		 				},
		 				map: map,
		 				draggable: true
		 			});

		 			var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

		 			google.maps.event.addListener(searchBox,'places_changed', function(){
		 				var places = searchBox.getPlaces();
		 				var bounds = new  google.maps.LatLngBounds();
		 				var i, place;

		 				for (i = 0; place= places[i] ; i++)
		 				{	
		 					bounds.extend(place.geometry.location);
		 					marker.setPosition(place.geometry.location);
		 				}

		 				map.fitBounds(bounds);
		 				map.setZoom(15);

		 			});

		 			google.maps.event.addListener(marker,'position_changed',function(){
		 				var lat = marker.getPosition().lat();
		 				var lng = marker.getPosition().lng();

		 				$('#lat').val(lat);
		 				$('#lng').val(lng);
		 			});
		 		}
		 	</script>



		 	@endsection
