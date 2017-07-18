
<?php echo '<h1> 404 </h1>';
exit();
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sleeper Hit : Home</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage fixed full-screen backgrounds." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fixed,fullscreen,backgrounds,full-screen" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="examples/examples.css" />
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="backtobackfont/font.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.theme.green.css">
	<link rel="stylesheet" type="text/css" href="examples/owlcarousel/assets/owl.theme.green.min.css">
	<link rel="icon" href="favicon.png" type="favicon.png" />
	

	<!-- <link rel="stylesheet" type="text/css" href="http://www.agence-belle-epoque.fr/styles/main.css"> -->
	<style>
		@charset UTF-8;
		@import url(//hello.myfonts.net/count/2aa247);
		@import url(//hello.myfonts.net/count/2c3acd);
		h1{
			font-size: 5em;
			font-family: arial,helvetica;
			color: #fff;
			margin:0;
			padding:0;
		}
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 99999999;
			background: url('loader.gif') center no-repeat #fff;
		}
		

		.section{
			text-align:center;
		}

		#section0,
		#section1,
		#section2,
		#section3,
		#section4{
			background-size: cover;
			background-attachment: fixed;
		}

		#section0{
			background-image: url(examples/imgs/banner/people-eiffel-tower-lights-night.png);
			background-position: center center;
			background-size: cover;
			background-attachment: fixed;
		}

		#section0 h2{
			position: absolute;
			width: 100%;
			font-size: 2.5em;
			color: #fff;
		}

		#section0 div{
			top: 25%;
			transform: translateY(-50%);
			position: relative;
		}

		#section1 h1, #section2 h1, #section3 h1, #section4 h1,#section5 h1{
			transform: translateY(-50%);
			font-size: 2em;
		}

		#section1 h1, #section4 h1{
			color: #000;
		}

		#section2 h1, #section3 h1,#section5 h1{
			color: #fff;
			padding: 4% 3% 0;
			font-family: 'Back to Black Demo' !important;
		}
		#section5 h1{
			color: #000;
			padding: 3% 3% 0;
			font-family: 'Back to Black Demo' !important;
		}

		#section2 i {
			color: #D2B797;
		}

		#section2 h3 {
			font-size: 1.5em;
			margin: 2%;
			border-bottom: #fff solid 1px;
			line-height: 2em;
			color: #D2B797;
			font-family: 'Miso' !important;
		}

		#section2 p {
			transform: translateY(-50%);
			color: #FFF;
			font-size: 0.85em;
			font-family: 'Sentinel A','Sentinel B' !important;
			line-height: 1.4em;
			letter-spacing: .09em;
			margin: 5% 0;
		}

		#section3 p,#section5 p{
			transform: translateY(-10%);
			margin: 3% 5%;
			color: #8C8783;
			font-size: 1em;
			padding-top: 15%;
			font-family: 'Sentinel A','Sentinel B' !important;
			line-height: 1.5em;
			letter-spacing: .06em;
			font-style: normal;
			font-weight: 400;
		}
		#section1 p{
			transform: translateY(-50%);
			margin: 3% 5%;
			color: #8C8783;
			font-size: 1em;
			padding-top: 5%;
			font-family: 'Sentinel A','Sentinel B' !important;
			line-height: 1.5em;
			letter-spacing: .06em;
			font-style: normal;
			font-weight: 400;
		}

		#section2{
			background-image: url(examples/imgs/banner/Sleeper-Hit-21.png);
			padding: 6% 0 0 0;
			background-position: center center;
			background-size: cover;
			background-attachment: fixed;
		}

		#section3{
			background-image: url(examples/imgs/banner/Sleeper-Hit-22.png);
			background-position: center center;
			background-size: cover;
			background-attachment: fixed;
		}

		/*#section4{
			background-image: url(https://images.pexels.com/photos/296878/pexels-photo-296878.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb);
		    background-position: center center;
		    background-size: cover;
		    background-attachment: fixed;
		}*/

		#section3 h3 ,#section5 h3{
			font-size: 1.3em;
			font-family: 'Miso' !important;
		}

		.page_content{
			padding: 10%;
		}
		.page_content_slider{
			padding: 10%;
			padding-top:3%;
		}

		#slide1{
			background-image: url(imgs/bg2.jpg);
			padding: 6% 0 0 0;
		}

		#slide2{
			background-image: url(imgs/bg5.jpg);
			padding: 6% 0 0 0;
		}

		#infoMenu li a {
			color: #fff;
		}

		#mySidenav{
			z-index: 999;
			background-color: #F4F2EE;
			text-align: center;
			color: #D2B797;
		}

		@font-face {
			font-family: '';
			src: ;
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'Miso';
			src: url('fonts/Miso.eot');
			src: url('fonts/Miso.woff2') format('woff2'),
			url('fonts/Miso.woff') format('woff'),
			url('fonts/Miso.ttf') format('truetype'),
			url('fonts/Miso.svg#Miso') format('svg'),
			url('fonts/Miso.eot?#iefix') format('embedded-opentype');
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'BrandonPrinted-One';
			src: url('brandonprinted/BrandonPrinted-One.eot');
			src: url('brandonprinted/BrandonPrinted-One.woff2') format('woff2'),
			url('brandonprinted/BrandonPrinted-One.woff') format('woff'),
			url('brandonprinted/BrandonPrinted-One.ttf') format('truetype'),
			url('brandonprinted/BrandonPrinted-One.svg#BrandonPrinted-One') format('svg'),
			url('brandonprinted/BrandonPrinted-One.eot?#iefix') format('embedded-opentype');
			font-weight: normal;
			font-style: normal;
		}

		h1, h2, h3, h4, h5, h6{
			font-family: 'BrandonPrinted-One', sans-serif !important;
		}

		a{
			font-family: 'Miso' !important;
		}

		#logo_text {
			font-size: 3.3em !important;
		}

		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			/*padding-top: 20%;*/
			transition: 0.5s;
		}
		.anchor_link {
			padding: 5%;
			text-decoration: none;
			color: #818181;
			display: block;
			transition: 0.3s
		}

		.anchor_link:hover, .offcanvas a:focus{
			color: #D2B797;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main {
			transition: margin-left .5s;
			padding: 20px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.anchor_link {font-size: 18px;}
		}

		@media screen and (max-height: 720px) {

		}
		.logo-div
		{
			padding-top: 33%;
		}

		.menu-bars{
			position: fixed;
			padding: 3% 5%;
			z-index: 99;
			cursor: pointer;
			color: #D2B797;
			font-size: 5px;
		}

		.close-icon{
			color: #D2B797;
			font-size: 1.5em;
		}

		.bar {
			height: 2px;
			width: 25%;
			background: #D2B797;
			position: absolute;
			display: block;
		}

		.cross > .vertical-bar{
			-webkit-transform: rotate(-45deg);
			transform: rotate(-45deg);
		}

		.cross > .horizontal-bar{
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
		}

		.cross{
			display: inline-block;
			vertical-align: middle;
			position: fixed;
			top: 0;
			left: 0;
		}

		.logo{
			width: 100%;
			text-align: center;
		}

		#first_anchor, #second_anchor, #test_anchor, #test2_anchor{
			font-family: 'BrandonPrinted-One', sans-serif !important;
			color: #FFF;
			font-size: 1.5em;
			position: absolute;
		}

		#test_anchor span{
			height: 160px;
			position: absolute;
			left: 0;
			top: 0;
			transform-origin: bottom center;
		}

		#test2_anchor span {
			height: 160px;
			position: absolute;
			left: 0;
			top: 0px;
			transform-origin: bottom center;
		}

		#test2_anchor p {
			transform: rotate(180deg);
			font-size: 1em; 
		}

		#test3_anchor {
			font-family: 'Miso' !important;
			color: #FFF;
			font-size: 1em;
			position: absolute;
		}

		#test3_anchor span {
			height: 100px;
			position: absolute;
			width: 20px;
			left: 0;
			top: 0px;
			transform-origin: bottom center;
		}

		.chara1 { transform: rotate(-60deg); }
		.chara2 { transform: rotate(-52deg); }
		.chara3 { transform: rotate(-44deg); }
		.chara4 { transform: rotate(-36deg); }
		.chara5 { transform: rotate(-28deg); }
		.chara6 { transform: rotate(-20deg); }
		.chara7 { transform: rotate(-12deg); }
		.chara8 { transform: rotate(-4deg); }
		.chara9 { transform: rotate(4deg); }
		.chara10 { transform: rotate(12deg); }
		.chara11 { transform: rotate(20deg); }
		.chara12 { transform: rotate(28deg); }
		.chara13 { transform: rotate(36deg); }
		.chara14 { transform: rotate(44deg); }
		.chara15 { transform: rotate(52deg); }
		.chara16 { transform: rotate(60deg); }

		.chara0111 { transform: rotate(85deg); }
		.chara0112 { transform: rotate(275deg); }

		.char10 { transform: rotate(248deg); }
		.char11 { transform: rotate(240deg); }
		.char12 { transform: rotate(232deg); }
		.char13 { transform: rotate(224deg); }
		.char14 { transform: rotate(216deg); }
		.char15 { transform: rotate(208deg); }
		.char16 { transform: rotate(200deg); }
		.char17 { transform: rotate(192deg); }
		.char18 { transform: rotate(184deg); }
		.char19 { transform: rotate(176deg); }
		.char110 { transform: rotate(168deg); }
		.char111 { transform: rotate(160deg); }
		.char112 { transform: rotate(152deg); }
		.char113 { transform: rotate(144deg); }
		.char114 { transform: rotate(136deg); }
		.char115 { transform: rotate(128deg); }
		.char116 { transform: rotate(120deg); }
		.char117 { transform: rotate(112deg); }

		.about101 { transform: rotate(0deg); }
		.about10 { transform: rotate(18deg); }
		.about11 { transform: rotate(36deg); }
		.about12 { transform: rotate(54deg); }
		.about13 { transform: rotate(72deg); }
		.about14 { transform: rotate(90deg); }
		.about15 { transform: rotate(108deg); }
		.about16 { transform: rotate(126deg); }
		.about17 { transform: rotate(144deg); }
		.about18 { transform: rotate(162deg); }
		.about19 { transform: rotate(180deg); }
		.about20 { transform: rotate(198deg); }
		.about21 { transform: rotate(216deg); }
		.about22 { transform: rotate(234deg); }
		.about23 { transform: rotate(252deg); }
		.about24 { transform: rotate(270deg); }
		.about25 { transform: rotate(288deg); }
		.about26 { transform: rotate(306deg); }
		.about27 { transform: rotate(324deg); }
		.about28 { transform: rotate(342deg); }

		.typed-cursor{
			display: none;
		}

		.col30{
			
		}

		.event_slider_item_container {
			padding: 5%; 
			background: rgba(0,0,0,0.6); 
			border-radius: 10px;
			min-height: 450px;
		}
		.box{
			min-height: 420px!important;
		}

		.event_slider_item_container h3, .event_slider_item_container p {
			color: #fff;
			margin: 5% 0;
		}

		.event_slider_item_container p {
			color: #D2B797 !important;
		}

		.owl-nav{
			display: none !important;
		}

		#fp-nav ul li a span, .fp-slidesNav ul li a span{
			background: #D2B797;
		}

		.why-us-container{
			padding: 5%;
		}
		.fp-scroller{
		overflow:hidden;
		}

		.contact_icons {
			margin: 5%;
			text-align: center;
		}
		.contact_icons_nav {
			margin: 5%;
			text-align: center;
		}


		.contact_icons i {
			margin: 1%;
			color: #D2B797;
		}
		.contact_icons_nav i{
			margin: 3%;
			color: #444;
		}

		.contact_icons i:hover {
			color: #8C8783;
			cursor: pointer;
		}

		.col50 {
			width: 50%;
			float: left;
		}

		.email, .contact_no {
			padding: 0;
			font-family: 'Miso' !important;
			font-size: 1.2em;
		}

		.email a, .col50 p, .col100 p, .col100 span {
			text-decoration: none;
			color: #8C8783;
		}

		.col100{
			width: 100%;
		}

		.col100 p {
			font-family: 'Miso' !important;
			padding-top: 10%;
		}

		.col100 span {
			font-family: 'Sentinel A','Sentinel B' !important;
		}

		.booking_form, .enroll_form {
			display: none;
			height: 0;
			width: 100%;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #F4F2EE;
			color: #444;
			text-align: center;
			overflow-x: hidden;
			padding-top: 5%;
			transition: 0.5s;
			z-index: 999999;
		}

		.booking_form h2, .enroll_form h2 {
			color: #444;
			font-size: 2em;
		}

		.booking_form p, .enroll_form p {
			color: #444;
			font-family: 'Miso';
			font-size: 1.3em;
			padding: 2%;
		}

		.booking_form input, .booking_form textarea, .booking_form select, .enroll_form input, .enroll_form textarea, .enroll_form select {
			border: none;
			border-bottom: #444 solid 1px;
			font-family: 'Miso';
			width: 42%;
			float: left;
			background-color: transparent;
			padding-left: 1%;
			height: 50px;
			margin: 2%;
			font-size: 1.3em;
		}

		.booking_form input:focus, .booking_form textarea:focus, .booking_form select:focus, .enroll_form input:focus, .enroll_form textarea:focus, .enroll_form select:focus {
			border: none;
			outline: none;
			border-bottom: #D2B797 solid 1px;
		}

		.booking_form textarea, .enroll_form textarea {
			width: 88% !important;
		}

		.form_container label {
			font-family: 'Miso';
			background: #D2B797;
			color: #fff;
			width: 20%;
			float: left;
			margin: 2%;
			padding: 1% 3%;
		}

		.form_container label:hover {
			background: #8C8783;
			font-weight: bold;
		}

		.booking_form div, .enroll_form div {
			padding: 5% 10%;
		}
		.about-link{
			text-decoration: underline;
			margin: 4%;
		}
		#nav_links{
			padding-top: 20%;
		}

		@media only screen and (max-width: 500px) {
	    	#test_anchor span{
			height: 150px;
			position: absolute;
			left: -5px;
			top: 0;
			transform-origin: bottom center;
			}

		#test2_anchor span {
			height: 150px;
			position: absolute;
			left: -5px;
			top: 0;
			transform-origin: bottom center;
			}

		.logo-div {
    		padding-top: 10%;
		}
		#nav_links{
			padding-top: 10%;
		}

		.event_slider_item_container {
			padding: 5%; 
			background: rgba(0,0,0,0.6); 
			border-radius: 10px;
			min-height: 369px
		}
		.page_content_slider{
			padding: 10%;
			padding-top:10%;
		}

}
		.owl-dots
		{
			margin-top: 10px;
		}
		/*@media only screen and (orientation:landscape) and (max-width: 720px) {
        #warning-message { display:block; }
    	}
    	@media only screen and (orientation:portrait) and (max-width: 720px){
        #warning-message { display:none; }
    	}*/
    	
		

	</style>
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
		<![endif]-->
		<!-- AIzaSyDKT4TpmmM_cFS7UxMXddYzk1trpe42qaQ -->

		
	</head>
	<body>
	<div class="se-pre-con"></div>
		<div id="fullpage">
			<div id="booking_form" class="booking_form">
				<a href="javascript:void(0)" class="menu-bars cross cross1 anchor_link" style="display: none;">
					<span class="bar vertical-bar"></span>
					<span class="bar horizontal-bar"></span>
				</a>
				<h2>Book an Artist</h2>
				<p>CHANGING THE WAY YOU BOOK ARTISTS</p>
				<div class="form_container">
				<form id="bookingForm" method="POST">
					<input type="text" name="name" id="book_name" placeholder="Your Name" required="required">
					<input type="email" name="email" id="book_email" placeholder="Your Email Id" required="required">
					<input type="number" name="mob" id="book_mob" placeholder="Your Mob. No." required="required">
					<select name="category" required="required">
						<option value="">Occasion</option>
						<option value="Wedding Performances">Wedding Performances</option>
						<option value="Emcee for Events">Emcee for Events</option>
						<option value="NGO Events">NGO Events</option>
						<option value="Fashion Events">Fashion Events</option>
						<option value="Music Shows">Music Shows</option>
						<option value="Ribbon Cutting Events">Ribbon Cutting Events</option>
						<option value="College Events">College Events</option>
					</select>
					<textarea name="msg" id="book_msg" placeholder="Enter Your Message" required="required"></textarea>
					<input type="submit" value="Book Artist" style="font-family: 'Miso';background: #D2B797;color: #fff;float: left;margin: 2%;padding: 1% 3%;">
					</form>
				</div>
			</div>
			<div id="enroll_form" class="enroll_form">
				<a href="javascript:void(0)" class="menu-bars cross cross2 anchor_link" style="display: none;">
					<span class="bar vertical-bar"></span>
					<span class="bar horizontal-bar"></span>
				</a>
				<h2>Register as artist</h2>
				<p>CHANGING THE WAY YOU BOOK ARTISTS</p>
				<div class="form_container">
				<form id="insertForm" method="POST">
					<input type="text" name="name" id="enroll_name" placeholder="Your Name" required="required">
					<input type="email" name="email" id="enroll_email" placeholder="Your Email Id" required="required">
					<input type="number" name="mob" id="enroll_mob" placeholder="Your Mob. No." required="required">
					<select required="required" name="category">
						<option value="">Artist Category</option>
						<option value="Bollywood Actors">Bollywood Actors</option>
						<option value="Television Actors">Television Actors</option>
						<option value="Models">Models</option>
						<option value="Singers">Singers</option>
						<option value="Performers">Performers</option>
						<option value="Stand-up Comics">Stand-up Comics</option>
						<option value="YouTube Stars">YouTube Stars</option>
						<option value="Sportsmen">Sportsmen</option>
					</select>
					<textarea name="msg" id="enroll_msg" placeholder="Enter Your Message" value=""></textarea>
					<input type="submit" value="REGISTER" style="font-family: 'Miso';background: #D2B797;color: #fff;float: left;margin: 2%;padding: 1% 3%;">
					</form>
				</div>
			</div>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="menu-bars cross anchor_link" style="display: none;" onclick="closeNav()">
					<span class="bar vertical-bar"></span>
					<span class="bar horizontal-bar"></span>
				</a>
				<div class="logo-div">
					<a href="index.php" class="logo" style="text-decoration: none">
						<h2 id="logo_text" style="font-family: 'Back to Black Demo' !important; font-size: 4em;"></h2>
						<p style="font-size: 1.4em; color: #000;margin-top: 10px;">{ Book anybody famous }</p>
					</a>
				</div>
				<div id="nav_links">
					<a class="anchor_link" href="#about-us">About Us</a>
					<a class="anchor_link" href="#why-us">Why Us</a>
					<a class="anchor_link" href="#categories">Categories of Artists</a>
					<a class="anchor_link" href="#events">Events</a>
					<a class="anchor_link" href="#contact-us">Contact Us</a>
				</div>
				<div class="contact_icons_nav" style="position: absolute;bottom:0px;width: 100%;right: 0;color: black!important;margin: 0 0 5% 0;">
					<center>
						<a href="https://www.facebook.com/Sleeperhit-1875701036036659/?ref=bookmarks" target="_blank"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://twitter.com/sleeperhit_in" target="_blank"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/sleeperhit.in/" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
					</center>
				</div>
			</div>
			<div class="menu-bars" onclick="openNav()">
				<span class="bar vertical-bar"></span><br>
				<span class="bar middle-bar"></span><br>
				<span class="bar horizontal-bar"></span><br>
			</div>
			<div class="section" id="section0">
				<div>
				<center>
					<a href="#" id="test_anchor" style="display: none">
						<span class="chara0111"><i class="fa fa-star-o" aria-hidden="true"></i></span>
						<span class="chara1">B</span>
						<span class="chara2">O</span>
						<span class="chara3">O</span>
						<span class="chara4">K</span>
						<span class="chara5">&nbsp;</span>
						<span class="chara6">A</span>
						<span class="chara7">&nbsp;</span>
						<span class="chara8">C</span>
						<span class="chara9">E</span>
						<span class="chara10">L</span>
						<span class="chara11">E</span>
						<span class="chara12">B</span>
						<span class="chara13">R</span>
						<span class="chara14">I</span>
						<span class="chara15">T</span>
						<span class="chara16">Y</span>
						<span class="chara0112"><i class="fa fa-star-o" aria-hidden="true"></i></span>
					</a>
					<h2 id="home_text1" style="font-family: 'Back to Black Demo' !important; font-size: 2em; margin: 90px auto"></h2>

					<h2 id="home_text" style="font-family: 'Back to Black Demo' !important; font-size: 3.5em; margin: 150px auto"></h2>
					<a href="#" id="test2_anchor" style="display: none">
						<span class="char10"><p>R</p></span>
						<span class="char11"><p>E</p></span>
						<span class="char12"><p>G</p></span>
						<span class="char13"><p>I</p></span>
						<span class="char14"><p>S</p></span>
						<span class="char15"><p>T</p></span>
						<span class="char16"><p>E</p></span>
						<span class="char17"><p>R</p></span>
						<span class="char18"><p>&nbsp;</p></span>
						<span class="char19"><p>A</p></span>
						<span class="char110"><p>S</p></span>
						<span class="char111"><p>&nbsp;</p></span>
						<span class="char112"><p>A</p></span>
						<span class="char113"><p>R</p></span>
						<span class="char114"><p>T</p></span>
						<span class="char115"><p>I</p></span>
						<span class="char116"><p>S</p></span>
						<span class="char117"><p>T</p></span>
					</a>
					</center>
				</div>
			</div>
			<div class="section" id="section1">
				<div class="page_content">
					<h1>About</h1>
					<div data-scrollable="true" style="visibility: inherit; transform: matrix(1, 0, 0, 1, 0, 0); animation: hideshow 10s ease infinite;" class="visible">
						<svg class="title-ornement animated" width="252" height="25" id="svg">
							<polygon points="9,5 5,1 1,5 5,9" fill="#d2b798" class="filled-polygon"></polygon>
							<polygon points="244,5 248,1 252,5 248,9" fill="#d2b798" class="filled-polygon"></polygon>
							<line x1="5" x2="252" y1="5" y2="5" stroke="#d2b798" style="stroke-width: 1;" class="line01"></line>
							<polyline points="114,13.164 19.157,13.163 21.407,9.892 19.157,6.392" stroke="#d2b798" fill="none" class="line02"></polyline>
							<polyline points="138,13.164 237,13.163 234,9.892 237,6.392" stroke="#d2b798" fill="none" class="line03"></polyline>
							<polygon points="114,13 118,9 122,13 118,17 " stroke="#d2b798" fill="none" class="polygon01"></polygon>
							<polygon points="122,13 126,9 130,13 126,17 " stroke="#d2b798" fill="none" class="polygon01"></polygon>
							<polygon points="130,13 134,9 138,13 134,17 " stroke="#d2b798" fill="none" class="polygon01"></polygon>
						</svg>
					</div>
					<p class="about-content">
						Sleeper hit is India’s first-ever “celebrity booking agency” that specializes in the right artist for all your events. We at Sleeper hit represent some of India’s finest and most sought-after celebrities who have carved a niche for themselves in their respective spheres. We are looking to glam up your events and add the quintessential star power to all your occasions. 
					</p>
					<p class="about-content">Make your event a blazing success by marking it with presence of an apt celebrity to appeal to your target audience. Sleeper hit will help you choose the artist who best suits your requirement and connect you with them.</p>
					<p><a href="#" class="about-link" id="bookCel">Book A Celebrity</a><a href="#" class="about-link" id="Register">Register as Artist</a></p>
				</div>
			</div>
			<div class="section" id="section2">
				<h1 style="padding-top: 12%;">Why Us</h1>
				<div class="page_content" style="padding-bottom: 0px!important;padding-top: 0px;">
					<div class="owl-carousel owl-theme" id="owl_why">
						<div class="item">
							<div class="">
								<i class="fa fa-2x fa-handshake-o" aria-hidden="true"></i>
								<h3>ONE STOP SHOP</h3><br>
								<p>Sleeper Hit represents some of the finest celebrities in Indian entertainment industry ranging from Silver screen to Television.</p>
							</div>
							<div class="">
								<i class="fa fa-2x fa-exchange" aria-hidden="true"></i>
								<h3>QUICK TURN AROUND</h3><br>
								<p>We will be in touch with you within 24-48 hours of your query to get you connected with the best pick for your event and if you already have a celeb in mind, VOILA!</p>
							</div>
						</div>
						<div class="item">
							<div class="">
								<i class="fa fa-2x fa-user-times" aria-hidden="true"></i>
								<h3>NO MIDDLE MAN</h3><br>
								<p>We have a direct connect with the Artists. There is "No Middle Man". We work directly with you to provide a hassle free experience for your events.</p>
							</div>
							<div class="">
								<i class="fa fa-2x fa-money" aria-hidden="true"></i>
								<h3>TAILORED TO YOUR BUDGET</h3><br>
								<p>Sleeper Hit presents you with multiple artists to choose from if you have a budget but not any specific artist in mind to grace your event.</p>
							</div>
						</div>
						<div class="item">
							<div class="">
								<i class="fa fa-2x fa-unlock-alt" aria-hidden="true"></i>
								<h3>SECURED PLATFORM</h3><br>
								<p>Once you Book, an artist is legally committed to perform for event. We have proper policies in place to protect you against artist cancellations.</p>
							</div>
							<div class="">
								<i class="fa fa-2x fa-inr" aria-hidden="true"></i>
								<h3>COST EFFECTIVE</h3><br>
								<p>Unlike others, we connect with artists directly thereby ensuring that you get artists at the best price for your event.</p>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="section" id="section5">
				<div class="page_content_slider">
					<h1>Categories of Artists</h1>
					<div class="owl-carousel owl-theme" id="owl_artists" style="margin-top: 30px;">
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Bollywood Actors</h3>
								<img class="img_event_slider" src="examples/imgs/bollywood.jpg">
								<p>Add the quintessential power to your event and make it dazzle.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Television Actors</h3>
								<img class="img_event_slider" src="examples/imgs/tv.jpeg">
								<p>They are stars of every household and yet so relatable. Make your event a grand success by striking a chord with every age group</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Models</h3>
								<img class="img_event_slider" src="examples/imgs/models.jpeg">
								<p>They walk the talk and glam comes easy to them. Add an extra star to your events.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Singers</h3>
								<img class="img_event_slider" src="examples/imgs/singers.jpeg">
								<p>Can there be anything better than a melodious voice to add flavour to your evening. </p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Stand-up Comics</h3>
								<img class="img_event_slider" src="examples/imgs/stand.jpeg">
								<p>Laughter is the best medicine; book the funny bones  to entertain your audience to the fullest</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>YouTube Stars</h3>
								<img class="img_event_slider" src="examples/imgs/youtube.jpeg">
								<p>with internet being a rage, there's nothing stopping them from becoming a household name</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container">
								<h3>Sportsmen</h3>
								<img class="img_event_slider" src="examples/imgs/sports.jpg">
								<p>They mesmerize you with their performance on field and their dynamism off field is infectious</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section3">
				<div class="page_content_slider">
					<h1>Events</h1>
					<div class="owl-carousel owl-theme" id="owl_events">
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/wedding.jpeg">
								<h3>Wedding Performances</h3>
								<p>Make your weddings memorable with your favorite celebrity performing.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/emcee.jpg">
								<h3>Emcee for events</h3>
								<p>Make your event class apart by booking the best emcee.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/ngo.jpeg">
								<h3>NGO events</h3>
								<p>Make your noble cause reach wider.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/fasion.jpeg">
								<h3>Fashion events & Appearances</h3>
								<p>Glam up your event and have an appropriate artist represent your brand.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/music.jpeg">
								<h3>Music Shows</h3>
								<p>Let your audience be mesmerized with the performance.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/ribbon.jpeg">
								<h3>Ribbon Cutting events</h3>
								<p>Make your new venture a success already.</p>
							</div>
						</div>
						<div class="item">
							<div class="event_slider_item_container box">
								<img class="img_event_slider" src="examples/imgs/clg.jpeg">
								<h3>Celebs for College Events</h3>
								<p>We are aware of the cut throat competition you undergo to make your college fest a hit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section" id="section4">
				<div class="page_content">
					<h1>Contact</h1>
					<div class="contact_icons">
						<a href="https://www.facebook.com/Sleeperhit-1875701036036659/?ref=bookmarks" target="_blank"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://twitter.com/sleeperhit_in" target="_blank"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/sleeperhit.in/" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
					</div>
					<div class="contact_animate col-md-4">
						<p class="email">Email Us</p>
						<span class="email"><a href="mailto:info@sleeperhit.in">info@sleeperhit.in</a></span>
					</div>
					<div class="contact_animate col-md-4">
						<p class="email">Contact Us</p>
						<span class="email">(+91) 740 0191 006</span>
					</div>
					<div class="contact_animate col-md-4">
						<p class="email">Address</p>
						<span class="email">Bunglow No. 160 Aram Nagar - Part 2, J.P. Road Versova, Andheri (W) Mumbai Maharashtra - 400061</span>
					</div>
				</div>
				<div id="googlemap" style="width:100%;height:400px;"></div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script>
		$("#insertForm").submit(function(e)
		 {
		 	$(".se-pre-con").fadeIn();
		 	e.preventDefault(); // avoid to execute the actual submit of the form.
		    var url = "insert.php"; // the script where you handle the form input.
		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $("#insertForm").serialize(), // serializes the form's elements.
		           success: function(data) {
		               alert(data); 
		               if(data=="Successfully Registered")
		               {
		               	$(".cross2").click();
		               	$('#insertForm')[0].reset();
		               }
		               $(".se-pre-con").fadeOut();
		           }
		         });
		});
		$("#bookingForm").submit(function(e)
		 {
		 	$(".se-pre-con").fadeIn();
		 	e.preventDefault(); // avoid to execute the actual submit of the form.
		    var url = "booking.php"; // the script where you handle the form input.
		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $("#bookingForm").serialize(), // serializes the form's elements.
		           success: function(data) {
		               alert(data); 
		               if(data=="Successfully Submited")
		               {
		               	$(".cross1").click();
		               	$('#bookingForm')[0].reset();
		               }
		               $(".se-pre-con").fadeOut();
		           }
		         });
		});


				function myMap() {
						var mapProp= {
						    center:new google.maps.LatLng(19.1136,72.8697),
						    zoom:10,
						    styles: [
									  {
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#ebe3cd"
									      }
									    ]
									  },
									  {
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#523735"
									      }
									    ]
									  },
									  {
									    "elementType": "labels.text.stroke",
									    "stylers": [
									      {
									        "color": "#f5f1e6"
									      }
									    ]
									  },
									  {
									    "featureType": "administrative",
									    "elementType": "geometry.stroke",
									    "stylers": [
									      {
									        "color": "#c9b2a6"
									      }
									    ]
									  },
									  {
									    "featureType": "administrative.land_parcel",
									    "elementType": "geometry.stroke",
									    "stylers": [
									      {
									        "color": "#dcd2be"
									      }
									    ]
									  },
									  {
									    "featureType": "administrative.land_parcel",
									    "elementType": "labels",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "administrative.land_parcel",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#ae9e90"
									      }
									    ]
									  },
									  {
									    "featureType": "landscape.natural",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#dfd2ae"
									      }
									    ]
									  },
									  {
									    "featureType": "poi",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#dfd2ae"
									      }
									    ]
									  },
									  {
									    "featureType": "poi",
									    "elementType": "labels.text",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "poi",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#93817c"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.business",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.park",
									    "elementType": "geometry.fill",
									    "stylers": [
									      {
									        "color": "#a5b076"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.park",
									    "elementType": "labels.text",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "poi.park",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#447530"
									      }
									    ]
									  },
									  {
									    "featureType": "road",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#f5f1e6"
									      }
									    ]
									  },
									  {
									    "featureType": "road.arterial",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#fdfcf8"
									      }
									    ]
									  },
									  {
									    "featureType": "road.arterial",
									    "elementType": "labels",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#f8c967"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway",
									    "elementType": "geometry.stroke",
									    "stylers": [
									      {
									        "color": "#e9bc62"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway",
									    "elementType": "labels",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway.controlled_access",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#e98d58"
									      }
									    ]
									  },
									  {
									    "featureType": "road.highway.controlled_access",
									    "elementType": "geometry.stroke",
									    "stylers": [
									      {
									        "color": "#db8555"
									      }
									    ]
									  },
									  {
									    "featureType": "road.local",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "road.local",
									    "elementType": "labels",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "road.local",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#806b63"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.line",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#dfd2ae"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.line",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#8f7d77"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.line",
									    "elementType": "labels.text.stroke",
									    "stylers": [
									      {
									        "color": "#ebe3cd"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.station",
									    "elementType": "geometry",
									    "stylers": [
									      {
									        "color": "#dfd2ae"
									      }
									    ]
									  },
									  {
									    "featureType": "transit.station.airport",
									    "elementType": "labels.text",
									    "stylers": [
									      {
									        "visibility": "off"
									      }
									    ]
									  },
									  {
									    "featureType": "water",
									    "elementType": "geometry.fill",
									    "stylers": [
									      {
									        "color": "#b9d3c2"
									      }
									    ]
									  },
									  {
									    "featureType": "water",
									    "elementType": "labels.text.fill",
									    "stylers": [
									      {
									        "color": "#92998d"
									      }
									    ]
									  }
									]
						};
						var map=new google.maps.Map(document.getElementById("googlemap"),mapProp);
						}
					</script>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyEbVl22oN2kZJjoZTQPYKltF4DoI-dao&callback=myMap" async defer></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyEbVl22oN2kZJjoZTQPYKltF4DoI-dao&callback=myMap"></script> -->
		<script type="text/javascript" src="vendors/scrolloverflow.js"></script>
		<script type="text/javascript" src="jquery.fullPage.js"></script>
		<script type="text/javascript" src="examples/examples.js"></script>
		<script type="text/javascript" src="http://blockprintcompany.com/js/typed.js"></script>
		<script type="text/javascript" src="examples/jquery.lettering.js"></script>
		<script type="text/javascript" src="examples/owlcarousel/owl.carousel.js"></script>
		<script type="text/javascript" src="examples/owlcarousel/owl.carousel.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(window).on('load', function(){ $(".se-pre-con").fadeOut();});
				$('#fullpage').fullpage({
					verticalCentered: false,
					css3:false,
					anchors: ['firstPage', 'about-us', 'why-us','categories', 'events', 'contact-us'],
					navigation: false,
					navigationPosition: 'right',
					scrollBar:true,
					navigationTooltips: ['Home', 'About Us', 'Why Us','Categories of Artists', 'Events', 'Contact Us']
				});
			});

		</script>
		<script type="text/javascript">
			function openNav() {
				if ($(window).width() > 800) {
					document.getElementById("mySidenav").style.width = "340px";
				} else {
					document.getElementById("mySidenav").style.width = "100%";
				}
				setTimeout(function(){
					$(".cross").fadeIn();
					$("#logo_text").typed({
						strings: ["Sleeperhit..."],
						typeSpeed: 0,
					});
				}, 500);
			}

			function closeNav() {
				$(".cross").fadeOut();
				setTimeout(function(){
					document.getElementById("mySidenav").style.width = "0";
				}, 500);
				
			}


			$(".anchor_link").click(function(){
				closeNav();
			})

			$(".cross1").click(function(){
				document.getElementById("booking_form").style.height = "0";
				$("#booking_form").fadeOut();
				$(this).hide();
			})

			$("#test_anchor").click(function(){
				$("#booking_form").fadeIn();
				document.getElementById("booking_form").style.height = "100%";
				$(".cross1").show();
			})

			$(".cross2").click(function(){
				document.getElementById("enroll_form").style.height = "0";
				$("#enroll_form").fadeOut();
				$(this).hide();
			})

			$("#test2_anchor").click(function(){
				$("#enroll_form").fadeIn();
				document.getElementById("enroll_form").style.height = "100%";
				$(".cross2").show();
			})
			$("#Register").click(function(){
				$("#enroll_form").fadeIn();
				document.getElementById("enroll_form").style.height = "100%";
				$(".cross2").show();
			})
			$("#bookCel").click(function(){
				$("#booking_form").fadeIn();
				document.getElementById("booking_form").style.height = "100%";
				$(".cross1").show();
			})
		</script>
		<script type="text/javascript">
			$(function(){
				$("#home_text1").typed({
					strings: ["We are"],
					typeSpeed: 100,
					callback: function() {
						$("#home_text").typed({
							strings: ["Sleeperhit"],
							typeSpeed: 80,
							callback: function() {
								$("#test_anchor").fadeIn(1000);
								$("#test2_anchor").fadeIn(1100);
							},
						});
					},
				})
			});
		</script>
		<script type="text/javascript">
			$('#owl_events').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:3
					}
				}
			})

			$('#owl_artists').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:3
					}
				}
			})

			$('#owl_why').owlCarousel({
				loop:false,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:3
					}
				}

			})
		</script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
		<script type="text/javascript">
			window.sr = ScrollReveal({
				reset : true,
			});
			sr.reveal('.about-content');
			sr.reveal('.why_us_animate');
			sr.reveal('.contact_animate');
			sr.reveal('.owl-theme');
		</script>
	</body>
	</html>