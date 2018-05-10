@extends('main')

@section('title', '| Turistic Sites')

@section('content')

	<!-- Content Header (Page header) -->
				    <section class="content-header">
				      <h1>
				        Turistic Sites
				        <small>Estos son algunos sitios que se encuentran en nuestra Bolivia</small>
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
						<div class="col-md-6 col-md-offset-3">
				          <!-- Form Element sizes -->
					          <div class="box box-success">
					            <div class="box-header with-border">
					              <h3 class="box-title">Register a New Turistic Site</h3>
					            </div>
					            <div class="box-body">
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-book"></i></span>
						                <input type="text" class="form-control" name='name_title' placeholder="Nombre del Sitio">
						            </div>
						            <br>
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-clone"></i></span>
						                <input type="text" class="form-control" name='summary' placeholder="Resunen">
						            </div>
						            <br>
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						                <input type="text" class="form-control" name='description' placeholder="Nombre del Sitio">
						            </div>
						            <br>
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-bus"></i></span>
						                <input type="text" class="form-control" name='how_to_come' placeholder="Como Llego">
						            </div>
						            <br>
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-random"></i></span>
						                <input type="text" class="form-control" name='province' placeholder="Provincia">
						            </div>
						            <br>
						            <div class="input-group">
						                <span class="input-group-addon"><i class="fa fa-bus"></i></span>
						                <input type="text" class="form-control" name='how_to_come' placeholder="Como Llego">
						            </div>
					              <input class="form-control input-lg" type="text" placeholder=".input-lg">
					              <br>
					              <input class="form-control" type="text" placeholder="Default input">
					              <br>
					              <input class="form-control input-sm" type="text" placeholder=".input-sm">
					            </div>
					            <!-- /.box-body -->
					          </div>
					          <!-- /.box -->
					            <div class="input-group">
					                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					                <input type="email" class="form-control" placeholder="Email">
					            </div>
					            <br>
					          <div class="box box-danger">
					            <div class="box-header with-border">
					              <h3 class="box-title">Register Turistic Site</h3>
					            </div>
					            <div class="box-body">
					              <div class="row">
					                <div class="col-xs-3">
					                  <input type="text" class="form-control" placeholder=".col-xs-3">
					                </div>
					                <div class="col-xs-4">
					                  <input type="text" class="form-control" placeholder=".col-xs-4">
					                </div>
					                <div class="col-xs-5">
					                  <input type="text" class="form-control" placeholder=".col-xs-5">
					                </div>
					              </div>
					            </div>
					            <!-- /.box-body -->
					          </div>
				          <!-- /.box -->
						</div>
				          <!-- Input addon -->
				          
				    </section>
				    <!-- /.content -->

@endsection
