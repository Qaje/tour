@extends('main_m')

@section('title', '| Patrimonios Bolivia')

@section('content')

<h1>Patrimonios </h1>

<style type="text/css">
#map{
    width: 100%;
    height: 400px;

}
</style>

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
                                <!-- <a href="{{url('patrimonialsite/create')}}" method="get" class="btn btn-primary " role="button" aria-pressed="true"><i class="fa fa-plus"></i> Agregar Patrimonio</a>
                                 -->
                                  
                                 <!-- <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nuevo Patrimonio</a> -->
                                 <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#CreatePatrimonial"><i class="fa fa-plus"></i>
                              Agregar Patrimonio
                            </button>

                            </td>
                            <td>
                                
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
                        <th>Codigo</th>
                        <th>Nombre Patrimonios</th>
                        <th>Tipo Patrimonios</th>
                        <th>Ambito</th>
                        <th>Subambito</th>
                        <th>Fotografia</th>
                        <th>Links</th>
                    </tr>
                    @foreach ($patrimonialsites as $patrimonialsite)             
                    <tr>

                        <td>{{ $patrimonialsite->id }}</td>
                        <td>{{ $patrimonialsite->codemat }}</td>
                        <td>{{ $patrimonialsite->name_title  }}</td>
                        <td>{{ $patrimonialsite->category }}</td>
                        <td>{{ $patrimonialsite->scope }}</td>
                        <td>{{ $patrimonialsite->subscope }}</td>
                        <td>
                            <img src="/uploads/patrimonialsite_photos/{{ $patrimonialsite->patrimonial_photo }}" alt="" border="0" height="200" width="600" style="max-width: 130px;">
                        </td>
                        <td>    
                        
                            <!-- <a href="" method="get" class="btn btn-danger delete" role="button" >
                                    <i class="fa fa-trash"></i> Eliminar</a> -->     

                            <button class="btn btn-warning" data-toggle="modal" data-target="#CreatePatrimonial" data-mytitle="Hello"><i class="fa fa-edit" ></i> Edit</button>
                            <!-- Extra large modal -->
                            <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-trash"></i> Eliminar</button>
        
                        </td>
                    </tr>
                    @endforeach
                </table>
                </tbody>
            
                <div class="mx-auto" style="width: 200px;">
                    {!! $patrimonialsites->links() !!}
                </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

    <!-- Start Modal -->
    <div class="modal fade " id="CreatePatrimonial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <!-- <input type="text" value="" id="text1" name="text1">
                    <input type="text" value="" id="text2" name="text2" size="30">    -->

                    <h3 ng-hide="newUser">Nuevo Patrimonio</h3>
                </div>
                
                @include('patrimonialsite.form')

        </div>                  
    </div>
<!-- End Model-->
    <!-- Edit Modal -->
    <div class="modal fade " id="CreatePatrimonial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <!-- <input type="text" value="" id="text1" name="text1">
                    <input type="text" value="" id="text2" name="text2" size="30">    -->

                    <h3 ng-hide="newUser">Editar Patrimonio</h3>
                </div>
                
                @include('patrimonialsite.form')

        </div>                  
    </div>
<!-- End Model-->

