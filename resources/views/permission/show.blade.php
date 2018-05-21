@extends('main')

@section('title', '| Permiso')

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
    Permiso
    <small>Ver permiso</small>
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
           <form action="/permission/{{$permission->id}}" method="PUT" enctype="multipart/form-data" >
            
             <div class="col-md-6 col-md-offset-3">
                 <!-- Form Element sizes -->
                 <div class="box box-success">
                     <div class="box-header with-border">
                         <h3 class="box-title">Mostrar Provincia</h3>
                     </div>
                     <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-book"></i></span>
                             <input type="text" class="form-control" name='name' placeholder="Name" value="{{$permission->name}}">
                         </div>
                         <br>
                         <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-clone"></i></span>
                             <input type="text" class="form-control" name='description' placeholder="Actividades para realizar" value="{{$permission->description}}">
                         </div>
                         <br>
                         <div class="box-footer">
                                <a href="{{url('permission')}}" method="get" class="btn btn-danger " role="button" aria-pressed="true"><i class="fa fa-arrow-left"></i>   Volver</a>
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
