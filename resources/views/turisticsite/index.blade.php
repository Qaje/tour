@extends('main_m')

@section('title', '| Sitios Truristicos')

@section('content')

<h1>Patrimonios </h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td>
                    
                <tr class="form-control">
                <h3 class="box-title">Patrimonios en Bolivia</h3>
                </tr>
                <tr class="form-control pull-right">
                    <td>
                        <div class="input-group input-group-sm" style="width: 50px;">
                            <td>
                                <a href="{{url('turisticsite/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Patrimonio</a>
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
                        <th>Nro</th>
                        <th>Denominacion</th>
                        <th>Tipo Patrimonios</th>
                        <th>Ambito</th>
                        <th>Subambito</th>
                        <th>Descripcion Imagen</th>
                        <th>Fotografia</th>
                        <th>longitud</th>
                        <th>latitud</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($turisticsites as $turisticsite)             
                    <tr>

                        <td>{{ $turisticsite->id }}</td>
                        <td>{{ $turisticsite->name_title }}</td>
                        <td>{{ $turisticsite->summary }}</td>
                        <td>{{ $turisticsite->description }}</td>
                        <td>{{ $turisticsite->how_to_come }}</td>
                        <td>{{ $turisticsite->recomendation }}</td>
                        <td>
                            <img src="/uploads/turisticsite_photos/{{ $turisticsite->turisticsite_photo }}" alt="" border="0" height="50" width="65" style="max-width: 130px;">
                        </td>
                        <td>{{ $turisticsite->long }}</td>
                        <td>{{ $turisticsite->lat }}</td>
                        <td>
                            
                            {{Form::open(array('method'=>'DELETE', 'route' => array('turisticsite.destroy', $turisticsite->id)))}}
                            <a href="/turisticsite/{{$turisticsite->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/turisticsite/{{$turisticsite->id}}" method="get" class="btn btn-success " role="button" >
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
                {!! $turisticsites->links() !!}
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

</div>
{{-- //modal --}}

@endsection