<!--Begin Edit Modañ--> 
<!-- 
     <div class="modal fade " id="EditPatrimonial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 ng-hide="newUser">Editar Patrimonio</h3>
               
                </div>
                <div class="modal-body">
                    <div role="tabpanel">
                        
                        <ul class="nav nav-tabs" role="tablistup">
                            <li role="presentation" class="active">
                                <a href="#IdenTabup" aria-controls="IdenTab" role="tab" data-toggle="tab">IDENTIFICACIÓN</a>
                            </li>
                            <li role="presentation">
                                <a href="#LocalTabup" aria-controls="LocalTab" role="tab" data-toggle="tab">LOCALIZACIÓN</a>
                            </li>
                            <li role="presentation">
                                <a href="#EgpTabup" aria-controls="EgpTab" role="tab" data-toggle="tab">ESTADO GENERAL DEL PATRIMONIO</a>
                            </li>
                            <li role="presentation">
                                <a href="#ItTabup" aria-controls="ItTab" role="tab" data-toggle="tab">INFORMACIÓN TURISTÍCA</a>
                            </li>
                            <li role="presentation">
                                <a href="#CloTabup" aria-controls="CloTab" role="tab" data-toggle="tab">CONDICIÓN LEGAL </a>
                            </li>
                            <li role="presentation">
                                <a href="#ObsTabup" aria-controls="ObsTab" role="tab" data-toggle="tab">OBSERVACIONES</a>
                            </li>                            
                            <li role="presentation">
                                <a href="#FubiTabup" aria-controls="FubiTab" role="tab" data-toggle="tab">FUENTE BIBLIOGRAFICA</a>
                            </li>
                            <li role="presentation">
                                <a href="#DatTabup" aria-controls="DatTab" role="tab" data-toggle="tab">DATOS DE CONTROL</a>
                            </li>
                        </ul>
                     
                        <div class="tab-content">
                            <div role="tabpanel row no-gutters" class="tab-pane active" id="IdenTabup">
                              
                                <form action="{{route('patrimonialsite.update','test')}}" method="POST" id="myformupdate" name="myformupdate" enctype="multipart/form-data" >
                                
                                        {{ csrf_field() }}
                                        
                                        <input type="text" value="" id="text1" name="text1" size="30">
                                
                                    <div class="col-12 col-sm-6 col-md-7">
                                       <div class="col-12 col-sm-6 col-md-12">
                                          <label for="vttden">Denominación (Actual)</label>
                                          <input type="text" class="form-control" id="denom" name="denom" placeholder="Denominación " value="" required autocomplete="off">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <label for="validationTooltipUsername">Tipo Patrimonio</label>
                                            <div class="form-group">
                                                <select class="form-control" id="catpat" name="catpat" placeholder="Tipo Patrimonio ">
                                                    <option value="0" disabled="true" selected="true">Selecione Categoria</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{$category->description}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <label for="validationTooltipUsername">Ambito</label>
                                            <div class="form-group">
                                              <select class="form-control" id="amb" name="amb" placeholder="Tipo Ambito">
                                                <option value="0" disabled="true" selected="true">Selecione Provincia</option>
                                              </select>
                                            </div>
                                        </div> 
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <label for="validationTooltipUsername">Sub-Ambito</label>
                                            <div class="form-group">
                                              <select class="form-control" id="subamb" name="subamb" placeholder="Subambito ">
                                                <option value="0" disabled="true" selected="true">Selecione Sub-Ambit</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <label class="custom-file-label" for="inputGroupFile01">Descripcion Patrimonio</label>
                                            <textarea class="form-control" resize="off" id="desc_pat" name="desc_pat" rows="8"></textarea>                                             
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-12">
                                            <label for="validationTooltipUsername">Datación</label>
                                            <div class="form-group">
                                              <select class="form-control" id="datin" name="datin" placeholder="Datación">
                                                <option value="0" disabled="true" selected="true">Seleccione Datación</option>
                                                <option value="No Documentado (S/D)">No Documentado (S/D)</option>
                                                <option value="PreCerámico/Arcaico (8000 ~ 2000/1500 a.C.)">PreCerámico/Arcaico (8000 ~ 2000/1500 a.C.)</option>
                                                <option value="Formativo Temprano (2000/1500 ~ 800 a.C.)">Formativo Temprano (2000/1500 ~ 800 a.C.)</option>
                                                <option value="Formativo Medio (800 ~ 200 a.C.)">Formativo Medio (800 ~ 200 a.C.)</option>
                                                <option value="Formativo Tardio (200 a.C. ~ 400/500 d.C.)">Formativo Tardio (200 a.C. ~ 400/500 d.C.)</option>
                                                <option value="Horizonte Medio (400/500 ~ 900/1000)">Horizonte Medio (400/500 ~ 900/1000)</option>
                                                <option value="Intermedio Tardio (900/1000 ~ 1430)">Intermedio Tardio (900/1000 ~ 1430)</option>
                                                <option value="Horizonte Tardio (1430 ~ 1535)">Horizonte Tardio (1430 ~ 1535)</option>
                                                <option value="Colonial (1538 ~ 1825)">Colonial (1538 ~ 1825)</option>
                                                <option value="Republicano(1826 ~ 2004)">Republicano(1826 ~ 2004)</option>
                                                <option value="Estado Plurinacional (2005 >)">Estado Plurinacional (2005 >)</option>
                                              </select>
                                            </div>
                                        </div>                                      
                                    </div>      
                                  <div class="col-12 col-sm-6 col-md-5">      
                                    <div class="5">
                                        <div class="modal-body">
                                        <input id="uploadImage1" type="file" name="uploadImage1" onchange="previewImage(1);" />
                                        
                                        <img id="uploadPreview1" width="304" height="236"   src="/uploads/patrimonialsite_photos/image_not_available.jpg" />
                                        </div>      
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12">
                                            <label class="vttden">Descripción de la Imagen</label>
                                              <input type="text" class="form-control" id="descima" name="descima" placeholder="Descripción " required>
                                        
                                    </div>
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Ubicación</label>
                                          <input type="text" class="form-control" id="ubi" name="ubi" placeholder="Donde fue tomada la Foto " value="" required>
                                    </div>                                    
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Fecha</label>
                                            <div class="input-group date" date-provide="datepicker"> 
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text"  class="date form-control" name="datetake" id="datetake" autocomplete="off" required >                
                                            </div>                                      
                                    </div>
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Codigo Foto</label>
                                                <input type="text" class="form-control" value="" id="text2" name="text2" size="30"> 
                                                                             
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                            <label for="vttden">Fotógrafo / Autor</label>
                                            <input type="text" class="form-control" id="photognam" name="photognam" placeholder="Nombre Fotógrafo" autocomplete="off" value="" required>
                                    </div>                                      
                                    
                                  </div>

                                      
                                
                                    <div class="col-12 col-sm-6 col-md-12">
                                        <div class="form-group">
                                            <label for="history_in_charge">Historia del Personal Encargado del Patrimonio</label>
                                                <table class="table">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Nombre</th>
                                                      <th scope="col">Segundo Nombre</th>
                                                      <th scope="col">Apellido</th>
                                                      <th scope="col">Organizacion</th>
                                                      <th scope="col">Núm.de Contacto</th>
                                                      <th scope="col">Fecha Desde</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        @for ($i=1; $i <= 5; $i++)
                                                    <tr>
                                                      <th scope="row">{{$i}}</th>
                                                      <th ><input type="text" name="history_in_charge[{{ $i }}][nombre]" class="form-control" value="{{ old('history_in_charge['.$i.'][nombre]') }}"></th>
                                                      <th ><input type="text" name="history_in_charge[{{ $i }}][segundonombre]" class="form-control" value="{{ old('history_in_charge['.$i.'][segundonombre]') }}"></th>
                                                      <th ><input type="text" name="history_in_charge[{{ $i }}][apellido]" class="form-control" value="{{ old('history_in_charge['.$i.'][apellido]') }}"></th>
                                                      <th ><input type="text" name="history_in_charge[{{ $i }}][organizacion]" class="form-control" value="{{ old('history_in_charge['.$i.'][organizacion]') }}"></th>
                                                      <th ><input type="text" name="history_in_charge[{{ $i }}][numerocontacto]" class="form-control" value="{{ old('history_in_charge['.$i.'][numerocontacto]') }}"></th>
                                                      <th ><input class="date form-control" type="text" name="history_in_charge[{{ $i }}][fechadesde]" class="form-control" value="{{ old('history_in_charge['.$i.'][fechadesde]') }}"></th>
                                                    </tr>
                                                      @endfor
                                                </tbody>
                                                </table>

                                                </div>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="LocalTabup">
                                            <div class="row no-gutters">
                                              <div class="col-12 col-sm-6 col-md-6">                                  
                                                 
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Departamento</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectcity" name="selectcity" placeholder="Tipo Patrimonio ">
                                                            <option value="0" disabled="true" selected="true">Selecione Departamento</option>
                                                            @foreach ($cities as $city)
                                                                <option value="{{ $city->id }}">{{$city->name}}</option>
                                                            @endforeach
                                                          </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Provincia</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectprovince" name="selectprovince" placeholder="Tipo Patrimonio ">
                                                            <option value="0" disabled="true" selected="true">Selecione Provincia</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Municipio</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectmunicipality" name="selectmunicipality" placeholder="Tipo Patrimonio ">
                                                            <option value="0" disabled="true" selected="true">Selecione Municipio</option>
                                                            <option>Tipo Patrimonio</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="direccion">Dirección</label>
                                                        <div class="form-group">
                                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección " value="" required>
                                                        </div>
                                                    </div>
                                                    <h4 for="fol"> Coordenadas/UTM</h4>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="lng">Longitud</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                            <input type="text" class="form-control" name='lng' id="lng" placeholder="Logitud">
                                                        </div>                                                        
                                                    </div>
                                                   <div class="col-12 mb-3 col-md-12">
                                                        <label for="lat">Latitud</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                            <input type="text" class="form-control" name='lat'  id="lat" placeholder="Latitud">
                                                        </div>                                                        
                                                    </div>
                                                   <div class="col-12 mb-3 col-md-12">
                                                        <label for="alt">Altitud</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                            <input type="text" class="form-control" name='alt'  id="alt" placeholder="Latitud">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zona">Zona</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                                        <input type="text" class="form-control" id="zona" name="zona" placeholder="Denominación " value="" required>                                                        
                                                        </div>
                                                    </div>
                       
                                                </div>
                                                <div class="col-12 com-sm-6 col-md-6">
                                                    <div class="form-group"> 
                                                        <label  class="box-title">Búscador de Lugar</label>
                                                        <div class="form-group">
                                                            <input id="searchmap" class="controls" type="text" placeholder="Search Box">
                                                            <div id="map">
                                                         </div>


                                                        </div>

                                                    </div>                                                    
                                                     
                                                     <br>                                                                                                            
                                                </div>
                                            </div>                                            
                                        </div>
                                        
                                        <div role="tabpanel" class="tab-pane" id="EgpTabup">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-6">                                  
                                        
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="dat">Conservación</label>
                                                        <div class="form-group">
                                        
                                                          <select class="form-control" id="selectconser" name="selectconser" placeholder="Datación">
                                                            <option value="0" disabled="true" selected="true">Seleccione Datación</option>
                                                            <option value="1">BUENO - menos del 50% de deterioro</option>
                                                            <option value="2">REGULAR - más del 50% y menos del 75% de deterioro</option>
                                                            <option value="3">MALO - más del 75% de deterioro</option>
                                                          </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-6">
                                                        <h4 for="fol">Agentes de Deterioro</h4>
                                                            <label for="dat">Naturales</label>
                                                                <br>
                                                            <div class="form-group">
                                                                <input type="checkbox" id="natgeo" name="natgeo" value="Geológico">
                                                                <label for="natgeo">Geológico</label>
                                                                <br>
                                                                <input type="checkbox" id="nathid" name="nathid" value="Hídrico">
                                                                <label for="nathid">Hídrico</label>
                                                                <br>
                                                                <input type="checkbox" id="nateol" name="nateol" value="Eólico">
                                                                <label for="nateol">Eólico</label>
                                                                <br>
                                                                <input type="checkbox" id="checkbox1" value="otros" onchange="checka(this)">
                                                                <label for="geo">Otros</label>
                                                                <input id="natot" name="natot" type="text" size="15" maxlength="50" disabled>
                                                            </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-6">
                                                        <h4 for="fol">&nbsp;</h4>
                                                        <label for="dat">Antrópicos</label>

                                                            <div class="form-group">
                                                                <input type="checkbox" id="antdurb" name="antdurb" value="D. Urbano">
                                                                <label for="antdurb">D. Urbano</label>
                                                                <br>
                                                                <input type="checkbox" id="antdagr" name="antdagr" value="D.Agricola">
                                                                <label for="antdagr">D.Agricola</label>
                                                                <br>
                                                                <input type="checkbox" id="antdsaq" name="antdsaq" value="Saqueo / Vandalismo">
                                                                <label for="antdsaq">Saqueo / Vandalismo</label>
                                                                <br>
                                                                <input type="checkbox" id="antinf" name="antinf" value="Infraestructura Civil">
                                                                <label for="antinf">Infraestructura Civil</label>
                                                                <br>
                                                                <input type="checkbox" id="anttur" name="anttur" value="Turismo">
                                                                <label for="anttur">Turismo</label>
                                                                <br>
                                                                <input type="checkbox" id="checkbox1" value="checkbox" onchange="checkantro(this)">
                                                                <label for="oth">Otros</label>
                                                                <input id="antot" name="antot" type="text" size="15" maxlength="50" disabled>
                                                            </div>
                                                            
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12 com-sm-6 col-md-6">
                                                    <h4 for="fol">Condición Legal</h4>
                                                    <div class="col-12 mb-3 col-md-6">
                                                        <div class="form-group"> 
                                                            <label for="dat">Propietario/Custodia</label>
                                                            
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="Público Comunal">
                                                                <label for="prop">Público Comunal</label>
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="Privado Religioso">
                                                                <label for="prop">Privado Religioso</label>
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="Privado Colectivo">
                                                                <label for="prop">Privado Colectivo</label>
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="Privado Individual">
                                                                <label for="prop">Privado Individual</label>
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="Público Estatal">
                                                                <label for="prop">Público Estatal</label>
                                                                <br>
                                                                <input type="radio" id="prop" name="prop" value="De Corresposabilidad">
                                                                <label for="prop">De Corresposabilidad</label>
                                                                <br>
                                                           
                                                        </div>
                                                    </div>                                                    
                                                      <div class="col-12 mb-3 col-md-6">
                                                        <label for="dat">Uso</label>
                                                            
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Turistico">
                                                                <label for="use">Turistico</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Unidad Educativa">
                                                                <label for="use">Unidad Educativa</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Ninguno">
                                                                <label for="use">Ninguno</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Habitacional">
                                                                <label for="use">Habitacional</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Religioso">
                                                                <label for="use">Religioso</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Comercial">
                                                                <label for="use">Comercial</label>
                                                                <br>
                                                                <input type="radio" id="uso" name="uso" value="Museo">
                                                                <label for="use">Museo</label>
                                                                <br>
                                                                <input type="radio" id="checkbox1" value="checkbox" onchange="checkuso(this)">
                                                                <label for="use">Otros</label>
                                                                <input id="uotr" name="uotr" type="text" size="15" maxlength="50" disabled>
                                                
                                                    </div>                                                                                                           
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3 col-md-12">
                                                <div class="form-group">
                                                    <label for="owner">Propietario Custodia</label>
                                                        <table class="table">
                                                          <thead class="thead-dark">
                                                            <tr>
                                                              <th scope="col">#</th>
                                                              <th scope="col">Nombre</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            @for ($i=1; $i <= 8; $i++)
                                                            <tr>
                                                              <th scope="row">{{$i}}</th>
                                                              <th ><input type="text" name="owner[{{ $i }}][name]" class="form-control" value="{{ old('owner['.$i.'][name]') }}"></th>
                                                                
                                                            </tr>
                                                            @endfor
                                                        </tbody>
                                                        </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="ItTab">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-6">                            
      
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label for="validationTooltipUsername">Tipo Patrimonio</label>
                                                        <div class="form-group">
                                                            <select class="form-control" id="typ" name="typ" placeholder="Tipo Patrimonio ">
                                                                <option value="0" disabled="true" selected="true">Selecione Ambito</option>
                                                                    @foreach ($types as $type)
                                                                        <option value="{{ $type->id }}">{{$type->description}}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6 col-md-12">
                                                        <label for="validationTooltipUsername">Sub Tipo</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="subtyp" name="subtyp" placeholder="Tipo SubTipo">
                                                            <option value="0" disabled="true" selected="true">Selecione Subambito</option>
                                                          </select>
                                                        </div>
                                                    </div>                                                     
                                                    <div class="col-12 mb-3 col-md-12">
                                                                                                              
                                                        <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                                            API Accesibilidad turística de Punto de Interés Patrimonial Identificado
                                                        </label>
                                 
                                                        <input type="text" value="" id="resapi" name="resapi">



                                                        <div id="content" style="display: none;">
                                                            
                                                            <ul type="disc">
                   

                                                            <li>Seleccione la situación actual:</li>
                                                              <input type="radio" id="sa" name="sa" value="1" onclick="sumar()"> Protegido &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="sa" name="sa" value="2" onclick="sumar()"> Vulnerable&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="sa" name="sa" value="3" onclick="sumar()"> En amenaza  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Seleccione Urgencia de Intervencion:</li>
                                                              <input type="radio" id="ue" name="ue" value="2" onclick="sumar()">Espera&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="ue" name="ue" value="0" onclick="sumar()">Sin dato&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="ue" name="ue" value="1" onclick="sumar()">Inmediato&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Seleccione Seguridad Fisica:</li>
                                                              <input type="checkbox" id="sf" name="sf" value="1" onclick="sumar()">Sistema de Alarma&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="checkbox" id="sf" name="sf" value="2" onclick="sumar()">Comunidad Organizada&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="checkbox" id="sf" name="sf" value="3" onclick="sumar()">Otro typo de seguridad  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            </ul>
                                                  
                                                            <input type="text" value="" id="resapi" name="resapi">                                                           
                                                         </div>
                                                        <hr /> 
                                                        <label for="chkPassport"> 
                                                        <input type="checkbox" name="checkrca" id="checkrca" value="1" onchange="javascript:showContentRca()" />
                                                        CARACTERISTICAS DE ACCESIBILIDAD 
                                                        </label> 
                                                   
                                                        <div id="contentrca" style="display: none;">

                                                            <ul type="disc">
                               
                                                            <li>Posibilidad de Ingreso :</li>
                                                              <input type="radio" id="pi" name="pi" value="1" onclick="sumarac()"> Completo &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="pi" name="pi" value="2" onclick="sumarac()"> Mala o Ausente &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="pi" name="pi" value="3" onclick="sumarac()"> Adaptable  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Visibilidad:</li>
                                                              <input type="radio" id="vi" name="vi" value="1" onclick="sumarac()">Buena&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="vi" name="vi" value="2" onclick="sumarac()">Regular&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="vi" name="vi" value="3" onclick="sumarac()">Mala o Ausente&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Infomación:</li>
                                                              <input type="radio" id="in" name="in" value="1" onclick="sumarac()">Buena&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="in" name="in" value="2" onclick="sumarac()">Regular&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="in" name="in" value="3" onclick="sumarac()">Mala o Ausente&nbsp;&nbsp;&nbsp;&nbsp;

                                                            </ul>
                                                            
                                                         </div>
                                                         <input type="text" value="" id="rapi" name="rapi">                                                      
                                                        <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="checkacceso" value="1" onchange="javascript:showContentAcceso()" />
                                                            AEPI Accesibilidad turística de Entorno de Punto de Interés Patrimonial Identificado
                                                        </label>
                                                       
                                                        <input type="text" value="" id="resaepi" name="resaepi">
                                                        <div id="contentacceso" style="display: none;">
                                                       
                                                            <ul type="disc">
                                                                
                                                            <li>Existencia de urbanización básica (agua/alcantarillado/electricidad):</li>
                                                              <input type="radio" name="eub" id="eub" value="0" onclick="sumarae()" > Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="eub" id="eub" value="1" onclick="sumarae()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Estabilidad y seguridad de caminos</li>
                                                              <input type="radio" name="esc" id="esc" value="0" onclick="sumarae()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esc" id="esc" value="1" onclick="sumarae()">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                                            <li>Estabilidad y seguridad de construcciones</li>
                                                              <input type="radio" name="esco" id="esco" value="0" onclick="sumarae()"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esco" id="esco" value="1" onclick="sumarae()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de alojamiento</li>
                                                              <input type="radio" name="esa" id="esa" value="0" onclick="sumarae()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esa" id="esa" value="1" onclick="sumarae()">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                            <li>Existencia de servicio de alimentación</li>
                                                              <input type="radio" name="esal" id="esal" value="0" onclick="sumarae()"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esal" id="esal" value="1" onclick="sumarae()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de transporte</li>
                                                              <input type="radio" name="est" id="est" value="0" onclick="sumarae()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="est" id="est" value="1" onclick="sumarae()">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de seguridad al viajero</li>
                                                              <input type="radio" name="essv" id="essv" value="0" onclick="sumarae()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="essv" id="essv" value="1" onclick="sumarae()">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </ul>

                                                                                                                     
                                                         </div>
                                                        
                                                    </div>
                                                    <hr />  
                                                    <div class="col-12 mb-3 col-md-12">
                                                         <label for="validationTooltipUsername">Jerarquia Turística Actual</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="jerar" name="jerar" placeholder="Jerarquia">
                                                            <option value="0" disabled="true" selected="true">Seleccione Jerarquia</option>
                                                            <option value="Jeraquía I">Jeraquía I</option>
                                                            <option value="Jeraquía II">Jeraquía II</option>
                                                            <option value="Jeraquía III">Jeraquía III</option>
                                                            <option value="Jeraquía IV">Jeraquía IV</option>
                                                            <option value="Jeraquía V">Jeraquía V</option>
                                                          </select>
                                                        </div>                                                   
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Estudio de Capacidad de Carga</label>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input type="radio"  name="ecc" value="Si">Si<br>
                                                                <input type="radio"  name="ecc" value="No">No<br>
                                                            </div>   
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="col-12 com-sm-6 col-md-6">
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <h4 for="fol">Calidad Básica de Atractivo</h4>
                                                            <label for="dat">Factores Objetivos</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="facobj" name="facobj" placeholder="Datación">
                                                            <option value="0" disabled="true" selected="true">Seleccione Factor</option>
                                                            <option value="POSITIVA">POSITIVA</option>
                                                            <option value="MEDIA">MEDIA</option>
                                                            <option value="NEGATIVA">NEGATIVA</option>
                                                          </select>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="dat">Percepción de Turista</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="pertur" name="pertur" placeholder="Datación" >
                                                            <option value="0" disabled="true" selected="true">Seleccione Percepción</option>
                                                            <option value="POSITIVA">POSITIVA</option>
                                                            <option value="MEDIA">MEDIA</option>
                                                            <option value="NEGATIVA">NEGATIVA</option>
                                                          </select>
                                                        </div>                                    
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <h4 for="fol"> Control de Datos Por Turismo</h4>
                                                        <label for="zon">Registrado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='rnam'  id="rnam" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="rfec" id="rfec" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Revisado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='renam'  id="renam" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="refec" id="refec" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Aprobado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='apnam'  id="apnam" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="apfec" id="apfec" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="CloTabup">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                                  
                                                  
                                                    <h4 for="fol">Condición Legal</h4>
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label for="zon">Reconocido</label>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input type="radio" name="rec" value="Si">Si<br>
                                                                <input type="radio" name="rec" value="No">No<br>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                    </hr>
                                                    <div class="col-6 col-sm-6 col-md-12">
                                
                                                            <label for="law"></label>
                                                                     <table class="table">
                                                                          <thead class="thead-dark">
                                                                            <tr>
                                                                              <th scope="col">Secuencia</th>
                                                                              <th scope="col">Tipo de Ley</th>
                                                                              <th scope="col">Número</th>
                                                                              <th scope="col">Fecha</th>
                                                                              <th scope="col">Declaratoria/Titulo</th>
                                                                            </tr>
                                                                          </thead>
                                                                          <tbody>
                                                                                @for ($i=1; $i <= 5; $i++)
                                                                            <tr>
                                                                              <th scope="row">{{$i}}</th>
                                                                              <th ><select class="form-control" id="validationTooltip02" name="law[{{ $i }}][nivel]" placeholder="Tipo de Ley">
                                                                                    <option value="0" disabled="true" selected="true">Seleccione Tipo de Ley</option>
                                                                                    <option value="{{ old('law['.$i.'][Internacional]') }}">Internacional</option>
                                                                                    <option value="{{ old('law['.$i.'][Nacional]') }}">Nacional</option>
                                                                                    <option value="{{ old('law['.$i.'][Departamental]') }}">Departamental</option>
                                                                                    <option value="{{ old('law['.$i.'][Municipal]') }}">Municipal</option>
                                                                                    <option value="{{ old('law['.$i.'][Ninguna]') }}">Ninguna</option>
                                                                                  </select></th>
                                                                              <th ><input type="text" name="law[{{ $i }}][numero]" class="form-control" value="{{ old('law['.$i.'][numero]') }}"></th>
                                                                              <th ><input class="date form-control" autocomplete="false" type="text" name="law[{{ $i }}][fecha]" class="form-control" value="{{ old('law['.$i.'][fecha]') }}"></th>
                                                                              <th ><input type="text" name="law[{{ $i }}][declaratoria]" class="form-control" value="{{ old('law['.$i.'][declaratoria]') }}"></th>
                                                                            </tr>
                                                                              @endfor
                                                                        </tbody>
                                                                    </table>       
                                                        </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="ObsTabup">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                            
                                                  
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Observaciones</label>
                                                        <textarea class="form-control" resize="off" id="obser" name="obser" rows="3"></textarea> 
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="FubiTabup">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                            
                                                
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Fuente Bibliografica</label>
                                                        <textarea class="form-control" resize="off" id="sour" name="sour" rows="5"></textarea> 
                                                    </div>                                                     
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Grado de Confiabilidad</label>
                                                        </br>
                                                            <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="checkaccesoconf" value="1" onchange="javascript:showContentConfi()" />
                                                            Grado de Confianbilidad del Patrimonial Identificado
                                                        </label>
                                                        </br>
                                                    
                                                        <input type="text" value="" id="resconf" name="resconf">
                                                        <div id="contentaccesoconfi" style="display: none;">
                                                    
                                                                <ul type="disc">
                                                                <li> Coordenada de ubicación, en cualquier proyección geográfica</li>
                                                                  <input type="radio" name="cucp" id="cucp" value="0" onclick="sumaconf()"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="cucp" id="cucp" value="1" onclick="sumaconf()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                <li> Registro fotográfico</li>
                                                                  <input type="radio" name="refo" id="refo" value="0" onclick="sumaconf()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="refo" id="refo" value="1" onclick="sumaconf()">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                                                <li> Institución que brinda la información (fuente de información).</li>
                                                                  <input type="radio" name="ibi" id="ibi" value="0" onclick="sumaconf()"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="ibi" id="ibi" value="1" onclick="sumaconf()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                <li> Informe técnico. </li>
                                                                  <input type="radio" name="ite" id="ite" value="0" onclick="sumaconf()">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="ite" id="ite" value="1" onclick="sumaconf()">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                
                                                                <li> Investigaciones varias.</li>
                                                                  <input type="radio" name="inva" id="inva" value="0" onclick="sumaconf()"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="inva" id="inva" value="1" onclick="sumaconf()"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </ul>
                                                                                                                      
                                                         </div>                                                                                                                    
                                                    </div> 
                                                </div>
                                                
                                                </div>
                                            </div>                                            
                                            <div role="tabpanel" class="tab-pane" id="DatTabup">
                                                <div class="row no-gutters">
                                                    <div class="col-12 col-sm-6 col-md-12">                            
              
                                                        <div class="col-6 col-sm-6 col-md-12">
                                                           <div class="col-12 com-sm-6 col-md-12">
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label for="zon">Entidad Investigadora</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='reen'  id="reen" placeholder="Indique la Entidad ">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Registrado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='zon'  id="zon" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="date_born" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Revisado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='zon'  id="zon" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="date_born" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Aprobado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='zon'  id="zon" placeholder="Nombre">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="date_born" autocomplete="off" required >                
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                                    <div class="col-6 col-sm-6 col-md-12">
                                                        <label for="historychange">Cambia la Historia</label>
                                                        <table class="table">
                                                          <thead class="thead-dark">
                                                            <tr>
                                                                <td colspan="1"></td>
                                                                <td colspan="2" align="center">Cambiado Por</td>
                                                                <td colspan="2" align="center">Revisado Por</td>
                                                                <td colspan="2" align="center">Aprovado Por</td>
                                                            </tr>
                                                            <tr>
                                                              <td scope="col">#</td>
                                                              <td scope="col">Nombre</td>
                                                              <td scope="col">Fecha</td>
                                                              <td scope="col">Nombre</td>
                                                              <td scope="col">Fecha</td>
                                                              <td scope="col">Nombre</td>
                                                              <td scope="col">Fecha</td>
                                                            </tr>
                                                          </tdead>
                                                          <tbody>
                                                            @for ($i=1; $i <= 5; $i++)
                                                            <tr>
                                                              <td scope="row">{{$i}}</td>
                                                              <td><input type="text" name="historychange[{{ $i }}][nombrecamb]" class="form-control" value="{{ old('historychange['.$i.'][nombrecamb]') }}"></td>
                                                              <td><input class="date form-control" autocomplete="false" type="text" name="historychange[{{ $i }}][fechacamb]" class="form-control" value="{{ old('historychange['.$i.'][fechacamb]') }}"></td>
                                                              <td><input type="text" name="historychange[{{ $i }}][nombrerev]" class="form-control" value="{{ old('historychange['.$i.'][nombrerev]') }}"></td>
                                                              <td><input class="date form-control" autocomplete="false" type="text" name="historychange[{{ $i }}][fecharev]" class="form-control" value="{{ old('historychange['.$i.'][fecharev]') }}"></td>
                                                              <td><input type="text" name="historychange[{{ $i }}][nombreapro]" class="form-control" value="{{ old('historychange['.$i.'][nombreapro]') }}"></td>
                                                              <td><input class="date form-control" autocomplete="false" type="text" name="historychange[{{ $i }}][fechaapro]" class="form-control" value="{{ old('historychange['.$i.'][fechaapro]') }}"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="1"></td>
                                                                <td colspan="2"><input placeholder="Resumen de Cambio" type="text" name="historychange[{{ $i }}][rescamb]" class="form-control" value="{{ old('historychange['.$i.'][rescamb]') }}"></td>
                                                                <td colspan="2"><input placeholder="Resumen de Cambio" type="text" name="historychange[{{ $i }}][resrev]" class="form-control" value="{{ old('historychange['.$i.'][resrev]') }}"></td>
                                                                <td colspan="2"><input placeholder="Resumen de Cambio" type="text" name="historychange[{{ $i }}][resapro]" class="form-control" value="{{ old('historychange['.$i.'][resapro]') }}"></td>
                                                            </tr>
                                                            @endfor
                                                        </tbody>
                                                        </table>
                                                   

                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success" form="myform">Enviar Cambios</button>
                                                </div> 
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
<!--End Show Modal-->
<!--Start Delete Modal --->
<div class="modal fade bd-example-modal-xl" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModelLabel">Eliminar Patrimonio</h>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="/patrimonialsite" method="POST" id="deleteForm">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="DELETE">
                        <p> Esta seguro ?.. Quieres eliminar los Datos.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Si!, Eliminar</button>
                    </div>
                </form>

        </div>
    </div>
