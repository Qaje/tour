@extends('main_m')

@section('title', '| Compañia Turisticas')

@section('content')

<h1>Compañia Turistica</h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td>
                    
                <tr class="form-control">
                <h3 class="box-title">Compañia Turistica en Bolivia</h3>
                </tr>
                <tr class="form-control pull-right">
                    <td>
                        <div class="input-group input-group-sm" style="width: 50px;">
                            <td>
                                <a href="{{url('turisticcompany/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Nueva Compañia Turistica</a>
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
                        <th>#</th>
                        <th>Empresa/Razon Social</th>
                        <th>Historia</th>
                        <th>Mision</th>
                        <th>Vision</th>
                        <th>Valores</th>
                        <th>Logo</th>
                        <th>Tipo de Compañia</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($turisticcompanies as $turisticcompany)        
                    <tr>

                        <td>{{ $turisticcompany->id }}</td>
                        <td>{{ $turisticcompany->name_reasonsocial }}</td>
                        <td>{{ $turisticcompany->history }}</td>
                        <td>{{ $turisticcompany->mision }}</td>
                        <td>{{ $turisticcompany->vision }}</td>
                        <td>{{ $turisticcompany->valores }}</td>
                        <td>
                            <img src="/uploads/turistic_company/turistic_company_logo/{{ $turisticcompany->logo }}" alt="" border="0" height="50" width="65" style="max-width: 130px;">
                        </td>
                        <td>
                            @foreach($turisticcompany->turistictypes as $turistictype)
                            {{ $turistictype->id}} {{ $turistictype->name}} 
                            @endforeach
                        </td>
                        <td>
                            {{Form::open(array('method'=>'DELETE', 'route' => array('turisticcompany.destroy', $turisticcompany->id)))}}
                            <a href="/turisticcompany/{{$turisticcompany->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/turisticcompany/{{$turisticcompany->id}}" method="get" class="btn btn-success " role="button" >
                                    <i class="fa fa-eye"></i> Ver
                                </a>
                                
                                <a href="/office" method="get" class="class="btn bg-navy btn-flat margin" role="button" >
                                    <button type="button" class="btn bg-navy btn-flat margin" ><i class="fa fa-building"></i> Oficinas</button>
                                </a>

                            {{Form::submit('Delete', array('class'=>'btn btn-danger'))}}
                            {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                        <div class="mx-auto" style="width: 200px;">
               {!! $turisticcompanies->links() !!}
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
