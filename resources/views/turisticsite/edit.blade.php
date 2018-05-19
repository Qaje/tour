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

		{{Form::open(array('method'=>'POST', 'route' => array('turisticsite.store'),'files' =>true )) }}

	{{--
			   <form action="turisticsite" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Editar  Sitio Turistico</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name_title' placeholder="Nombre del Lugar" value="{{$turisticsite->name_title}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='summary' placeholder="Resumen" value="{{$turisticsite->summary}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     					<input type="text" class="form-control" name='description' placeholder="Breve descripcion del lugar" value="{{$turisticsite->description}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='how_to_come' placeholder="Medios para llegar" value="{{$turisticsite->how_to_come}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='recomendation' placeholder="Recomendation para estar en el lugar" value="{{$turisticsite->recomendation}}">
		     				</div>
							<br>
							
							<div class="form-group">
								<label>Provincia</label>
								<select class="form-control" name="province_id" value="{{$province->id }}">
									@foreach($provinces as $province)	
								<option value="{{ $province->id }}">{{ $province->id }}   .{{$province->name }}</option>
									@endforeach
								</select>
							</div> 
							
							<div class="input-group">
								<td>
								<label>Seleccione una imagen </label>
								</td>
								<div>
									
		     					<input type="file"  name='turisticsite_photo' class="form-control" value="{{$turisticsite->turisticsite_photo }}">
		     					<input type="text" class="form-control" name='turisticsite_photo' placeholder="Logitud" value="{{$turisticsite->turisticsite_photo}}">
								</div>
		     					<td>
                           		<img src="/uploads/turisticsite_photos/{{ $turisticsite->turisticsite_photo }}" alt="" border="0" height="100" width="130" style="max-width: 130px;">
                        		</td>

		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='long' id="lng" placeholder="Logitud" value="{{$turisticsite->long}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='lat'  id="lat" placeholder="Latitud" value="{{$turisticsite->lat}}">
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

		     				<div class="box-footer">
		     					<a href="{{url('turisticsite')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
                    			<button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Guardar</button>
		     				</div>


		     			</div>
		     			<!-- /.box-body -->
		     		</div>

		     		<!-- /.box -->
		     	</div>
		     	<!-- Input addon -->

		     </form>
		     
         {{Form::close()}}
		 </section>
		 <!-- /.content -->
		 <script>
		 	function initMap() {
		 		var bolivia = {
		 			lat: {{$turisticsite->lat}}, 
		 			lng: {{$turisticsite->long}}};
		 			var map = new google.maps.Map(document.getElementById('map'), {
		 				zoom: 20,
		 				center: bolivia
		 			});
		 			var marker = new google.maps.Marker({
		 				position: {
		 					lat: {{$turisticsite->lat}}, 
		 					lng: {{$turisticsite->long}}
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

		 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzTmmwZQMrY6ZWG0Z_MppOXN9A4Cp92z4&callback=initMap&libraries=places" type="text/javascript">
		 	</script>

		 	@endsection