</div>
<!-- End Delete Modal-->
             <script>
            function initMap() {
                var bolivia = {
                    lat: -16.2901540, 
                    lng: -63.5886530};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 5,
                        center: bolivia
                    });
                    var marker = new google.maps.Marker({
                        position: {
                            lat: -16.2901540, 
                            lng: -63.5886530,
                            //alt: 500,
                        },
                        map: map,
                        draggable: true
                    });

                    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
                        var elevator = new google.maps.ElevationService;
                         var infowindow = new google.maps.InfoWindow({map: map});

                    google.maps.event.addListener(searchBox,'places_changed', function(){
                        var places = searchBox.getPlaces();
                        var bounds = new  google.maps.LatLngBounds();
                        var i, place;
                        
                        for (i = 0; place= places[i] ; i++)
                        {   
                            bounds.extend(place.geometry.location);
                            marker.setPosition(place.geometry.location);
                        }

                        map.fitBounds(bounds);
                        map.setZoom(15);

                    });

                    google.maps.event.addListener(marker,'position_changed',function(){
                        var lat = marker.getPosition().lat();
                        var lng = marker.getPosition().lng();
                        //var alt = marker.getPosition().alt();

                        $('#lat').val(lat);
                        $('#lng').val(lng);
                        //alert(val(lat));
                        //$('#lat').val(lat);

                    });

                    // function showAltitude(){
                    //     console.log('altitud');
                    }



