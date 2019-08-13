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
		<small>Actulizacion de Usuario </small>
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

<!--
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="password" class="form-control" name='password' placeholder="Clave o Password" value="{{$user->password}}">
		     				</div>
		     				<br>
-->
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='ident_card' placeholder=" Ingrese Numero de Identificación " value="{{$user->ident_card}}">
		     				</div>
		     				<br>

							<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='born_in' placeholder=" Extendido en Ciudad " value="{{$user->born_in}}">
		     				</div>
		     				<br>

							<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='date_born' placeholder="Fecha de Nacimiento " value="{{$user->date_born}}">
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
								<label>Seleccione una imagen </label>
		     					<input type="file"  name='avatar' class="form-control">

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
