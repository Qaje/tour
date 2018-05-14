	@extends('main')

	@section('title', '| Turistic Sites')

	@section('content')

	<h1>Turistic Sites</h1>
	
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Turistic Sites in Bolivia</h3>

					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody><tr>
							<th>ID</th>
							<th>Nombre del Lugar</th>
							<th>Resumen</th>
							<th>Descripcion</th>
							<th>Como Llegar</th>
							<th>Recomendaciones</th>
							<th>Provincia</th>
							<th>Links</th>
						</tr>
						
						<tr>
							<td>183</td>
							<td>John Doe</td>
							<td>11-7-2014</td>
							<td><span class="label label-success">Approved</span></td>
							<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							<td>183</td>
							<td>John Doe</td>
						</tr>
						
					</tbody></table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>

	@endsection
