	@extends('main_m')

	@section('title', '| Evento')

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
		Crear Evento
		<small>Estos son algunos eventos que se encuentran en nuestra Bolivia</small>
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

		{{Form::open(array('method'=>'POST', 'route' => array('event.store'),'files' =>true )) }}

	{{--
			   <form action="event" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Registrar un Nuevo Evento</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>May 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 547px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-04-29"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-04-30"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-01"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-02"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-03"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-04"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-04-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-04-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-05"><span class="fc-day-number">5</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-06"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-07"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-08"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-09"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-10"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-11"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-12"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-12"><span class="fc-day-number">12</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-13"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-14"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-15"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-16"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-17"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-18"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-19"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-19"><span class="fc-day-number">19</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-20"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-21"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2018-05-22"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-05-23"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-05-24"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-05-25"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-05-26"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-tue fc-today " data-date="2018-05-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-05-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-05-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-05-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-05-26"><span class="fc-day-number">26</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 91px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-05-27"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-05-28"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-05-29"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-05-30"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-05-31"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-06-01"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-06-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-05-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-05-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-05-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-05-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-05-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-06-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-06-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 92px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-06-03"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-06-04"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-06-05"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-06-06"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-06-07"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-06-08"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-06-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2018-06-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2018-06-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2018-06-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2018-06-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-06-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-06-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-06-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name_title' placeholder="Nombre del Lugar">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='summary' placeholder="Resumen">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     					<input type="text" class="form-control" name='description' placeholder="Breve descripcion del lugar">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='how_to_come' placeholder="Medios para llegar">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='recomendation' placeholder="Recomendation para estar en el lugar">
		     				</div>
							<br>
							
							<div class="form-group">
								<label>Provincia</label>
								<select class="form-control" name="province_id">
									@foreach($provinces as $province)	
								<option value="{{ $province->id }}">{{ $province->id }}   .{{$province->name }}</option>
									@endforeach
								</select>
							</div> 
							
							<div class="input-group">
								<label>Seleccione una imagen </label>
		     					<input type="file"  name='event_photo' class="form-control">

		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='long' id="lng" placeholder="Logitud">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='lat'  id="lat" placeholder="Latitud">
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
		     					<a href="{{url('event')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
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

		 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzTmmwZQMrY6ZWG0Z_MppOXN9A4Cp92z4&callback=initMap&libraries=places" type="text/javascript">
		 	</script>

		 	@endsection
