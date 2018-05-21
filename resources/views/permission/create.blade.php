@extends('main_m')

@section('title', '| Permisos')

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
        Permisos
        <small>Estos son los permisos que se otorgan a los usuarios en Situr BOL</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content container-fluid">
    <form action="/permission" method="POST" enctype="multipart/form-data" >

        <div class="col-md-6 col-md-offset-3">
                 <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header with-border">
                         <h3 class="box-title">Registro de Nuevo Permiso</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-book"></i></span>
                         <input type="text" class="form-control" name='name' placeholder="Nombre">
                    </div>
                    <br>
                    <div class="input-group">
                         <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                         <input type="text" class="form-control" name='description' placeholder="Detalle del permiso">
                    </div>
                </div>
                <br>
                <div class="box-footer">
                    <a href="{{url('permission')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Guardar</button>
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
