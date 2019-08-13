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
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
   <script type="text/javascript">
  $(function() {
          $( "#datepicker" ).datepicker( "option", "dateFormat", 'd MM, y');
  });
  </script>
  <script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  
  <script type="text/javascript">

    $('.timepicker').datetimepicker({

        format: 'HH:mm:ss'

    }); 

</script>  

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

 <script type="text/javascript">
    $('.date').datepicker({  
       format: 'yyyy-mm-dd'
     });  
</script>
