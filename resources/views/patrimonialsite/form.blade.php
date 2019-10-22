
<!-- Modal -->
<div class="modal-body">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablistupdate">
                            <li role="presentation" class="active">
                                <a href="#IdenTab" aria-controls="IdenTab" role="tab" data-toggle="tab">IDENTIFICACIÓN</a>
                            </li>
                            <li role="presentation">
                                <a href="#LocalTab" aria-controls="LocalTab" role="tab" data-toggle="tab">LOCALIZACIÓN</a>
                            </li>
                            <li role="presentation">
                                <a href="#EgpTab" aria-controls="EgpTab" role="tab" data-toggle="tab">ESTADO GENERAL DEL PATRIMONIO</a>
                            </li>
                            <li role="presentation">
                                <a href="#ItTab" aria-controls="ItTab" role="tab" data-toggle="tab">INFORMACIÓN TURISTÍCA</a>
                            </li>
                            <li role="presentation">
                                <a href="#CloTab" aria-controls="CloTab" role="tab" data-toggle="tab">CONDICIÓN LEGAL </a>
                            </li>
                            <li role="presentation">
                                <a href="#ObsTab" aria-controls="ObsTab" role="tab" data-toggle="tab">OBSERVACIONES</a>
                            </li>                            
                            <li role="presentation">
                                <a href="#FubiTab" aria-controls="FubiTab" role="tab" data-toggle="tab">FUENTE BIBLIOGRAFICA</a>
                            </li>
                            <li role="presentation">
                                <a href="#DatTab" aria-controls="DatTab" role="tab" data-toggle="tab">DATOS DE CONTROL</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel row no-gutters" class="tab-pane active" id="IdenTab">
                                <!-- {{Form::open(array('method'=>'POST', 'route' => array('patrimonialsite.store'),'files' =>true )) }}
                                {{--
                                    PatrimonialsiteController
                                    --}} -->
                                    <!-- <form action="patrimonialsite" method="POST" enctype="multipart/form-data" > -->

                                    <!-- <form action="/patrimonialsite" method="POST" id="myform" name="myform" enctype="multipart/form-data" > -->
                                    <form action="/patrimonialsite" method="POST" id="myform" name="myform" enctype="multipart/form-data">
                                        <input type="text" value="{{ old('text1') }}" id="text1" name="text1" size="30">
                                        <!-- <input type="text" value="" id="text2" name="text2" size="30">    -->
                                        <!-- {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}} -->
                                        {{ csrf_field() }}   
                                    <div class="col-12 col-sm-6 col-md-7">
                                       <div class="col-12 col-sm-6 col-md-12">
                                          <label for="vttden">Denominación (Actual)</label>
                                          <input type="text" class="form-control" id="denom" name="denom" placeholder="Denominación " value="{{ old('denom') }}"  autocomplete="off">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <label for="validationTooltipUsername">Tipo Patrimonio</label>
                                            <div class="form-group">
                                                <select class="form-control" id="catpat" name="catpat" placeholder="Tipo Patrimonio " value="{{ old('catpat') }}" >
                                                    <option value="0" disabled="true" selected="true">Selecione Categoria</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{$category->description}}</option>
                                                        @endforeach
                                                </select>
                                                <input type="hidden" name="catpath" id="catpath" value="{{$category->description}}" value="{{ old('catpath') }}" >
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <label for="validationTooltipUsername">Ambito</label>
                                            <div class="form-group">
                                              <select class="form-control" id="amb" name="amb" placeholder="Tipo Ambito" value="{{ old('amb') }}" >
                                                <option value="0" disabled="true" selected="true">Selecione Ambito</option>
                                              </select>
                                              <input type="hidden" name="ambh" id="ambh" value="{{ old('ambh') }}"  >
                                            </div>
                                        </div> 
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <label for="validationTooltipUsername">Sub-Ambito</label>
                                            <div class="form-group">
                                              <select class="form-control" id="subamb" name="subamb" placeholder="Subambito " value="{{ old('subamb') }}" >
                                                <option value="0" disabled="true" selected="true">Selecione Sub-Ambit</option>
                                              </select>
                                              <input type="hidden" name="subambh" id="subambh" value="{{ old('subambh') }}"  >
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <label class="custom-file-label" for="inputGroupFile01">Descripcion Patrimonio</label>
                                            <textarea class="form-control" resize="off" id="desc_pat" name="desc_pat" rows="8" value="{{ old('desc_pat') }}"></textarea>                                             
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-12">
                                            <label for="validationTooltipUsername">Datación</label>
                                            <div class="form-group">
                                              <select class="form-control" id="datin" name="datin" placeholder="Datación" value="{{ old('datin') }}">
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
                                        <input id="uploadImage1" type="file" name="uploadImage1" onchange="previewImage(1);" value="{{ old('uploadImage1') }}" />
                                        <!-- <input type="file"  name='turisticsite_photo' class="form-control"> -->
                                        <img id="uploadPreview1" width="304" height="236"   src="/uploads/patrimonialsite_photos/image_not_available.jpg" value="{{ old('uploadPreview1') }}" />
                                        </div>      
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12">
                                            <label class="vttden">Descripción de la Imagen</label>
                                              <input type="text" class="form-control" id="descima" name="descima" placeholder="Descripción " value="{{ old('descima') }}">
                                            <!-- </div> -->
                                    </div>
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Ubicación</label>
                                          <input type="text" class="form-control" id="ubi" name="ubi" placeholder="Donde fue tomada la Foto " value="{{ old('ubi') }}" >
                                    </div>                                    
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Fecha</label>
                                            <div class="input-group date" date-provide="datepicker"> 
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text"  class="date form-control" name="datetake" id="datetake" autocomplete="off" value="{{ old('datetake') }}" >                
                                            </div>                                      
                                    </div>
                                    <div class=" col-12 col-sm-6 col-md-6">
                                          <label for="vttden">Codigo Foto</label>
                                                <input type="text" class="form-control" id="text2" name="text2" size="30" value="{{ old('text2') }}"> 
                                                                             
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                            <label for="vttden">Fotógrafo / Autor</label>
                                            <input type="text" class="form-control" id="photognam" name="photognam" placeholder="Nombre Fotógrafo" autocomplete="off" value="{{ old('photognam') }}" >
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

                                        <div role="tabpanel" class="tab-pane" id="LocalTab">
                                            <div class="row no-gutters">
                                              <div class="col-12 col-sm-6 col-md-6">                                  
                                                  <!-- <div class="form-row"> -->
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Departamento</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectcity" name="selectcity" placeholder="Tipo Patrimonio" value="{{old('selectcity')}}">
                                                            <option value="0" disabled="true" selected="true">Selecione Departamento</option>
                                                            @foreach ($cities as $city)
                                                                <option value="{{ $city->id }}">{{$city->name}}</option>
                                                            @endforeach
                                                          </select>
                                                          <input type="hidden" name="cityh" id="cityh" value="{{old('cityh')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Provincia</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectprovince" name="selectprovince" placeholder="Tipo Patrimonio" value="{{old('selectprovince')}}">
                                                            <option value="0" disabled="true" selected="true">Selecione Provincia</option>
                                                          </select>
                                                          <input type="hidden" name="provinceh" id="provinceh" value="{{old('provinceh')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-4">
                                                        <label for="validationTooltipUsername">Municipio</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="selectmunicipality" name="selectmunicipality" placeholder="Tipo Patrimonio" value="{{old('selectmunicipality')}}">
                                                            <option value="0" disabled="true" selected="true">Selecione Municipio</option>
                                                            <option>Tipo Patrimonio</option>
                                                          </select>
                                                          <input type="hidden" name="municipalityh" id="municipalityh" value="{{old('municipalityh')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="direccion">Dirección</label>
                                                        <div class="form-group">
                                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección " value="{{old('direccion')}}">
                                                        </div>
                                                    </div>
                                                    <h4 for="fol"> Coordenadas/UTM</h4>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="lng">Longitud</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                            <input type="text" class="form-control" name='lng' id="lng" placeholder="Logitud" value="{{old('lng')}}">
                                                        </div>                                                        
                                                    </div>
                                                   <div class="col-12 mb-3 col-md-12">
                                                        <label for="lat">Latitud</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                            <input type="text" class="form-control" name='lat'  id="lat" placeholder="Latitud" value="{{old('lat')}}">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zona">Longitud-GMS</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                                        <input type="text" class="form-control" id="lngg" name="lngg" placeholder="Denominación " value="{{old('lngg')}}"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="alt">Latitud-GMS</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                            <input type="text" class="form-control" name='latg'  id="latg" placeholder="Latitud" value="{{old('latg')}}">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="alt">Altitud</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                            <input type="text" class="form-control" name='alt'  id="alt" placeholder="Altitud" value="{{old('alt')}}">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zona">Zona</label>
                                                        <div class="input-group text">
                                                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                                        <input type="text" class="form-control" id="zona" name="zona" placeholder="Denominación " value="{{old('zona')}}" required> 
                                                        </div>
                                                    </div>                                                    
                                                  <!--  <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Zona</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-bus"></i></span>
                                                            <input type="text" class="form-control" name='zon'  id="zon" placeholder="Latitud">
                                                        </div>                                                        
                                                    </div> -->
                                                </div>
                                                <div class="col-12 com-sm-6 col-md-6">
                                                    <div class="form-group"> 
                                                        <label  class="box-title">Búscador de Lugar</label>
                                                        <div class="form-group">
                                                            <input id="searchmap" class="controls" type="text" placeholder="Search Box" size="60" value="{{old('searchmap')}}">
                                                            <div id="map">
                                                            </div>
                                                        </div>
                                                        <input type="button" id="btnSave" value="Save PNG"/>
                                                        <div id="img-out"></div>
                                                        
                                                    </div>                                                    
                                                     
                                                     <br>                                                                                                            
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!--egp-->
                                        <div role="tabpanel" class="tab-pane" id="EgpTab">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-6">                                  
                                                  <!-- <div class="form-row"> -->
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="dat">Conservación</label>
                                                        <div class="form-group">
                                                            <!-- <input type="radio" id="edc" name="edc" value="1" onclick="sumar()"> Bueno
                                                              <input type="radio" id="edc" name="edc" value="3" onclick="sumar()"> Regular
                                                              <input type="radio" id="edc" name="edc" value="2" onclick="sumar()"> Malo -->
                                                          <!-- <select class="form-control" id="selectconser" name="id[1]" placeholder="Datación" value="{{old('selectconser')}}" onchange="ajax_change_state(this.value);"> -->
                                                          <select class="form-control" id="selectconser" name="id[1]" placeholder="Datación" onChange="ajax_change_state(this.value);">
                                                            <option value="0" disabled="true" selected="true">Seleccione Datación</option>
                                                              <option value="1">BUENO - menos del 50% de deterioro</option>
                                                              <option value="3">REGULAR - más del 50% y menos del 75% de deterioro</option>
                                                              <option value="2">MALO - más del 75% de deterioro</option>
                                                          </select> 
                                                        </div>
                                                    </div>  

                                                    <div class="col-12 mb-3 col-md-6">
                                                        <h4 for="fol">Agentes de Deterioro</h4>
                                                            <label for="dat">Naturales</label>
                                                                <br>
                                                            <div class="form-group">
                                                                <input class="form-check-input" type="checkbox" id="natgeo" name="natgeo" value="Geológico">
                                                                <label for="natgeo">Geológico</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="nathid" name="nathid" value="Hídrico">
                                                                <label for="nathid">Hídrico</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="nateol" name="nateol" value="Eólico">
                                                                <label for="nateol">Eólico</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="checkbox1" value="otros" onchange="checka(this)">
                                                                <label for="checkbox1">Otros</label>
                                                                <input id="natot" name="natot" type="text" size="15" maxlength="50" disabled>
                                                            </div>
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-6">
                                                        <h4 for="fol">&nbsp;</h4>
                                                        <label for="dat">Antrópicos</label>
                                                            <!-- <form name="fomr2" method="post" action=""> -->
                                                            <div class="form-group">
                                                                <input class="form-check-input" type="checkbox" id="antdurb" name="antdurb" value="D. Urbano">
                                                                <label for="antdurb">D. Urbano</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="antdagr" name="antdagr" value="D.Agricola">
                                                                <label for="antdagr">D.Agricola</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="antdsaq" name="antdsaq" value="Saqueo / Vandalismo">
                                                                <label for="antdsaq">Saqueo / Vandalismo</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="antinf" name="antinf" value="Infraestructura Civil">
                                                                <label for="antinf">Infraestructura Civil</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="anttur" name="anttur" value="Turismo">
                                                                <label for="anttur">Turismo</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="checkbox2" value="checkbox" onchange="checkantro(this)">
                                                                <label for="checkbox2">Otros</label>
                                                                <input id="antot" name="antot" type="text" size="15" maxlength="50" disabled>
                                                            </div>
                                                            <!-- </form>                                                        -->
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                                <div class="col-12 com-sm-6 col-md-6">
                                                    <h4 for="fol">Condición Legal</h4>
                                                    <div class="col-12 mb-3 col-md-6">
                                                        <div class="form-group"> 
                                                            <label for="dat">Propietario/Custodia</label>
                                                            <!-- <form name="form1" method="post" action=""> -->
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="propc" name="prop" value="Público Comunal">
                                                                <label for="propc">Público Comunal</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="propr" name="prop" value="Privado Religioso">
                                                                <label for="propr">Privado Religioso</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="propco" name="prop" value="Privado Colectivo">
                                                                <label for="propco">Privado Colectivo</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="propi" name="prop" value="Privado Individual">
                                                                <label for="propi">Privado Individual</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="prope" name="prop" value="Público Estatal">
                                                                <label for="prope">Público Estatal</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="dcorr" name="prop" value="De Corresposabilidad">
                                                                <label for="dcorr">De Corresposabilidad</label>
                                                                <br>
                                                            <!-- </form>  -->
                                                        </div>
                                                    </div>                                                    
                                                      <div class="col-12 mb-3 col-md-6">
                                                        <label for="dat">Uso</label>
                                                            <!-- <form name="fom3" method="post" action=""> -->
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usot" name="uso" value="Turistico">
                                                                <label for="usot">Turistico</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usoue" name="uso" value="Unidad Educativa">
                                                                <label for="usoue">Unidad Educativa</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="uson" name="uso" value="Ninguno">
                                                                <label for="uson">Ninguno</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usoh" name="uso" value="Habitacional">
                                                                <label for="usoh">Habitacional</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usor" name="uso" value="Religioso">
                                                                <label for="usor">Religioso</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usoc" name="uso" value="Comercial">
                                                                <label for="usoc">Comercial</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="usom" name="uso" value="Museo">
                                                                <label for="usom">Museo</label>
                                                                <br>
                                                                <input class="form-check-input" type="checkbox" id="checkbox3" value="checkbox" onchange="checkuso(this)">
                                                                <label for="checkbox3">Otros</label>
                                                                <input id="uotr" name="uotr" type="text" size="15" maxlength="50" disabled>
                                                            <!-- </form> -->                                                       
                                                    </div>                                                                                                           
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3 col-md-12">
                                                <div class="form-group">
                                                    <label for="propr">Propietario Custodia</label>
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
                                                              <th ><input type="text" name="owner[{{ $i }}][name]"   class="form-control"  value="{{ old('owner['.$i.'][name]') }}"></th>
                                                              <!-- <th ><input type="text" name="owner[{{ $i }}][nombre]" class="form-control" value="{{ old('owner['.$i.'][nombre]') }}"></th> -->
                                                                   
                                                                   <!-- <input type="text" name="law[{{ $i }}][numero]" class="form-control" value="{{ old('law['.$i.'][numero]') }}"></th> -->
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
                                                  <!-- <div class="form-row"> -->
            <!--                                         <h4 for="fol">INFORMACIÓN TURÍSTICA</h4> -->
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label for="validationTooltipUsername">Tipo Patrimonio</label>
                                                        <div class="form-group">
                                                            <select class="form-control" id="typ" name="typ" placeholder="Tipo Patrimonio" value="{{old('typ')}}">
                                                                <option value="0" disabled="true" selected="true">Selecione Tipo</option>
                                                                    @foreach ($types as $type)
                                                                        <option value="{{ $type->id }}">{{$type->description}}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6 col-md-12">
                                                        <label for="validationTooltipUsername">Seleccione SubTipo</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="subtyp" name="subtyp" placeholder="Tipo SubTipo" value="{{old('subtyp')}}">
                                                            <option value="0" disabled="true" selected="true">Selecione Subtipo</option>
                                                          </select>
                                                        </div>
                                                    </div>                                                   
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label>APi:</label><input type="text" value="" id="rapi" name="rapi" disabled="true">                                                      
                                                        <label for="chkPassport">

                                                            <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()"/>
                                                            API Accesibilidad turística de Punto de Interés Patrimonial Identificado
                                                        </label>

                                                        <div id="content" style="display: none;">
                                                            <!-- <form name="formapi" id="formapi">  -->
                                                            <ul type="disc">
                                                            
                                                            <li>Estado de Conservación:</li>
                                                              <a href="javascript:void(null)" onClick="ajax_change_state(1);">
                                                                <input type="radio" id="cmbooption_1" name="id[1]" value="1" disabled="true"></a>Bueno &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <a href="javascript:void(null)" onClick="ajax_change_state(3);">
                                                                <input type="radio" id="cmbooption_1" name="id[1]" value="3" disabled="true"></a>Regular &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <a href="javascript:void(null)" onClick="ajax_change_state(2);">
                                                                <input type="radio" id="cmbooption_1" name="id[1]" value="2" disabled="true"></a>Malo &nbsp;&nbsp;&nbsp;&nbsp;                                                                

                                                            <li>Seleccione la situación actual:</li>
                                                              <input type="radio" id="sa1" name="RadioGroup2" value="1" onclick="sumarsa(this)"> Protegido &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="sa2" name="RadioGroup2" value="2" onclick="sumarsa(this)"> Vulnerable&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="sa3" name="RadioGroup2" value="3" onclick="sumarsa(this)"> En amenaza  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Seleccione Urgencia de Intervencion:</li>
                                                              <input type="radio" id="ui1" name="RadioGroup3" value="2" onclick="sumarui(this)">Espera&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="ui2" name="RadioGroup3" value="0" onclick="sumarui(this)">Sin dato&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="ui3" name="RadioGroup3" value="1" onclick="sumarui(this)">Inmediato&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Seleccione Seguridad Fisica:</li>
                                                              <input type="checkbox" id="sf1" name="sf1" value="1" onclick="sumarsf(this)">Sistema de Alarma&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="checkbox" id="sf2" name="sf2" value="1" onclick="sumarsf(this)">Comunidad Organizada&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="checkbox" id="sf3" name="sf3" value="1" onclick="sumarsf(this)">Otro typo de seguridad  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            </ul>
                                                            <!--   <input type="submit" value="Submit">-->
                                                            <!-- </form>                                                           -->
                                                         </div>
                                                         <label>Subresultado APi:</label><input type="text" value="" id="resapi" name="resapi" disabled="true">
                                                        <hr /> 
                                                        <label for="chkPassport"> 
                                                        <input type="checkbox" name="checkrca" id="checkrca" value="1" onchange="javascript:showContentRca()" />
                                                        Característicad de Accesibilidad 
                                                        </label> 
                                                        <!-- <input type="text" value="" id="rca" name="rca"> -->
                                                        
                                                        <div id="contentrca" style="display: none;">
                                                            <!-- <form name="formapi" id="formapi">  -->
                                                            <ul type="disc">
                                                                
                                    <!--                         <li>Selecione estado de conservacion:</li>
                                                              <input type="radio" id="edc" name="edc" value="1" onclick="sumar()"> Bueno
                                                              <input type="radio" id="edc" name="edc" value="3" onclick="sumar()"> Regular
                                                              <input type="radio" id="edc" name="edc" value="2" onclick="sumar()"> Malo
                                                               -->
                                                            <li>Posibilidad de Ingreso :</li>
                                                              <input type="radio" id="pi1" name="RadioGroup5" value="1" onclick="sumaracpi(this)"> Completo &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="pi2" name="RadioGroup5" value="2" onclick="sumaracpi(this)"> Mala o Ausente &nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="pi3" name="RadioGroup5" value="3" onclick="sumaracpi(this)"> Adaptable  &nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Visibilidad:</li>
                                                              <input type="radio" id="vi1" name="RadioGroup6" value="1" onclick="sumaracpi(this)">Buena&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="vi2" name="RadioGroup6" value="2" onclick="sumaracpi(this)">Regular&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="vi3" name="RadioGroup6" value="3" onclick="sumaracpi(this)">Mala o Ausente&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Infomación:</li>
                                                              <input type="radio" id="in1" name="RadioGroup7" value="1" onclick="sumaracpi(this)">Buena&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="in2" name="RadioGroup7" value="2" onclick="sumaracpi(this)">Regular&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" id="in3" name="RadioGroup7" value="3" onclick="sumaracpi(this)">Mala o Ausente&nbsp;&nbsp;&nbsp;&nbsp;

                                                            </ul>
                                                            
                                                         </div>
                                                         <br>
                                                         <label>Subresultado Acceso:</label><input type="text" value="" id="resacapi" name="resacapi" disabled="true">
                                                        <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="checkacceso" value="1" onchange="javascript:showContentAcceso()" />
                                                            AEPI Accesibilidad turística de Entorno de Punto de Interés Patrimonial Identificado
                                                        </label>
                                                        <!-- <div id="reapi" >ESTADO AEPI</div> -->
                                                        <div id="contentacceso" style="display: none;">
                                                            <!-- <form name="myform" id="myform"> -->
                                                            <ul type="disc">
                                                                
                                                            <li>Existencia de urbanización básica (agua/alcantarillado/electricidad):</li>
                                                              <input type="radio" name="eub" id="eub1" value="0" onclick="sumarae(this)" > Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="eub" id="eub2" value="1" onclick="sumarae(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Estabilidad y seguridad de caminos</li>
                                                              <input type="radio" name="esc" id="esc1" value="0" onclick="sumarae(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esc" id="esc2" value="1" onclick="sumarae(this)">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                                            <li>Estabilidad y seguridad de construcciones</li>
                                                              <input type="radio" name="esco" id="esco1" value="0" onclick="sumarae(this)"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esco" id="esco2" value="1" onclick="sumarae(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de alojamiento</li>
                                                              <input type="radio" name="esa" id="esa1" value="0" onclick="sumarae(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esa" id="esa2" value="1" onclick="sumarae(this)">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                            <li>Existencia de servicio de alimentación</li>
                                                              <input type="radio" name="esal" id="esal1" value="0" onclick="sumarae(this)"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="esal" id="esal2" value="1" onclick="sumarae(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de transporte</li>
                                                              <input type="radio" name="est" id="est1" value="0" onclick="sumarae(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="est" id="est2" value="1" onclick="sumarae(this)">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                            <li>Existencia de servicio de seguridad al viajero</li>
                                                              <input type="radio" name="essv" id="essv1" value="0" onclick="sumarae(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="radio" name="essv" id="essv2" value="1" onclick="sumarae(this)">No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            </ul>

                                                            <!-- </form>                                                            -->
                                                         </div>
                                                        <label>Resultado AEPI:</label><input type="text" value="" id="resaepi" name="resaepi" disabled="true">
                                                    </div>
                                                    <hr />  
                                                    <div class="col-12 mb-3 col-md-12">
                                                         <label for="validationTooltipUsername">Jerarquia Turística Actual</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="jerar" name="jerar" placeholder="Jerarquia" value="{{old('jerar')}}">
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
                                                          <select class="form-control" id="facobj" name="facobj" placeholder="Datación" value="{{old('facobj')}}">
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
                                                          <select class="form-control" id="pertur" name="pertur" placeholder="Datación" value="{{old('pertur')}}">
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
                                                            <input type="text" class="form-control" name='rnam'  id="rnam" placeholder="Nombre" value="{{old('rnam')}}" >
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="rfec" id="rfec" autocomplete="off" value="{{old('rfec')}}" >
                                                        </div>                                       
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Revisado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='renam'  id="renam" placeholder="Nombre" value="{{old('renam')}}" >
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="refec" id="refec" autocomplete="off"  value="{{old('refec')}}"> 
                                                        </div>                                        
                                                    </div>
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label for="zon">Aprobado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='apnam'  id="apnam" placeholder="Nombre" value="{{old('apnam')}}" >
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="apfec" id="apfec" autocomplete="off"  value="{{old('apfec')}}"> 
                                                        </div>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="CloTab">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                                  
                                                  <!-- <div class="form-row"> -->
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
                                                       <!--  <label for="validationTooltipUsername">Tipo de Ley</label>
                                                        <div class="form-group">
                                                          <select class="form-control" id="validationTooltip02" placeholder="Tipo de Ley">
                                                            <option value="0" disabled="true" selected="true">Seleccione Tipo de Ley</option>
                                                            <option value="Internacional">Internacional</option>
                                                            <option value="Nacional">Nacional</option>
                                                            <option value="Departamental">Departamental</option>
                                                            <option value="Municipal">Municipal</option>
                                                            <option value="Ninguna">Ninguna</option>
                                                          </select>
                                                        </div>  -->
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
                                        <div role="tabpanel" class="tab-pane" id="ObsTab">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                            
                                                  
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Observaciones</label>
                                                        <textarea class="form-control" resize="off" id="obser" name="obser" rows="3" value="{{old('obser')}}"></textarea> 
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="FubiTab">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-12">                            
                                                
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Fuente Bibliografica</label>
                                                        <textarea class="form-control" resize="off" id="sour" name="sour" rows="5" value="{{old('sour')}}"></textarea> 
                                                    </div>                                                     
                                                    <div class="col-12 mb-3 col-md-12">
                                                        <label class="custom-file-label" for="inputGroupFile01">Grado de Confiabilidad</label>
                                                        </br>
                                                            <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="checkaccesoconf" value="1" onchange="javascript:showContentConfi()" />
                                                            Grado de Confianbilidad del Patrimonial Identificado
                                                        </label>
                                                        </br>
                                                        <!-- <div id="rconf" >ESTADO CONFIABILIDAD</div> -->
                                                        <div id="contentaccesoconfi" style="display: none;">
                                                            <!-- <form name="formconf" id="formconf"> -->
                                                                <ul type="disc">
                                                                <li> Coordenada de ubicación, en cualquier proyección geográfica</li>
                                                                  <input type="radio" name="cucp" id="cucp1" value="0" onclick="sumaconf(this)"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="cucp" id="cucp2" value="1" onclick="sumaconf(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                <li> Registro fotográfico</li>
                                                                  <input type="radio" name="refo" id="refo1" value="0" onclick="sumaconf(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="refo" id="refo2" value="1" onclick="sumaconf(this)">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                                                                <li> Institución que brinda la información (fuente de información).</li>
                                                                  <input type="radio" name="ibi" id="ibi1" value="0" onclick="sumaconf(this)"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="ibi" id="ibi2" value="1" onclick="sumaconf(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                                <li> Informe técnico. </li>
                                                                  <input type="radio" name="ite" id="ite1" value="0" onclick="sumaconf(this)">Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="ite" id="ite2" value="1" onclick="sumaconf(this)">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                
                                                                <li> Investigaciones varias.</li>
                                                                  <input type="radio" name="inva" id="inva1" value="0" onclick="sumaconf(this)"> Si&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <input type="radio" name="inva" id="inva2" value="1" onclick="sumaconf(this)"> No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </ul>
                                                            <!-- </form>                                                            -->
                                                         </div>
                                                         <label>Grado Confidencial:</label><input type="text" value="" id="resconf" name="resconf" disabled="true">
                                                    </div> 
                                                </div>
                                                
                                                </div>
                                            </div>                                            
                                            <div role="tabpanel" class="tab-pane" id="DatTab">
                                                <div class="row no-gutters">
                                                    <div class="col-12 col-sm-6 col-md-12">                            
                                                      
                      <!--                                   <div class="col-12 col-sm-6 col-md-12">
                                                            <label class="custom-file-label" for="inputGroupFile01">Observaciones</label>
                                                            <textarea class="form-control" resize="off" id="obser" rows="3"></textarea> 
                                                        </div> -->
                                                        <div class="col-6 col-sm-6 col-md-12">
                                                           <div class="col-12 com-sm-6 col-md-12">
                                                    <div class="col-12 col-sm-6 col-md-12">
                                                        <label for="zon">Entidad Investigadora</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='reei'  id="reei" placeholder="Indique la Entidad " value="{{old('reei')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Registrado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='rnei'  id="rnei" placeholder="Nombre" value="{{old('rnei')}}">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="rdei" id="rdei" autocomplete="off" value="{{old('rdei')}}">
                                                        </div>                                       
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Revisado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='rpei'  id="rpei" placeholder="Nombre" value="{{old('rpei')}}">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="rpdei" id="" autocomplete="off"   value="{{old('rpdei')}}">
                                                        </div>                                       
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="zon">Aprobado Por</label>
                                                        <div class="input-group text"> 
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input type="text" class="form-control" name='apei'  id="apei" placeholder="Nombre" value="{{old('apei')}}">
                                                        </div>
                                                        <label for="vttden">Fecha</label>
                                                        <div class="input-group date" date-provide="datepicker"> 
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="text"  class="date form-control" name="apdei" id="apdei" autocomplete="off"   value="{{old('apdei')}}">
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
                                                    <!-- </div> -->

                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success" form="myform">Enviar</button>
                                                </div> 
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Enviar</button> -->
                                        <!-- <button type="submit" class="btn btn-success"><i class="fa fa-arrow-right"></i> Guardar</button> -->
                                    </div>
                                </form>
                            </div>
                    </div>