@extends('main_m')

@section('title', '| Sitios Truristicos')

@section('content')

<h1>Eventos {{Auth::user()->name}}</h1>


<div style="overflow-x:auto;">
<div class="row">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"> <h2>&nbsp;&nbsp;&nbsp;Información de usuarios del sistema</h2></div>
      <div class="panel-body">
          <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{Auth::user()->id}}</h3>

              <p>Administradores</p>
            </div>
            <div class="icon">
              <i class="ion ion-key"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> N </h3>

              <p>Visitantes</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-plane"></i>
            </div>
            <a href="asignaCursoEstu" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> N </h3>

              <p>Usuarios </p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline  "></i>
            </div>
            <a href="listaCursos" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>     

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> N </h3>

              <p>Encargados Empresa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-person"></i>
            </div>
            <a href="asignaHorariosProf" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
<div class="panel panel-default">
    <!-- Content Header (Page header) -->
    <div class="panel-heading"><h2> Calendario   </h2>  </div>
    <div class="panel-body">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Eventos</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <div class="external-event bg-green">Entrega de boletines</div>
                <div class="external-event bg-yellow">Reunion padres de familia</div>
                <div class="external-event bg-aqua">Reunion de profesores</div>
                <div class="external-event bg-light-blue">Salida pedagogica</div>
                <div class="checkbox">
                  <label for="drop-remove">
                    <input type="checkbox" id="drop-remove">
                    Eliminar al asignar
                  </label>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Crear evento</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Titulo de evento">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
                </div>
                <!-- /btn-group -->
              </div><br/><br/>
              <!-- /input-group -->
              {!! Form::open(['route' => ['event.store'], 'method' => 'POST', 'id' =>'form-calendario']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar">
                <div id="calendar" class="calendar-example fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listWeek-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>May 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 655px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-04-29"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-04-30"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-01"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-02"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-03"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-04"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-04-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-04-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-04-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-04-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-06"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-07"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-08"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-09"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-10"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-11"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-12"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-10"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-10&quot;,&quot;type&quot;:&quot;day&quot;}">10</a></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-11"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-11&quot;,&quot;type&quot;:&quot;day&quot;}">11</a></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-12"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-12&quot;,&quot;type&quot;:&quot;day&quot;}">12</a></td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-13"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-14"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-15"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-16"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-05-17"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-05-18"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-05-19"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-13"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-13&quot;,&quot;type&quot;:&quot;day&quot;}">13</a></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-14"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-14&quot;,&quot;type&quot;:&quot;day&quot;}">14</a></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-15"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-15&quot;,&quot;type&quot;:&quot;day&quot;}">15</a></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-16"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-16&quot;,&quot;type&quot;:&quot;day&quot;}">16</a></td><td class="fc-day-top fc-thu fc-past" data-date="2018-05-17"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-17&quot;,&quot;type&quot;:&quot;day&quot;}">17</a></td><td class="fc-day-top fc-fri fc-past" data-date="2018-05-18"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-18&quot;,&quot;type&quot;:&quot;day&quot;}">18</a></td><td class="fc-day-top fc-sat fc-past" data-date="2018-05-19"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-19&quot;,&quot;type&quot;:&quot;day&quot;}">19</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-05-20"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-05-21"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-05-22"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-05-23"></td><td class="fc-day fc-widget-content fc-thu fc-today " data-date="2018-05-24"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-05-25"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-05-26"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-05-20"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-20&quot;,&quot;type&quot;:&quot;day&quot;}">20</a></td><td class="fc-day-top fc-mon fc-past" data-date="2018-05-21"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-21&quot;,&quot;type&quot;:&quot;day&quot;}">21</a></td><td class="fc-day-top fc-tue fc-past" data-date="2018-05-22"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-22&quot;,&quot;type&quot;:&quot;day&quot;}">22</a></td><td class="fc-day-top fc-wed fc-past" data-date="2018-05-23"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-23&quot;,&quot;type&quot;:&quot;day&quot;}">23</a></td><td class="fc-day-top fc-thu fc-today " data-date="2018-05-24"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-24&quot;,&quot;type&quot;:&quot;day&quot;}">24</a></td><td class="fc-day-top fc-fri fc-future" data-date="2018-05-25"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-25&quot;,&quot;type&quot;:&quot;day&quot;}">25</a></td><td class="fc-day-top fc-sat fc-future" data-date="2018-05-26"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-26&quot;,&quot;type&quot;:&quot;day&quot;}">26</a></td></tr></thead><tbody><tr><td rowspan="6"></td><td rowspan="6"></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="6"></td></tr><tr><td rowspan="5"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+3 more</a></div></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 109px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-05-27"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-05-28"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-05-29"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-05-30"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-05-31"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-06-01"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-06-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-05-27"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-27&quot;,&quot;type&quot;:&quot;day&quot;}">27</a></td><td class="fc-day-top fc-mon fc-future" data-date="2018-05-28"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-28&quot;,&quot;type&quot;:&quot;day&quot;}">28</a></td><td class="fc-day-top fc-tue fc-future" data-date="2018-05-29"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-29&quot;,&quot;type&quot;:&quot;day&quot;}">29</a></td><td class="fc-day-top fc-wed fc-future" data-date="2018-05-30"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-30&quot;,&quot;type&quot;:&quot;day&quot;}">30</a></td><td class="fc-day-top fc-thu fc-future" data-date="2018-05-31"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-05-31&quot;,&quot;type&quot;:&quot;day&quot;}">31</a></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-06-01"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-01&quot;,&quot;type&quot;:&quot;day&quot;}">1</a></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-06-02"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-02&quot;,&quot;type&quot;:&quot;day&quot;}">2</a></td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 110px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-06-03"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-06-04"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-06-05"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-06-06"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-06-07"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-06-08"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-06-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2018-06-03"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-03&quot;,&quot;type&quot;:&quot;day&quot;}">3</a></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2018-06-04"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-04&quot;,&quot;type&quot;:&quot;day&quot;}">4</a></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2018-06-05"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-05&quot;,&quot;type&quot;:&quot;day&quot;}">5</a></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2018-06-06"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-06&quot;,&quot;type&quot;:&quot;day&quot;}">6</a></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-06-07"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-07&quot;,&quot;type&quot;:&quot;day&quot;}">7</a></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-06-08"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-08&quot;,&quot;type&quot;:&quot;day&quot;}">8</a></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-06-09"><a class="fc-day-number" data-goto="{&quot;date&quot;:&quot;2018-06-09&quot;,&quot;type&quot;:&quot;day&quot;}">9</a></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div>
          </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div>
