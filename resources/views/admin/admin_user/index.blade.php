
@extends('main_m')

@section('title', '| Usuarios')

@section('content')
<h1>Usuarios</h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td>
                    
                <tr class="form-control">
                <h3 class="box-title">Usuarios Patrimonio</h3>
                </tr>
                <tr class="form-control pull-right">
                    <td>
                        <div class="input-group input-group-sm" style="width: 50px;">
                            <td>
                                <a href="{{url('user/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Usuario</a>
                            </td>
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
                        <th>ID</th>
                        <th>Nombre Completo</th>
                        <th>Email/Correo Electronico</th>
                        <th>Rol asignado</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($users as $user)             
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @foreach($user->roles as $role)
                        <td>{{ $role->id}} {{ $role->name}}  </td>
                        @endforeach
                        <td>
                 
                        {{Form::open(array('method'=>'DELETE', 'route' => array('user.destroy', $user->id)))}}
                            <a href="/user/{{$user->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/user/{{$user->id}}" method="get" class="btn btn-success " role="button" >
                                    <i class="fa fa-eye"></i> Ver
                                </a>
                        {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}
                        {{Form::close()}}
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        <div class="mx-auto" style="width: 200px;">
                {!! $users->links() !!}
            </div>
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
