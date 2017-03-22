<!DOCTYPE html>

<?php
	include('menu.php');
?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="Clase de Industria">
  <style type="text/css">
    #map{
      background-color: black;
      position: absolute;
      height: 70%;
      width: 60%;
      top: 20%;
      left: 30%;
      
    }
  </style>

  <?php echo css(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

	<title>Pipeline</title>
</head>
<body class="sticky-header left-side-collapsed">

<section>
<?php echo menu(); ?>
<!-- main content start-->
<div class="main-content" >

	<?php echo Encabezado(); ?>

	<!-- page heading start-->
       <div id="map">
       
        </div>
      <!-- page heading end-->

	<div class="wrapper">
	</div>	

</div>

</section>

<?php echo scripts(); ?>

<script type="text/javascript">


function initMap(){
  var map;
  // var latitude = Position.coords.latitude;
  // var longitude = Position.coords.longitude;
  map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(14.084966326103753,-87.8787687),
    zoom: 8,
  });

}

    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdO05dt9nbJ_oWArtS7BplHRgw9SAbxv8&callback=initMap"></script>
</body>
</html>