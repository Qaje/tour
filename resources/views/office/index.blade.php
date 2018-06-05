@extends('main_m')

@section('title', '| Oficina o Sucursales')

@section('content')

<h1>Oficina o Sucursal</h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td>
                    
                <tr class="form-control">
                <h3 class="box-title">Oficina o Sucursal en Bolivia</h3>
                </tr>
                <tr class="form-control pull-right">
                    <td>
                        <div class="input-group input-group-sm" style="width: 50px;">
                            <td>
                                <a href="{{url('office/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Nueva Oficina o Sucursal</a>
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
                        <th>Denominativo de Sucursal</th>
                        <th>Direccion</th>
                        <th>Descripcion</th>
                        <th>Fotografia de la Oficina</th>
                        <th>Contacto</th>
                        <th>Long</th>
                        <th>Lat</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($offices as $office)        
                    <tr>

                        <td>{{ $office->id }}</td>
                        <td>{{ $office->nominal }}</td>
                        <td>{{ $office->direccion }}</td>
                        <td>{{ $office->description }}</td>
                        <td>{{ $office->office_photo }}</td>
                        <td>
                            <img src="/uploads/turistic_company/turistic_company_office/{{ $office->office_photo }}" alt="" border="0" height="50" width="65" style="max-width: 130px;">
                        </td>
                        <td>{{ $office->contact }}</td>
                        <td>{{ $office->long }}</td>
                        <td>{{ $office->lat }}</td>
                        <td>
                            {{Form::open(array('method'=>'DELETE', 'route' => array('office.destroy', $office->id)))}}
                            <a href="/office/{{$office->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/office/{{$office->id}}" method="get" class="btn btn-success " role="button" >
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
               
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

</div>
{{-- //modal --}}
    
@endsection
