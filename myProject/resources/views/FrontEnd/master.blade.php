<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset ('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset ('assets/css/icomoon.css')}}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{asset ('assets/css/ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset ('assets/css/magnific-popup.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset ('assets/css/flexslider.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset ('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset ('assets/css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset ('assets/fonts/flaticon/font/flaticon.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
	</head>
	<body>		
	   
	   <!-- Header section Begin -->
	   @yield('header')
	  <!-- Header section End -->
	    
	   <!-- Image slider section Begin -->
	    @include('FrontEnd.slider')
		<!-- Image slider section Begin -->
		
		<!-- intro section Begin -->
		@yield('intro')
		<!-- intro section End -->

		<!-- Product section Begin -->
		@include('FrontEnd.products')
		<!-- Product section End -->
		
		<!-- Footer section Begin -->
        @yield('footer')
		<!-- Footer section End -->


	<!-- jQuery -->
	<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
   <!-- popper -->
   <script src="{{asset ('assets/js/popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{asset ('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset ('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset ('assets/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset ('assets/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup --> 
	<script src="{{asset ('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset ('assets/js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{asset ('assets/js/bootstrap-datepicker.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset ('assets/js/stellar.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset ('assets/js/main.js')}}"></script>

	</body>
</html>

