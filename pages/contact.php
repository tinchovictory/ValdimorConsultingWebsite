<!DOCTYPE html>
<html>
    <head>
        <title>Valdimor Consulting</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="../img/fav.png" type="image/x-icon" />
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Fjord+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/contact.css" />
    </head>
    <body>
	<div class="mobileMenu">
	    <div class="head"><a href="">Menu<div class="menu-icon"><i class="icon-reorder"></i></div></a></div>
	    <div class="content">
		<ul id="nav">
		    <a href="../index.html#about" class="menuButton"><li>Quienes Somos</li></a>
		    <a href="../index.html#solutions" class="menuButton"><li>Soluciones</li></a>
		    <a href="../index.html#services" class="menuButton"><li>Servicios</li></a>
		    <a href="../index.html#clients" class="menuButton"><li>Clientes</li></a>
		    <a href="contact.php"><li>Contacto</li></a>
		</ul>
	    </div>
	</div>
	<nav class="active">
	    <a href="../index.html"><div class="logo"></div></a>
	    <div class="container">
		<ul>
		    <a href="../index.html#about" class="menuButton"><li>Quienes Somos</li></a>
		    <a href="../index.html#solutions" class="menuButton"><li>Soluciones</li></a>
		    <a href="../index.html#services" class="menuButton"><li>Servicios</li></a>
		    <a href="../index.html#clients" class="menuButton"><li>Clientes</li></a>
		    <a href="contact.php"><li>Contacto</li></a>
		</ul>
	    </div>
	</nav>
	<div class="site-wrap">
	    <header>
		<div class="back"></div>
		<h1>Contacto</h1>
	    </header>
	    <section class="mainContent">
		<div class="right">
		    <div class="container">
			<div class="info">
			    <p class="company">Valdimor Consulting S.A.</p>
			    <p class="dir">Corrientes 456<br />1er piso of. 16,<br />Buenos Aires</p>
			    <p class="phone">Tel: +54 11 5218-0202</p>
			    <p class="email">Email: info@valdimor.com.ar</p>
			</div>
			<div class="map" id="map"></div>
		    </div>
		</div>
		<div class="left">
		    <div class="container">
			<h2>Contactanos</h2>
			<?php
			    if(@$_GET['i'] == "s"){
		    		echo '<div class="success">Gracias por contactarte con nosotros.</div>';
			    }elseif(@$_GET['i'] == "f"){
				echo '<div class="fail">Lo sentimos, ha ocurrido un error.</div>';
			    }
			?>
			<form action="sendMail.php" method="post" id="contact">
			    <div class="formInput">
				<input type="text" name="name" placeholder="Nombre Completo"  data-validation="required" data-validation-error-msg="Por favor completa tu nombre" />
			    </div>
			    <div class="formInput">
				<input type="text" name="mail" placeholder="Me@email.com" data-validation="email" data-validation-error-msg="Por favor ingres&aacute; un mail valido" />
			    </div>
			    <div class="formInput">
				<input type="text" name="subject" placeholder="Asunto" placeholder="Nombre Completo"  data-validation="required" data-validation-error-msg="Por favor completa el Asunto" />
			    </div>
			    <div class="formInput">
				<textarea name="text" placeholder="Mensaje..." data-validation="required" data-validation-error-msg="Por favor ingres&aacute; tu mensaje"></textarea>
			    </div>
			    <button>Enviar</button>
			</form>
		    </div>
		</div>
	    </section>
	    <div class="author">Created by: Martin Victory</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="../form-validator/jquery.form-validator.min.js"></script>
	<script>
	    $(document).ready(function(){
		var lastScrollTop = 0;
		$(window).scroll(function(event){
		    var st = $(this).scrollTop();
		    if (st > 60) {
			    $("nav").addClass("menuActive");
			}else{
			    $("nav").removeClass("menuActive");
			}
		   
		   lastScrollTop = st;
		});
		
		//Menu
		$('.mobileMenu .head a').click(function(e) {
		    e.preventDefault();
		});
		$(".mobileMenu .head").click(function(){
		    $(".mobileMenu .content").toggle();
		    $("body").css("overflow-y","visible");
		});
		$(".mobileMenu .content").click(function(){
		    $(".mobileMenu .content").hide();
		});
		$(".site-wrap").click(function(){
		    $(".mobileMenu .content").hide();
		});
		$('.menuButton').click(function(){
		    $('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		    }, 500);
		    $(".mobileMenu .content").hide();
		    return false;
		});
		
		$.validate({
		    form : '#contact'
		});
	    });
	</script>
        <script>
	function initialize() {
	    var myLatlng = new google.maps.LatLng(-34.603296, -58.373230);
	    var mapOptions = {
		zoom: 16,
		scrollwheel: false,
		center: myLatlng
	    }
	    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	    var marker = new google.maps.Marker({
		position: myLatlng,
		map: map
	    });
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    </body>
</html>