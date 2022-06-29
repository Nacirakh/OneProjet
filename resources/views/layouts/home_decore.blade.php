<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="/home"><img src="images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Register</a></li>
					</ul>
				</div>
				
			
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
         

    		

                <!-- Left Side Of Navbar -->
        
                <ul class="nav navbar-nav">
                	@if (Auth::check())
                                            @if (Auth:: user()->role == 3)
                
                <li><a class="color" class="navbar-brand" href="{{ url('/home') }}">Accueil</a></li>
                   <li><a href="{{ url('/profil') }}">Mon Profil</a></li>
                    <li><a href="{{ url('/item') }}">Commande</a></li>
                    <li><a href="{{ url('/commandelibre') }}">Commande Libre</a></li>

                 @endif

                                          


                                            @endif

                    @if (Auth::check())
                                            @if (Auth:: user()->role == 1)
                                         <li><a class="color" href="{{ url('/home') }}">Accueil</a></li>

                                           <li><a class="color" href="{{ url('/profill') }}">Mon Profil</a></li>

                                            <li><a class="color" href="{{ url('/control') }}">Client</a></li>
                                               <li><a class="color" href="{{ url('/itemA') }}">Plat</a></li>
                                             <li><a class="color" href="{{ url('/tableA') }}">Table</a></li>
                                             <li><a class="color" href="{{ url('/test') }}">Commande</a></li>
                                            <li><a class="color" href="{{ url('/FreecommandeA') }}">Commande Libre</a></li>
                                            @endif

                                          


                                            @endif


                </ul>

                
            </div>
</nav>
</div>

			<div class="col-sm-2 search-right">
				<!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li  class="dropdown">
                            <a  style="color:black" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a  href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
				<ul class="heart">
				<li>
				<a href="/home" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>

					</ul>

					
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Shopin</p>
				</div>				
			</div></div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Accueil</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Accueil</h2>
	</div>
</div>


<!--content-->
		<div class="content">
			<div class="container">
				<div class="content-top">
					<div class="col-md-6 col-md">
						<div class="col-1">
						 <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">déjeuner</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Dans l'après-midi</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
						</div>
						<div class="col-2">
							<span>Basma</span>
							<h2><a href="/info">Bienvenue</a></h2>
							<p>
Basma vous souhaite la bienvenue,
Pour les repas délicieux<br>
Basma Le restaurant sert à offrir un confort à ses clients .Avec leur fournir les meilleurs plats

							</p>
							<a href="/info" class="buy-now">Suivi</a>
							
						
						</div>
					</div>
					<div class="col-md-6 col-md1">
						<div class="col-3">
						 <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pi1.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Petit Déjeuner</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Le Matin</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
						</div>

						<div class="col-3">
						 <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pi2.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Dîner</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Soirée</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
						</div>

					
					</div>
					<div class="clearfix"></div>
				</div>
				
			
			</div>
			
		</div>
	<!--//content-->

			
		
	<!--//content-->
		

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
    @yield('content')

 
</body>
</html>