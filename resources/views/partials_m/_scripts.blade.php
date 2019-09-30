<!-- Patrimonial -->
<script src="/js/admin/create.js"></script>
<!-- jQuery 3 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!-- jQuery 3 -->
<script src="/adminlte/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" async defer></script>

<!-- Full calendar-->
<!-- <script src="/plugins/lib/jquery.slimscroll.min.js"></script> -->
<!-- <script src="/plugins/lib/jquery-ui.min.js"></script> -->

<!-- <script src="/plugins/lib/jquery.min.js"></script>
<script src="/plugins/lib/moment.min.js"></script>
<script src="/plugins/fullcalendar.js"></script> -->
<!--Datepicker Calendar-->
<script src='/plugins/lib/jquery.min.js'></script>
<script src='/plugins/lib/moment.min.js'></script>
<script src='/plugins/fullcalendar.js'></script>
 


<!--  <script>
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
  </script> -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!--   <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->
<!--   <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script> -->
  <!--select date-->
<!--   <script type="text/javascript">
    $(function() {
          $( "#datepicker" ).datepicker( "option", "dateFormat", 'd MM, y');
    });
  </script> -->
  <script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });

  </script>


<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>   -->
<!--   <script type="text/javascript">

    $('.timepicker').datetimepicker({

        format: 'HH:mm:ss'

    }); 

</script>   -->
<!--datepicker-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

 <script type="text/javascript">
    $('.date').datepicker({  
       format: 'yyyy-mm-dd',
       endDate: '+0d',
       autoclose: true
     });  
</script>
<!--cambio idioma-->
<script type="text/javascript">
  // ----------------- DEFINICIÓN DE IDIOMA ----------------------
// Recurso original:
// http://reviblog.net/2014/01/07/jquery-ui-datepicker-poner-el-calendario-en-espanol-euskera-o-cualquier-otro-idioma/


// ----------------- CREACIÓN DE DATEPICKER DE PRUEBA----------------------
$(function() {
    $("#nuestrodatepicker").datepicker();
});


// ----------------- DEFINICIÓN DE FORMATO ----------------------
// Recurso original:
// http://www.backtheweb.com/jquery/como-dar-formato-a-la-fecha-del-datepicker-de-jquery/
$(function() {
    $('#nuestrodatepicker').datepicker('option', {dateFormat: 'dd/mm/yy'});
});
</script>
<!--herytache agent-->
  
