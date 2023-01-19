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

<div class="content-wrap">
<div class="container">

<div class="row justify-content-between align-items-center">
    <div class="col-auto mb-5">
        <h3 class="fw-medium h1">All <span data-animate="svg-underline-animated" class="svg-underline nocolor"><span>Products</span></span></h3>
    </div>

    <div class="col-auto mb-5 d-flex">
        <div class="dropdown sortbuttons ms-2">
            <select name="category" class="form-select button button-border m-0 button-dark border-width-1 border-default nott ls0 fw-normal h-bg-color">
                <option value="" selected="selected">Category</option>
				<option>Men</option>
                <option>Women</option>
                <option>Kids</option>

            </select>
        </div>

        <div class="dropdown sortbuttons ms-2">
            <select class="form-select button button-border m-0 button-dark border-width-1 border-default nott ls0 fw-normal h-bg-color">
                <option>Sort by default</option>
                <option>Price (max to min)</option>
                <option>Price (min to max)</option>
            </select>
        </div>

    </div>
</div>

<div id="shop" class="shop row gutter-30 col-mb-30 mt-3">
@foreach($product as $items)
	<div class="container">		
	<div class="row row-pb-md">
      <div class="col-lg-3 mb-4 text-center">
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
	</div>

@endforeach
<div class="clear"></div>
{!!$product->withQueryString()->links('pagination::bootstrap-5')!!}



