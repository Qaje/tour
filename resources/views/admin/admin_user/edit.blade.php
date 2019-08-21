	@extends('main_m')

	@section('title', '| Usuario')

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
		Usuario
		<small>Actualización de Usuario </small>
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
		{!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}
				{{--
		    <form action="/turisticsite/{{$turisticsite->id}}" method="PUT" enctype="multipart/form-data" >
		        <form action="/turisticsite/{{$role->id}}" method="PUT" enctype="multipart/form-data" >
			   	<form action="turisticsite" method="POST" enctype="multipart/form-data" >
					--}}
	
		
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Editar  Usuario - {{$user->id}} {{$user->name}}</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name' placeholder="Nombre Usuario" value="{{$user->name}}">
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='last_name' placeholder=" Ingrese Apellido(s) " value="{{$user->last_name}}">
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='email' placeholder="Ingrese Email / Correo Electronico" value="{{$user->email}}">
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='job_title' placeholder=" Ingrese Ocupación " value="{{$user->job_title}}">
		     				</div>
		     				<br>		     				


		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='ident_card' placeholder=" Ingrese Numero de Identificación " value="{{$user->ident_card}}">
		     				</div>
		     				<br>

							<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='born_in' placeholder=" Extendido en Ciudad " value="{{$user->born_in}}">
								<div class="col-sm-6">
			     					<select class="form-control" value="{{$user->born_in}}" name="born_in" required>
			     						<option class="" value="">Selecione Ciudad</option>
			     						<option class="Beni" value="Beni">Beni</option>
			     						<option class="Chuquisaca" value="Chuquisaca">Chuquisaca</option>
			     						<option class="Cochabamba" value="Cochabamba">Cochabamba</option>
			     						<option class="La Paz" value="La Paz">La Paz</option>
			     						<option class="Oruro" value="Oruro">Oruro</option>
			     						<option class="Pando" value="Pando">Pando</option>
			     						<option class="Potosi" value="Potosi">Potosi</option>
			     						<option class="Santa Cruz" value="Santa Cruz">Santa Cruz</option>
			     						<option class="Tarija" value="Tarija">Tarija</option>
			     					</select>
			     					{!! Form::select('size', array('Beni' => 'Beni', 'Chuquisaca' => 'Chuquisaca'), '{{$user->born_in}}'); !!}
		     					</div>		     					
		     				</div>
		     				<br>

							<div class="input-group date" date-provide="datepicker">
		     					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		     					<input type="text" class="date form-control" name='date_born' placeholder="Fecha de Nacimiento " value="{{$user->date_born}}">
		     				</div>
		     				<br>

							<div class="form-group">
								<label>Roles </label>
							
								<p>{{ $role->id }} {{ $role->name }}</p>
									
								<select class="form-control" name="role_id" value="{{$role->id }}">
									@foreach($roles as $role)	
								<option value="{{ $role->id }}">{{ $role->id }}   .{{$role->name }}</option>
									@endforeach
								</select>
							</div> 
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-photo"></i></span>
		     					<input type="file"  name='avatar' class="form-control" value="avatar">
		     					<input type="text" class="form-control" name='avatar' placeholder="Seleccione una fotografia de Perfil " value="{{$user->avatar}}">
		     				</div>
		     				<br>
		     				

		     				<div class="box-footer">
		     					<a href="{{url('user')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
                    			<button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Guardar</button>
		     				</div>


		     			</div>
		     			<!-- /.box-body -->
		     		</div>

		     		<!-- /.box -->
		     	</div>
		     	<!-- Input addon -->

		     
		     
         {!!Form::close()!!}
</section>
		 <!-- /.content -->
@endsection
