@extends('main_m')

@section('title', '| Tipo de Compañias Turisticas')

@section('content')

<h1>Tipo de Compañias Turisticas</h1>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <td> 
                <tr class="form-control">
                <h3 class="box-title">Tipo de Compañias Turisticas en Bolivia</h3>
                </tr>
                <tr class="form-control pull-right">
                    <td>
                        <div class="input-group input-group-sm" style="width: 50px;">
                            <td>
                                <a href="{{url('turistictypecompany/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Tipo de Compañia Turistica</a>
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
                        <th>Denominativo</th>
                        <th>Descripcion</th>
                        <th>Categoria de Servicio</th>
                        <th>Pagina</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($turistictypecompanies as $turistictypecompany)
                    <tr>

                        <td>{{ $turistictypecompany->id }}</td>
                        <td>{{ $turistictypecompany->name }}</td>
                        <td>{{ $turistictypecompany->description }}</td>
                        <td>{{ $turistictypecompany->service_type }}</td>
                        <td>{{ $turistictypecompany->slug }}</td>
                        <td>
                            
                            {{Form::open(array('method'=>'DELETE', 'route' => array('turistictypecompany.destroy', $turistictypecompany->id)))}}
                            <a href="/turistictypecompany/{{$turistictypecompany->id}}/edit" method="get" class="btn btn-warning " role="button" >
                                    <i class="fa fa-edit"></i> Editar
                                </a>                            
                                <a href="/turistictypecompany/{{$turistictypecompany->id}}" method="get" class="btn btn-success " role="button" >
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
                {!! $turistictypecompany->links() !!}
            </div>
                --}}   

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

</div>

@endsection
