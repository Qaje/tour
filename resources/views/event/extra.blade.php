<!--
@extends('main_m')

@section('title', '| Sitios Truristicos')

@section('content')

  <section class="content-header">
        <h1>
          Calendar
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Calendar</li>
        </ol>
  </section>
  <section class="content">
        <div id="calendar" class="fc fc-unthemed fc-ltr">
          
        </div>
  </section>
@endsection
-->
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='/plugins/fullcalendar.min.css'>
<link rel='stylesheet' href='/plugins/fullcalendar.print.min.css' media='print'>
<!--
<script src='/plugins/lib/jquery.slimscroll.min.js'></script>
<script src='/plugins/lib/jquery-ui.min.js'></script>
  -->
<script src='/plugins/lib/jquery.min.js'></script>
<script src='/plugins/lib/moment.min.js'></script>
<script src='/plugins/fullcalendar.js'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: '2018-03-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01'
        },
      ]
    });

  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>


