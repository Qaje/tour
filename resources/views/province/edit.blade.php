@extends('main_m')

@section('title', '| Provincias')

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
    Provincias
    <small>Estos son las provincias que se encuentran en nuestro territorio nacional</small>
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
            {!! Form::model($province, ['method' => 'PATCH','route' => ['province.update', $province->id]]) !!}
             <div class="col-md-6 col-md-offset-3">
                 <!-- Form Element sizes -->
                 <div class="box box-success">
                     <div class="box-header with-border">
                         <h3 class="box-title">Editar Provincia</h3>
                     </div>
                     <div class="box-body">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        {{-- {{ csrf_field() }} --}}
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-book"></i></span>
                             <input type="text" class="form-control" name='name' placeholder="Name" value="{{$province->name}}">
                         </div>
                         <br>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                             <input type="text" class="form-control" name='geolocalization' placeholder="Actividades para realizar" value="{{$province->geolocalization}}">
                         </div>
                         
                         <br>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                             <input type="text" class="form-control" name='long' id="lng" placeholder="Longitud" value="{{$province->long}}">
                         </div>
                         <br>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-bus"></i></span>
                         <input type="text" class="form-control" name='lat' id='lat' placeholder="Latitud" value="{{$province->lat}}">
                         </div>
                         <br>
                         <div>
                                <h4>Ciudad:</h4><p>{{$city->id}} . {{$city->name}}</p>
                         </div>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-reply-all"></i></span>

                        <select class="form-control input-group-addon" name="city_id" placeholder="Ciudad">
                            @foreach($cities as $city)	
                            <option value="{{ $city->id }}">{{$city->id}}.{{$city->name }}</option>
                            @endforeach
                        </select>
                        </div>
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
                                <a href="{{url('province')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
                                <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Actualizar</button>
                         </div>
                     </div>
                     <!-- /.box-body -->
                 </div>
                 <!-- /.box -->
             </div>
            <!-- Input addon -->
            {{--</form>--}}
        {{ Form::close() }}
     </section>
     <!-- /.content -->
     <script>
         function initMap() {
             var bolivia = {
                 lat: {{$province->lat}}, 
                 lng: {{$province->long}}};
                 var map = new google.maps.Map(document.getElementById('map'), {
                     zoom: 20,
                     center: bolivia
                 });
                 var marker = new google.maps.Marker({
                     position: {
                         lat: {{$province->lat}}, 
                         lng: {{$province->long}}
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
