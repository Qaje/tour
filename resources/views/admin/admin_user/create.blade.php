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
		     					<input type="text" class="form-control" name='name' placeholder=" Ingrese Nombres " id="name" required>
		     					   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
		     				</div>
		     				<br>
		     		<!--		
                  <div class="form-group">
                      {!! Form::label('name', 'Nombre') !!}
                      {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>

	<div class="form-group">
    	<label for="name" class="col-md-4 control-label">Nombre</label>
 
        <div class="col-md-6">
        	<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>
-->
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='last_name' placeholder=" Ingrese Apellido(s)" id="last_name" required>
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='email' placeholder="Ingrese Email / Correo Electronico" required>
		     				</div>
		     				<br>

		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='job_title' placeholder=" Direccion de trabajo y Ocupacion" id="job_title" required>
		     				</div>
		     				<br>
<!--
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="name" class="form-control" name='name' placeholder="Clave o name">
		     				</div>
		     				<br>
-->							

		     				<div class="row">
		     					<div class="col-sm-6">
		     					<!--<span class="input-group-addon"><i class="fa fa-book"></i></span>-->
		     					<input type="text" class="form-control" name='ident_card' placeholder=" Ingrese Numero de Identificación " required>
		     					</div>
		     				<!--</div>
		     				<br>
								
							<div class="input-group">-->
								<div class="col-sm-6">
			     					<select class="form-control" name="born_in" required>
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
		     					</div>
		     					<!--<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='born_in' placeholder=" Extendido en Ciudad ">-->
		     				</div>
		     				<br>

							<div class="input-group date" date-provide="datepicker"> 
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input type="text"  class="date form-control" name="date_born" autocomplete="off" required >				
		     				</div>
		     				<br>


							<div class="form-group">
								<label>Roles</label>
								<select class="form-control" name="role_id" required>
									@foreach($roles as $role)	
										<option value="{{ $role->id }}">{{$role->name }}</option>
									@endforeach
								</select>
							</div> 
							
							<div class="input-group">
								<label>Seleccione una imagen </label>
		     					<input type="file"  name='avatar' class="form-control" required>

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
