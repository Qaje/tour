@extends('main')

@section('title', '| Turistic Sites')

@section('content')

<h1>Provincias</h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Provincias en Bolivia</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>ID</th>
                        <th>Provincia</th>
                        <th>geolocalizacion</th>
                        <th>longitud</th>
                        <th>latitud</th>
                        <th>City</th>
                        
                        <th>Links</th>
                    </tr>
                    @foreach ($provinces as $province)             
                    <tr>
                        <td>{{ $province->id }}</td>
                        <td>{{ $province->name }}</td>
                        <td>{{ $province->geolocalization }}</td>
                        <td>{{ $province->long }}</td>
                        <td>{{ $province->lat }}</td>
                        <td>{{ $province->city_id }}</td>
                        <td>
                                <div id="external-events">
                                        <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Editar</div>
                                        <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                                        <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Mostrar</div>
                                        <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Eliminar</div>        
                                </div>
                                        
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
