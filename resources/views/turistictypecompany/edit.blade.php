	@extends('main_m')

	@section('title', '| Tipo de Compañia Turistica')

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
		Tipo de Compañia Turistica
		<small>Estos son algunos tipos de compañias turisticas que se encuentran en nuestra Bolivia</small>
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
		{!! Form::model($turistictypecompany, ['method' => 'PATCH','route' => ['turistictypecompany.update', $turistictypecompany->id]]) !!}
				{{--
		    <form action="/turisticsite/{{$turistictypecompany->id}}" method="PUT" enctype="multipart/form-data" >
		        <form action="/turisticsite/{{$province->id}}" method="PUT" enctype="multipart/form-data" >
			   	<form action="turisticsite" method="POST" enctype="multipart/form-data" >
					--}}
	
		
		     	<div class="col-md-6 col-md-offset-3">
		     		<!-- Form Element sizes -->
		     		<div class="box box-success">
		     			<div class="box-header with-border">
		     				<h3 class="box-title">Editar  Tipo de Compañia Turistica - {{$turistictypecompany->id}} {{$turistictypecompany->name}}</h3>
		     			</div>
		     			<div class="box-body">
							{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
		     				     
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
		     				
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-book"></i></span>
		     					<input type="text" class="form-control" name='name' placeholder="Nombre del Lugar" value="{{$turistictypecompany->name}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-clone"></i></span>
		     					<input type="text" class="form-control" name='description' placeholder="Resumen" value="{{$turistictypecompany->description}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-bus"></i></span>
		     					<input type="text" class="form-control" name='service_type' placeholder="Medios para llegar" value="{{$turistictypecompany->service_type}}">
		     				</div>
		     				<br>
		     				<div class="input-group">
		     					<span class="input-group-addon"><i class="fa fa-random"></i></span>
		     					<input type="text" class="form-control" name='slug' placeholder="Recomendation para estar en el lugar" value="{{$turistictypecompany->slug}}">
		     				</div>
							<br>
	
							<div class="form-group">
								<label>Categoria </label>
								<p>{{ $category->id }} {{ $category->name }}</p>
								<select class="form-control" name="category_id" value="{{$category->id }}">
									@foreach($categories as $category)	
								<option value="{{ $category->id }}">{{ $category->id }}   .{{$category->name }}</option>
									@endforeach
								</select>
							</div> 
		     				<br>

		     				<div class="box-footer">
		     					<a href="{{url('turistictypecompany')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
                    			<button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Guardar</button>
		     				</div>


		     			</div>
		     			<!-- /.box-body -->
		     		</div>

		     		<!-- /.box -->
		     	</div>
		     	<!-- Input addon -->

		     </form>	
		     
         {!!Form::close()!!}
		 </section>
		 <!-- /.content -->
		 	@endsection
