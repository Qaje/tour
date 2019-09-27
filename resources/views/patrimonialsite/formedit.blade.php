
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
                                    <form action="/patrimonialsite" method="POST" id="myform" name="myform" enctype="multipart/form-data" >
                                        <input type="text" value="" id="text1" name="text1" size="30">
                                        <!-- <input type="text" value="" id="text2" name="text2" size="30">    -->
                                        <!-- {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}} -->
                                        {{ csrf_field() }}   
                                    <div class="col-12 col-sm-6 col-md-7">
                                       <div class="col-12 col-sm-6 col-md-12">
                                          <label for="vttden">Denominación (Actual)</label>
                                          <input type="text" class="form-control" id="denom" name="denom" placeholder="Denominación " value="{{$patrimonialsite->name_title}}" required autocomplete="off">
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12">
                                            <label for="validationTooltipUsername">Tipo Patrimonio</label>
                                            <div class="form-group">
                                                <select class="form-control" id="catpat" name="catpat" placeholder="Tipo Patrimonio ">
                                                    <option value="{{$patrimonialsite->category}}" selected="true">Selecione Categoria</option>
                                                        @foreach ($categories as $category)
                                                            <option value="$patrimonialsite->category">{{$category->description}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6">
                                            <label for="validationTooltipUsername">Ambito</label>
                                            <div class="form-group">
                                              <select class="form-control" id="amb" name="amb" placeholder="Tipo Ambito">
                                                <option value="0" disabled="true" selected="true">Selecione Ambito</option>
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
                                        <!-- <input type="file"  name='turisticsite_photo' class="form-control"> -->
                                        <img id="uploadPreview1" width="304" height="236"   src="/uploads/patrimonialsite_photos/image_not_available.jpg" />
                                        </div>      
                                        
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12">
                                            <label class="vttden">Descripción de la Imagen</label>
                                              <input type="text" class="form-control" id="descima" name="descima" placeholder="Descripción " required>
                                            <!-- </div> -->
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

                                        <div role="tabpanel" class="tab-pane" id="LocalTab">
                                            <div class="row no-gutters">
                                              <div class="col-12 col-sm-6 col-md-6">                                  
                                                  <!-- <div class="form-row"> -->
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
                                                            <input id="searchmap" class="controls" type="text" placeholder="Search Box">
                                                            <div id="map">
                                                         </div>


                                                        </div>

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
                                                          <select class="form-control" id="selectconser" name="selectconser" placeholder="Datación">
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
                                                            <!-- <form name="fomr2" method="post" action=""> -->
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
                                                                <input type="radio" id="propc" name="prop" value="Público Comunal">
                                                                <label for="prop">Público Comunal</label>
                                                                <br>
                                                                <input type="radio" id="propr" name="prop" value="Privado Religioso">
                                                                <label for="prop">Privado Religioso</label>
                                                                <br>
                                                                <input type="radio" id="propco" name="prop" value="Privado Colectivo">
                                                                <label for="prop">Privado Colectivo</label>
                                                                <br>
                                                                <input type="radio" id="propi" name="prop" value="Privado Individual">
                                                                <label for="prop">Privado Individual</label>
                                                                <br>
                                                                <input type="radio" id="prope" name="prop" value="Público Estatal">
                                                                <label for="prop">Público Estatal</label>
                                                                <br>
                                                                <input type="radio" id="dcorr" name="prop" value="De Corresposabilidad">
                                                                <label for="prop">De Corresposabilidad</label>
                                                                <br>
                                                            <!-- </form>  -->
                                                        </div>
                                                    </div>                                                    
                                                      <div class="col-12 mb-3 col-md-6">
                                                        <label for="dat">Uso</label>
                                                            <!-- <form name="fom3" method="post" action=""> -->
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
                                                            <!-- </form> -->                                                       
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
                                                        <label>APi:</label><input type="text" value="" id="rapi" name="rapi" disabled="true">                                                      
                                                        <label for="chkPassport">    
                                                            <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
                                                            API Accesibilidad turística de Punto de Interés Patrimonial Identificado
                                                        </label>

                                                        <div id="content" style="display: none;">
                                                            <!-- <form name="formapi" id="formapi">  -->
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
                                                              <input type="checkbox" id="sf" name="sf" value="1" onclick="sumar()">Comunidad Organizada&nbsp;&nbsp;&nbsp;&nbsp;
                                                              <input type="checkbox" id="sf" name="sf" value="1" onclick="sumar()">Otro typo de seguridad  &nbsp;&nbsp;&nbsp;&nbsp;

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

                                                            <!-- </form>                                                            -->
                                                         </div>
                                                        <label>Resultado AEPI:</label><input type="text" value="" id="resaepi" name="resaepi" disabled="true">
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
                                                        <textarea class="form-control" resize="off" id="obser" name="obser" rows="3"></textarea> 
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="FubiTab">
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
                                                        <!-- <div id="rconf" >ESTADO CONFIABILIDAD</div> -->
                                                        <div id="contentaccesoconfi" style="display: none;">
                                                            <!-- <form name="formconf" id="formconf"> -->
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