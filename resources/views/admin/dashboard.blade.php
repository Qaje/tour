  
@extends('main_m')

@section('title', '| Bienvenido Administrador')

@section('content')
	
	

<div style="overflow-x:auto;">
<div class="row">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"> <h2>&nbsp;&nbsp;&nbsp;Información de usuarios del sistema</h2></div>
      <div class="panel-body">
          <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{Auth::user()->id}}</h3>

              <p>Administradores</p>
            </div>
            <div class="icon">
              <i class="ion ion-key"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> N </h3>

              <p>Visitantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-plane"></i>
            </div>
            <a href="asignaCursoEstu" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> N </h3>

              <p>Usuarios </p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline  "></i>
            </div>
            <a href="listaCursos" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>     

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> N </h3>

              <p>Encargados Empresa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-person"></i>
            </div>
            <a href="asignaHorariosProf" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>

	@component('components-who')
	@endcomponent
@endsection