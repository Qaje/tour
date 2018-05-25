	@extends('main_m')

	@section('title', '| Usuarios')

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
		Usuarios
		<small>Creacion de Usuarios
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

		{{Form::open(array('method'=>'POST', 'route' => array('user.store'),'files' =>true )) }}

	{{--
			   <form action="turisticsite" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Registro de Nuevo Usuario</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name' placeholder="Nombre Completo">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='email' placeholder="Email / Correo Electronico">
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="password" class="form-control" name='password' placeholder="Clave o Password">
		     					{{--
		     						{{ Form::password('password',['class' => 'form-control']) }}
		     						--}}
		     				</div>
		     				<br>
							
							<div class="form-group">
								<label>Roles</label>
								<select class="form-control" name="role_id">
									@foreach($roles as $role)	
								<option value="{{ $role->id }}">{{ $role->id }}   .{{$role->name }}</option>
									@endforeach
								</select>
							</div> 
							
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

		     </form>
		     
         {{Form::close()}}
</section>
		 <!-- /.content -->
		
@endsection
