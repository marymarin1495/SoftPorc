<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SOFTPORC</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="vista/css/main.css" />

	<link rel="icon" href="views/images/icono.jpg">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="vista/css/bootstrap.min.css">
 
	<link rel="stylesheet" href="vista/css/font-awesome.min.css">
	<link rel="stylesheet" href="vista/css/style.css">
	<link rel="stylesheet" href="vista/css/fonts.css">
	<link rel="stylesheet" href="vista/css/cssFancybox/jquery.fancybox.css">
	
  <link rel="stylesheet" type="text/css" href="vista/css/propio.css">
      
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, links, icons" />

	<link href="vista/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="vista/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="vista/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="vista/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="vista/css/widgets.css" rel="stylesheet">
  
  <link href="vista/css/style-responsive.css" rel="stylesheet" />
  <link href="vista/css/xcharts.min.css" rel=" stylesheet">
  <link href="vista/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	  <link href="vista/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="vista/css/bootstrap-theme.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="vista/lib/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
  <!--external css-->
  <!-- font icon -->
  <link href="vista/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="vista/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="vista/css/style.css" rel="stylesheet">
  <link href="vista/css/style-responsive.css" rel="stylesheet" />
	   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="vista/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="vista/css/select.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="vista/lib/css/alertify.min.css">
<link rel="stylesheet" type="text/css" href="vista/lib/css/themes/bootstrap.min.css">

<!-- -->
</head>

<body class="<?php if(!isset($_GET["action"])||$_GET["action"]=="login") {echo 'login-img3-body';}?>" id="aca">  
 <?php  if (!isset($_GET["action"])||$_GET["action"]!="login") {
  

 if (!isset($_SESSION["nombre"])){
     echo '<script language="javascript">
window.location.href="index.php?action=login";
</script>';
 } 
} ?>
  


		<?php 
         
         $hola=new TemplateController();
         $hola->enlacesPaginasController();
		 
		 ?>

  

















<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<script src="vista/lib/autosize/autosize.min.js"></script>

	
	<script src="vista/js/jquery.fancybox.js"></script>
	<script src="vista/js/animatescroll.js"></script>
	<script src="vista/js/jquery.scrollUp.js"></script>

  <script src="vista/js/jquery-ui-1.10.4.min.js"></script>
  

  <!-- bootstrap -->
 <script src="vista/js/jquery.js"></script>
 
  <!--custome script for all page-->
  
  <script src="vista/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="vista/js/jquery.scrollTo.min.js"></script>
  <script src="vista/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="vista/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="vista/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="vista/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="vista/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="vista/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="vista/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="vista/js/calendar-custom.js"></script>
    <script src="vista/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="vista/js/jquery.customSelect.min.js"></script>
    <script src="vista/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->

 
    <!-- custom script for this page--><script src="vista/js/jquery.dataTables.min.js"></script>
<script src="vista/js/jquery.dataTables.bootstrap4.min.js"></script>
<script src="vista/js/dataTables.select.min.js"></script>
<script src="vista/lib/alertify.min.js"></script>
    
    <script src="vista/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="vista/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="vista/js/xcharts.min.js"></script>
    <script src="vista/js/jquery.autosize.min.js"></script>
    <script src="vista/js/jquery.placeholder.min.js"></script>
    <script src="vista/js/gdp-data.js"></script>
    <script src="vista/js/morris.min.js"></script>
    <script src="vista/js/sparklines.js"></script>
    <script src="vista/js/charts.js"></script>
    <script src="vista/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="vista/dist/Chart.bundle.min.js"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>

 
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

<script src="vista/js/scripts.js"></script>
<script src="vista/js/propio.js"></script>
<script src="vista/jsPropio/reproductores.js"></script>
<script src="vista/jsPropio/porcino.js"></script>
  <script src="vista/jsPropio/reproductor2.js"></script>
  <script src="vista/jsPropio/reporte2.js"></script>
</body>
</html>