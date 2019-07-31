<!-- jQuery 3 -->
<script src="/adminlte/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- Full calendar-->
<script src="/plugins/lib/jquery.slimscroll.min.js"></script>
<script src="/plugins/lib/jquery-ui.min.js"></script>
{{--
<script src="/plugins/lib/jquery.min.js"></script>
<script src="/plugins/lib/moment.min.js"></script>
<script src="/plugins/fullcalendar.js"></script>

	--}}
<script src='/plugins/lib/jquery.min.js'></script>
<script src='/plugins/lib/moment.min.js'></script>
<script src='/plugins/fullcalendar.js'></script>
 <script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      defaultDate: '2019-07-26',
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