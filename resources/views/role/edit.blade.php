	@extends('main_m')

	@section('title', '| Role')

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
		Role
		<small>Edicion de Role </small>
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
		{!! Form::model($role, ['method' => 'PATCH','route' => ['role.update', $role->id]]) !!}
				{{--
		    <form action="/turisticsite/{{$turisticsite->id}}" method="PUT" enctype="multipart/form-data" >
		        <form action="/turisticsite/{{$permission->id}}" method="PUT" enctype="multipart/form-data" >
			   	<form action="turisticsite" method="POST" enctype="multipart/form-data" >
					--}}
	
		
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Editar  Rol - {{$role->id}} {{$role->name}}</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name' placeholder="Nombre Roles" value="{{$role->name}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='description' placeholder="Descripcion" value="{{$role->description}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<label>Permisos </label>
								<p>{{ $role->state }}</p>
		     					<div class="form-group">
                  					<div class="radio">
                    					<label>
                      						<input type="radio" name="status" id="status1" value="true" checked="">
                      						Activar
                    					</label>
                  					</div>
                  					<div class="radio">
                    					<label>
                      						<input type="radio" name="status" id="status2" value="false">
                      						Desactivar
                    					</label>
                  					</div>
                				</div>
		     				</div>
		     				<br>
							<div class="form-group">
								<label>Permisos </label>
								<p>{{ $permission->id }} {{ $permission->name }}</p>
								<select class="form-control" name="permission_id" value="{{$permission->id }}">
									@foreach($permissions as $permission)	
								<option value="{{ $permission->id }}">{{ $permission->id }}   .{{$permission->name }}</option>
									@endforeach
								</select>
							</div> 
		     				<br>

		     				<div class="box-footer">
		     					<a href="{{url('role')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
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