</div>
@endsection

@section('scripts')
  <script>
  $(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
  //while(reload==false){
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'hoy',
        month: 'mes',
        week: 'semana',
        day: 'dia'
      },

      events: { url:"cargaEventos"},

      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!

      drop: function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        allDay=true;
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

        // render the event on the calendar
        //$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
        //Guardamos el evento creado en base de datos
        var title=copiedEventObject.title;
        var start=copiedEventObject.start.format("YYYY-MM-DD HH:mm");
        var back=copiedEventObject.backgroundColor;

        crsfToken = document.getElementsByName("_token")[0].value;
        $.ajax({
             url: 'guardaEventos',
             data: 'title='+ title+'&start='+ start+'&allday='+allDay+'&background='+back,
             type: "POST",
             headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
              success: function(events) {
                console.log('Evento creado');      
                $('#calendar').fullCalendar('refetchEvents' );
              },
              error: function(json){
                console.log("Error al crear evento");
              }        
        });        
      },

      eventResize: function(event) {
          var start = event.start.format("YYYY-MM-DD HH:mm");
          var back=event.backgroundColor;
          var allDay=event.allDay;
          if(event.end){
            var end = event.end.format("YYYY-MM-DD HH:mm");
          }else{var end="NULL";
          }
          crsfToken = document.getElementsByName("_token")[0].value;
            $.ajax({
              url: 'actualizaEventos',
              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id+'&background='+back+'&allday='+allDay,
              type: "POST",
              headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
                success: function(json) {
                  console.log("Updated Successfully");
                },
                error: function(json){
                  console.log("Error al actualizar evento");
                }
            });
      },
      eventDrop: function(event, delta) {
        var start = event.start.format("YYYY-MM-DD HH:mm");
        if(event.end){
          var end = event.end.format("YYYY-MM-DD HH:mm");
        }else{var end="NULL";
        }
        var back=event.backgroundColor;
        var allDay=event.allDay;
        crsfToken = document.getElementsByName("_token")[0].value;

          $.ajax({  
            url: 'actualizaEventos',
            data: 'title='+ event.title+'&start='+ start +'&end='+ end+'&id='+ event.id+'&background='+back+'&allday='+allDay ,           
            type: "POST",
            headers: {
              "X-CSRF-TOKEN": crsfToken
            },
            success: function(json) {
              console.log("Updated Successfully eventdrop");
            },
            error: function(json){
              console.log("Error al actualizar eventdrop");
            }
          });
      },
      eventClick: function (event, jsEvent, view) {
        crsfToken = document.getElementsByName("_token")[0].value;
        var con=confirm("Esta seguro que desea eliminar el evento");
        if(con){
            $.ajax({
               url: 'eliminaEvento',
               data: 'id=' + event.id,
               headers: {
                  "X-CSRF-TOKEN": crsfToken
                },
               type: "POST",
               success: function () {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    console.log("Evento eliminado");
                }
            });
        }else{
           console.log("Cancelado");
        }
      },

      eventMouseover: function( event, jsEvent, view ) { 
        var start = (event.start.format("HH:mm"));
        var back=event.backgroundColor;
        if(event.end){
            var end = event.end.format("HH:mm");
        }else{var end="No definido";
        }
        if(event.allDay){
            var allDay = "Si";
        }else{var allDay="No";
        }
        var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center>'+'Todo el dia: '+allDay+'<br>'+ 'Inicio: '+start+'<br>'+ 'Fin: '+ end +'</div>';
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });            
      },

      eventMouseout: function(calEvent, jsEvent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },

      dayClick: function(date, jsEvent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      }
    });

    /* AGREGANDO EVENTOS AL PANEL */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
  });
</script>

@endsection
