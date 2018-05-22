@extends('main_m')

@section('title', '| Creacion de Rol ')

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
		Creacion de Role 
		<small>Para la creacion de Rol se tiene que asignar unos permissos</small>
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

		{{Form::open(array('method'=>'POST', 'route' => array('role.store'),'files' =>true )) }}

	{{--
			   <form action="turisticsite" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Registro de nuevo Rol</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name' placeholder="Nombre de Rol">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     					<input type="text" class="form-control" name='description' placeholder="Breve descripcion del lugar">
		     				</div>
		     				<br>
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
		     				<br>
							<div class="form-group">
								<label>Permisos</label>
								<select class="form-control" name="permission_id">
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

		     </form>
		     
         {{Form::close()}}
</section>
		 <!-- /.content -->
		
@endsection
