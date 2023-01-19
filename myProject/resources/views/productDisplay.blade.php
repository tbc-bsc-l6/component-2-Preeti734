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
	<div class="text-center"><h1>Products</h1></div>
@foreach($product as $items)
	<div class="container">
		
	<div class="row">
      <div class="col-4">
        <!-- <div class="product-entry border"> -->
          <a href="#" class="prod-img">
            <img src="productImages/{{$items ['ProductImage']}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
          </a>
          <div class="desc">
            <h2><a href="#">{{$items ['ProductName']}}</a></h2>
            <span class="price">${{$items ['ProductPrice']}}</span>
          </div>
        </div>
      </div>
	  </div>
	</div>
@endforeach
<x-app-layout>
{{$product->links()}}
</x-app-layout>