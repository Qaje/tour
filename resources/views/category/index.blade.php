@extends('main_m')

@section('title', '| Categorias')

@section('content')

<h1>Categorias</h1>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td>
                    <tr class="form-control">
                        <td>
                            <h3 class="box-title">Categorias de Servicios</h3>
                        </td>
                    </tr>
                    <br>
                    <tr class="form-control pull-right">
                        <td>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal"><i class="fa fa-plus"></i>  Nueva Categoria</button>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </td>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">

                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="box-tools">
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descricción</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($categories as $category)             
                    <tr>

                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            
                        {{Form::open(array('method'=>'DELETE', 'route' => array('category.destroy', $category->id)))}}
                            <a href="/category/{{$category->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/category/{{$category->id}}" method="get" class="btn btn-success " role="button" >
                                    <i class="fa fa-eye"></i> Ver
                                </a>
                            {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}
                        {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        {{--
                        <div class="mx-auto" style="width: 200px;">
                            {!! $categories->links() !!}
                        </div>
                            --}}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

</div>
{{-- //modal --}}
<div class="modal fade in" id="modal-default" style="display: none; padding-right: 15px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Default Modal</h4>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
      </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
@endsection
<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nueva Categoria</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" placeholder="Nombre o Nomina" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" id="description" placeholder="Descripcion Breve" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>