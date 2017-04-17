<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>ipeline</title>
<link rel="icon" href="quienesomos/img/phpThumb_generated_thumbnailico.png" type="image/vnd.microsoft.icon" WIDTH=75 HEIGTH=70>
<link href="quienesomos/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="quienesomos/css/style.css" rel="stylesheet" type="text/css">

<link href="quienesomos/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="quienesomos/css/responsive.css" rel="stylesheet" type="text/css">
<link href="quienesomos/css/animate.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="quienesomos/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="quienesomos/js/bootstrap.js"></script>
<script type="text/javascript" src="quienesomos/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="quienesomos/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="quienesomos/js/jquery.isotope.js"></script>
<script type="text/javascript" src="quienesomos/js/wow.js"></script>
<script type="text/javascript" src="quienesomos/js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});

	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83136136-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo">
			   
			</div>

			<div class="logo2"><span class="letraColor">Pipe</span><span class="letraColor2">Line</span></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#top_content">Inicio</a></li>
          <li><a href="#service">Servicios</a></li>
          <li><a href="#Características">Características</a></li>
   		  <li><a href="#Contáctanos">Contáctanos</a></li>
        <li><a href="index.php">Volver a Pipeline</a></li>
        </ul>
        <ul class="">
          <li><a href="#top_content">Inicio</a></li>
          <li><a href="#service">Servicios</a></li>
          <li><a href="#Características">Características</a></li>
          <!--<li><a href="#client_outer">Clients</a></li>-->
					<li><a href="#Contáctanos">Contáctanos</a></li>
					<!--<li><a href="http://app.Pharmapp.com">Login</a></li>-->
        <li><a href="index.php">Volver a Pipeline</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section-->

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner" style="background-size: cover;">
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="col-lg-6 col-sm-8 col-lg-offset-3 col-sm-offset-2">
            <div class="top_left_cont flipInY wow animated">
							<h3>Bienvenidos a:</h3>
							<h2>Pipeline</h2>
              <p> Reduce un 30% de los gastos </p>
              <a href="#service" class="learn_more2">Aprende más</a> </div>
          </div>
          <div class="col-lg-3 col-sm-2"> </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--Top_content-->

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Servicios</h2>
    <div class="service_area">
      <div class="row">
        <div class="col-md-4 padding-bottom-spacing">
          <div class="service_block">
            <div class="service_icon icon2 delay-03s animated wow  zoomIn"> <span><i class="fa-bullhorn"></i></span> </div>
            <h3 class="animated fadeInUp wow">Brinda</h3>
            <p class="animated fadeInDown wow">Sugerencias y soluciones a los usuarios a partir de proyectos generados.</p>
          </div>
        </div>
        <div class="col-md-4 padding-bottom-spacing">
          <div class="service_block">
            <div class="service_icon  delay-03s animated wow zoomIn"> <span><i class="fa-signal"></i></span> </div>
            <h3 class="animated fadeInUp wow">Reduce tiempo </h3>
            <p class="animated fadeInDown wow">En los cálculos Financieros referentes al manejo de proyectos para poder optimizar la toma de decisiones.</p>
          </div>
        </div>
        <div class="col-md-4 padding-bottom-spacing">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-compress"></i></span> </div>
            <h3 class="animated fadeInUp wow">Permite</h3>
            <p class="animated fadeInDown wow">A los usuarios gestionar diversos números de proyectos de diferentes y rubros.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->

<section id="Características"><!--main-section-start-->
<div class="top_cont_latest">
  <div class="container">
    <h2>Misión Y Visión</h2>
    <div class="work_section">
      <div class="row">
        <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-doc"></i> </div>
            <div class="service-list-col2">
              <h3>Misión</h3>
              <p>Ser un software que permita una adecuada gestión de los diversos proyectos que en él se desarrollan. A su vez mantenerse como una herramienta práctica y funcional en el mercado global.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-user"></i> </div>
            <div class="service-list-col2">
              <h3>Visión</h3>
              <p>Pipeline se convertirá en un referente de solución en la materia. Funcionando como una herramienta indispensable para administradores, gerentes y pequeños empresarios en evaluación de viabilidad y presupuestos de proyectos en menor o mayor escala.</p>
            </div>
          </div>
       
          <div class="work_bottom"> <span>¿Deseas formar parte de nuestros clientes satisfechos?</span> <a href="#Contáctanos" class="Contáctanos_btn">Contáctanos</a> </div>
        </div>
        <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
      </div>
    </div>
  </div>
  <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
  </div>
</section>


<footer class="footer_section" id="Contáctanos">
  <div class="container">
    <section class="main-section Contáctanos" id="Contáctanos">
      <div class="Contáctanos_section">
        <h2>Contáctanos</h2>
        <div class="row">
          <div class="col-sm-6 padding-bottom-spacing">
            <div class="Contáctanos_block">
              <div class="Contáctanos_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
              <span> (+504) 9785-1733 </span> </div>
          </div>
          <div class="col-sm-6 padding-bottom-spacing">
            <div class="Contáctanos_block">
              <div class="Contáctanos_block_icon icon3 rollIn animated wow"><span><i class="fa-paper-plane"></i></span></div>
							<span> <a href="facebook.com/GabrielSosa"> Pipeline@gmail.com</a> </span> </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span>Copyright © 2016 | <a href="http://www.Pipeline.com/">Pipeline</a> </span> </div>
    <!--
        All links in the footer should remain intact.
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Butterfly
    -->
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>
<script type="text/javascript">
	$(window).load(function(){

		$('a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');

			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">


  jQuery(document).ready(function($){
// Portfolio Isotope
	var container = $('#portfolio-wrap');


	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();
	  	return false;
	});


		function splitColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumns() {
			var winWidth = $(window).width(),
				columnNumb = splitColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

			container.find('.portfolio-item').each(function () {
				$(this).css( {
					width : postWidth + 'px'
				});
			});
		}

		function setProjects() {
			setColumns();
			container.isotope('reLayout');
		}

		container.imagesLoaded(function () {
			setColumns();
		});


		$(window).bind('resize', function () {
			setProjects();
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>