//                     function displayLocationElevation(location, elevator, infowindow) {
//   // Initiate the location request
//   elevator.getElevationForLocations({
//     'locations': [location]
//   }, function(results, status) {
//     infowindow.setPosition(location);
//     if (status === 'OK') {
//       // Retrieve the first result
//       if (results[0]) {
//         // Open the infowindow indicating the elevation at the clicked position.
//         infowindow.setContent('The elevation at this point <br>is ' +
//             results[0].elevation + ' meters.');
//       } else {
//         infowindow.setContent('No results found');
//       }
//     } else {
//       infowindow.setContent('Elevation service failed due to: ' + status);
//     }
//   });
// }
//}
            </script>

           <script type="text/javascript">

            function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
            }

            function showContentRca() {
            element = document.getElementById("contentrca");
            check = document.getElementById("checkrca");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
            }

            function showContentAcceso() {
            element = document.getElementById("contentacceso");
            check = document.getElementById("checkacceso");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
            }

            function showContentConfi() {
            element = document.getElementById("contentaccesoconfi");
            check = document.getElementById("checkaccesoconf");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
            }
           </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzTmmwZQMrY6ZWG0Z_MppOXN9A4Cp92z4&callback=initMap&libraries=places" type="text/javascript">
            </script>

            <script type="text/javascript">
                function previewImage(nb) {        
                    var reader = new FileReader();         
                    reader.readAsDataURL(document.getElementById('uploadImage'+nb).files[0]);         
                    reader.onload = function (e) {             
                    document.getElementById('uploadPreview'+nb).src = e.target.result;         
                    };     
                }
            </script>
            <script type="text/javascript">
            var subacceSumado = 0;
            $(function(){
                $('#selectconser').on('change', onSelectConser);
            });
                function onSelectConser(){
                //subacceSumado = 0;
                var type_idc = $(this).val();
                subacceSumado = subacceSumado + parseInt(type_idc);
                alert(type_idc);
                document.getElementById('resapi').value = 'ACCESIBLE ';
                }
            </script>
            <script type="text/javascript">
                function sumar(){
                    obj = document.myform['sa'];
                    totalChecks1 = obj.length;
                    alert(totalChecks1);
                    for( i=0; i<totalChecks1; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            subacceSumado = subacceSumado + parseInt(valor1[0],10);
                        }
                    }
                    obj = document.myform['ue'];
                    totalChecks2 = obj.length;
                    //subacceSumado = 0;
                    console.log(totalChecks2);
                    for( i=0; i<totalChecks2; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            subacceSumado = subacceSumado + parseInt(valor1[0],10);
                        }
                    }
                    obj = document.myform['sf'];
                    totalChecks3 = obj.length;
                    //subacceSumado = 0;
                    console.log(totalChecks3);
                    for( i=0; i<totalChecks3; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            subacceSumado = subacceSumado + parseInt(valor1[0],10);
                        }
                    }
                    if(subacceSumado<=5){
                    document.getElementById('resapi').value = 'ACCESIBLE ';
                    }else{
                        if(subacceSumado>=6 && subacceSumado<=7){
                            document.getElementById('resapi').value = 'MEJORABLE ';
                        }else {
                            document.getElementById('resapi').value = 'NO ACCESIBLE';
                        }
                    }
                }
                </script>
                <script type="text/javascript">
                var subcaraSumadoca = 0;
                var sum =0;
                function sumarac(){
                    obj = document.myform['pi'];
                    totalChecks4 = obj.length;
                    //subcaraSumadoca = 0;
                    for( i=0; i<totalChecks4; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            subcaraSumadoca = subcaraSumadoca + parseInt(valor1[0],10);
                        }
                    }
                     obj = document.myform['vi'];
                     totalChecks5 = obj.length;
                     //subcaraSumadoca = 0;
                     for( i=0; i<totalChecks5; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             subcaraSumadoca = subcaraSumadoca + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['in'];
                     totalChecks6 = obj.length;
                     //subcaraSumadoca = 0;
                     for( i=0; i<totalChecks6; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             subcaraSumadoca = subcaraSumadoca + parseInt(valor1[0],10);
                         }
                     }
                    if(subcaraSumadoca<=5){
                    document.getElementById('resacapi').value = 'BUENAS ';
                    }else{
                        if(subcaraSumadoca>=6 && subcaraSumadoca<=7){
                            document.getElementById('resacapi').value = 'REGULARES';
                        }else {
                            document.getElementById('resacapi').value = 'MEJORABLES';
                        }
                    }                     
                    //alert(subacceSumado +' '+ subcaraSumadoca );
                    sum = subacceSumado * subcaraSumadoca;
                    
                     if(sum==0){
                     //document.getElementById('rapi').innerHTML = 'SI ';
                     document.getElementById("rapi").value =  'NO ACCESIBLE';
                     }else{
                         if(sum>1 && sum<=2){
                             //document.getElementById('rapi').innerHTML = 'LIMITADA ';
                             document.getElementById("rapi").value =  'ACCESIBLE';
                         }else {
                             //document.getElementById('rapi').innerHTML = 'NO' ;
                             document.getElementById("rapi").value =  'MEJORABLE';
                         }
                     }
                    // document.getElementById('reapi').innerHTML =  totalSumadoa;
                }
            </script>
            <script type="text/javascript">
                function sumarae(){
                    obj = document.myform['eub'];
                    totalChecks4 = obj.length;
                    totalSumadoa = 0;
                    for( i=0; i<totalChecks4; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                        }
                    }
                     obj = document.myform['esc'];
                     totalChecks5 = obj.length;
                     //totalSumadoa = 0;
                     for( i=0; i<totalChecks5; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['esco'];
                     totalChecks6 = obj.length;
                     //totalSumadoa = 0;
                     for( i=0; i<totalChecks6; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['esa'];
                     totalChecks7 = obj.length;
                    // totalSumadoa = 0;
                     for( i=0; i<totalChecks7; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['esal'];
                     totalChecks8 = obj.length;
                     //totalSumadoa = 0;
                     for( i=0; i<totalChecks8; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['est'];
                     totalChecks9 = obj.length;
                     //totalSumadoa = 0;
                     for( i=0; i<totalChecks9; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                     obj = document.myform['essv'];
                     totalChecks10 = obj.length;
                     //totalSumadoa = 0;
                     for( i=0; i<totalChecks10; i++){
                         if( obj[i].checked == true ){
                             valor1 = obj[i].value.split('-');
                             totalSumadoa = totalSumadoa + parseInt(valor1[0],10);
                         }
                     }
                    //alert(totalSumadoa);
                     if(totalSumadoa<=1){
                     //document.getElementById('reapi').innerHTML = 'ACCESIBLE '+totalSumadoa;
                     document.getElementById("resaepi").value =  'ACCESIBLE';
                     //resaepi
                     }else{
                         if(totalSumadoa>=2 && totalSumadoa<=3){
                             //document.getElementById('reapi').innerHTML = 'MEJORABLE '+totalSumadoa;
                             document.getElementById("resaepi").value =  'MEJORABLE';
                         }else {
                             //document.getElementById('reapi').innerHTML = 'NO ACCESIBLE'+totalSumadoa;
                             document.getElementById("resaepi").value =  'NO ACCESIBLE';
                         }
                     }
                    //document.getElementById('reapi').innerHTML =  totalSumadoa;
                }
                //car accesibilidad
//                <script type="text/javascript">

            </script>
            <script type="text/javascript">
                function sumaconf(){
                    //alert('hola');
                    obj = document.myform['cucp'];
                    totalChecks11 = obj.length;
                    totalSumadob = 0;
                    for( i=0; i<totalChecks11; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadob = totalSumadob + parseInt(valor1[0],10);
                        }
                    }

                    obj = document.myform['refo'];
                    totalChecks12 = obj.length;
                    //totalSumadob = 0;
                    for( i=0; i<totalChecks12; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadob = totalSumadob + parseInt(valor1[0],10);
                        }
                    }


                    obj = document.myform['ibi'];
                    totalChecks13 = obj.length;
                    //totalSumadob = 0;
                    for( i=0; i<totalChecks13; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadob = totalSumadob + parseInt(valor1[0],10);
                        }
                    }


                    obj = document.myform['ite'];
                    totalChecks14 = obj.length;
                    //totalSumadob = 0;
                    for( i=0; i<totalChecks14; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadob = totalSumadob + parseInt(valor1[0],10);
                        }
                    }


                    obj = document.myform['inva'];
                    totalChecks15 = obj.length;
                    //totalSumadob = 0;
                    for( i=0; i<totalChecks15; i++){
                        if( obj[i].checked == true ){
                            valor1 = obj[i].value.split('-');
                            totalSumadob = totalSumadob + parseInt(valor1[0],10);
                        }
                    }
                    if(totalSumadob<=1){
                    //document.getElementById('rconf').innerHTML = 'CONFIABLE';
                    document.getElementById("resconf").value =  'CONFIABLE';
                    }else{
                        if(totalSumadob<=2){
                            //document.getElementById('rconf').innerHTML = 'POR CONFIRMAR';
                            document.getElementById("resconf").value =  'POR CONFIRMAR';
                        }else {
                            //document.getElementById('rconf').innerHTML = 'NO CONFIABLE';
                            document.getElementById("resconf").value =  'NO CONFIABLE';
                        }
                    }
                    //document.getElementById('rconf').innerHTML =  totalSumadob;
                }
            </script>
            <script type="text/javascript">

                function checka(checkbox) {
                  var elCampo = document.getElementById('natot');
                  //elCampo.disabled = checkbox.checked;
                    if(document.getElementById('natot').disabled == true)
                        document.getElementById('natot').disabled = false;
                    else
                        document.getElementById('natot').disabled = true;

                }

                function checkantro(checkantrobox) {
                  var elCampo = document.getElementById('antot');
                  //elCampo.disabled = checkbox.checked;
                    if(document.getElementById('antot').disabled == true)
                        document.getElementById('antot').disabled = false;
                    else
                        document.getElementById('antot').disabled = true;
                }
                function checkuso(checkusobox) {
                  var elCampo = document.getElementById('uotr');
                  //elCampo.disabled = checkbox.checked;
                    if(document.getElementById('uotr').disabled == true)
                        document.getElementById('uotr').disabled = false;
                    else
                        document.getElementById('uotr').disabled = true;
                }
            </script>

            <script type="text/javascript">
            //Start Delete Record
                $('#CreatePatrimonial').on('show.bs.modal',function(event){
                    //(console.log('Modal Opend');
                    var button = $(event.relatedTarget)
                    var recipient = button.data('mytitle')

                    var modal = $(this)
                    modal.find('.modal-title').text('New message to '+ recipient)
                    modal.find('.modal-body #title').val('title')
                });
            //End Dekete Record 
            </script>

{{-- //modal --}}


    
@endsection

