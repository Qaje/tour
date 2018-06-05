	@extends('main_m')

	@section('title', '| Compañia Turistica')

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
		Compañia Turistica
		<small>Estos son algunas Empresas Turisticas que se encuentran en nuestra Bolivia</small>
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

		{{Form::open(array('method'=>'POST', 'route' => array('turisticcompany.store'),'files' =>true )) }}

	{{--
			   <form action="turisticsite" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Registro de Nueva Empresa Turistica</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name_reasonsocial' placeholder="Nombre/Razon Social">
		     				</div>
		     				<br>
		     				<div class="form-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i>Estado de Publicacion</span>
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
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     					<input type="text" class="form-control" name='history' placeholder="Breve Historia como Empresa">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='mision' placeholder="Mision">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='vision' placeholder="Vision">
		     				</div>
								<br>
								<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='valores' placeholder="Valores">
		     				</div>
		     				<br>
								<div class="form-group">
									<label>Tipo de Compañia Turistica</label>
									<select class="form-control" name="turistic_type_id">
										@foreach($turistictypes as $turistictype)	
									<option value="{{ $turistictype->id }}">{{ $turistictype->id }}   .{{$turistictype->name }}</option>
										@endforeach
									</select>
								</div> 
								
								<div class="input-group">
								<label>Seleccione una imagen para el LOGO</label>
		     					<input type="file"  name='logo' class="form-control">
		     				</div>
		     				<br>
								<div class="input-group">
								<label>Seleccione una imagen para el imagen A</label>
		     					<input type="file"  name='image_a' class="form-control">
		     				</div>
		     				<br>
		     				<div class="input-group">
								<label>Seleccione una imagen para el imagen B</label>
		     					<input type="file"  name='image_b' class="form-control">
		     				</div>
		     				<br>
								<div class="input-group">
								<label>Seleccione una imagen para el imagen C</label>
		     					<input type="file"  name='image_c' class="form-control">
		     				</div>
		     				<br>
								
								<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-eye"></i></span>
		     					<input type="text" class="form-control" name='observation' placeholder="Observacion como Empresa">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
		     					<input type="text" class="form-control" name='service' placeholder="Servicios">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-send"></i></span>
		     					<input type="text" class="form-control" name='siteweb' placeholder="Sitio Web">
		     				</div>
								<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-inbox"></i></span>
		     					<input type="text" class="form-control" name='email' id="lng" placeholder="Correo o Mail">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
		     					<input type="text" class="form-control" name='whattsapp'  id="lat" placeholder="Numero de Contacto">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
		     					<input type="text" class="form-control" name='facebook'  id="lat" placeholder="Cuenta de Facebook">
		     				</div>
		     				<br>

		     				<div class="box-footer">
		     					<a href="{{url('turisticcompany')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
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
