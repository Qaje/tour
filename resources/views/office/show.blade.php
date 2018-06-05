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
		<small>Estos son ompañias turisticas que se encuentran en nuestra Bolivia</small>
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

	{{--
			   <form action="turisticsite" method="POST" enctype="multipart/form-data" >
		--}}
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Ver Compañia Turistica Nro {{$turisticcompany->id}}</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							{{ csrf_field() }}
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name_title' placeholder="Nombre del Lugar" value="{{ $turisticcompany->name_reasonsocial }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='status' placeholder="Resumen" value="{{ $turisticcompany->status }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
		     					<input type="text" class="form-control" name='history' placeholder="Breve descripcion del lugar" value="{{ $turisticcompany->history }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='mision' placeholder="Medios para llegar" value="{{ $turisticcompany->mision }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='vision' placeholder="Recomendation para estar en el lugar" value="{{ $turisticcompany->vision }}">
		     				</div>
								<br>
								<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='valores' placeholder="Recomendation para estar en el lugar" value="{{ $turisticcompany->valores }}">
		     				</div>
								<br>

							<div class="input-group">
								<label>Imagen del Logo </label>
		     					<div>
		     					<td>
                           		<img src="/uploads/turistic_company/turistic_company_logo/{{ $turisticcompany->logo }}" alt="" border="0" height="100" width="130" style="max-width: 130px;">
                        		</td>
		     					</div>
		     				</div>
		     				<br>
							<div class="input-group">
								<label>Imagen A </label>
		     					<div>
		     					<td>
                           		<img src="/uploads/turistic_company/turistic_company_galery/{{ $turisticcompany->image_a }}" alt="" border="0" height="100" width="130" style="max-width: 130px;">
                        		</td>
		     					</div>
		     				</div>
		     				<br>
		     				<div class="input-group">
								<label>Imagen B </label>
		     					<div>
		     					<td>
                           		<img src="/uploads/turistic_company/turistic_company_galery/{{ $turisticcompany->image_b }}" alt="" border="0" height="100" width="130" style="max-width: 130px;">
                        		</td>
		     					</div>
		     				</div>
		     				<br>
							<div class="input-group">
								<label>Imagen C </label>
		     					<div>
		     					<td>
                           		<img src="/uploads/turistic_company/turistic_company_galery/{{ $turisticcompany->image_c }}" alt="" border="0" height="100" width="130" style="max-width: 130px;">
                        		</td>
		     					</div>
		     				</div>
		     				<br>

	
								<div class="input-group">
			     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
			     					<input type="text" class="form-control" name='turistictype' placeholder="" value="{{ $turistictype->id }} - {{ $turistictype->name }} - {{ $turistictype->description }}">
			     				</div>
								<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='observation' placeholder="Logitud" value="{{$turisticcompany->observation }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='service' placeholder="Latitud" value="{{$turisticcompany->service}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='email' placeholder="Logitud" value="{{$turisticcompany->email }}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='whattsapp' placeholder="Latitud" value="{{$turisticcompany->whattsapp}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='facebook' placeholder="Latitud" value="{{$turisticcompany->facebook}}">
		     				</div>
		     				<br>
		     				<div class="box-footer">
		     					<a href="{{url('turisticcompany')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
		     				</div>
		     			</div>
		     			<!-- /.box-body -->
		     		</div>
		     		<!-- /.box -->
		     	</div>
		     	<!-- Input addon -->
		     </form>
		     
		 </section>
		 <!-- /.content -->
		 	@endsection
