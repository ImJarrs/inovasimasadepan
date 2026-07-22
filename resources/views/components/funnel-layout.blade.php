<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>IMD | {{ $title }}</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/title-icon.png') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
	
	<link rel="stylesheet" href="{{ asset('assets/css/funnel.css') }}">
</head>
<body class="overflow-x-hidden">
	<header class="bg-black shadow py-4 text-white text-has-style">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col col-md-2 col-xs-12"><a href="#"><img src="{{ asset('assets/img/funnel/header-logo.png') }}" alt="" height="64px" width="128px"></a></div>
				<div class="col col-md-6 col-xs-12"><h2 class="fw-bold text-center text-uppercase">{{ $title }}</h2></div>
				<div class="col col-md-4 col-xs-12">
					<div class="row">
					    <div class="col-md-6 col-xs-12 mb-3">
    						<a href="https://wa.me/+6281806338869" class="btn-has-text">
    						    @if ( $lang == 'id')
    							<div class="d-flex align-items-center btn-has-white-style"><p class="flex-fill my-auto text-black text-uppercase">Hubungi Kami</p></div>
    							@elseif ( $lang == 'en')
    							<div class="d-flex align-items-center btn-has-white-style"><p class="flex-fill my-auto text-black text-uppercase">Contact Us</p></div>
    							@endif
    						</a>
					    </div>
					    <div class="col-md-6 col-xs-12 mb-3">
    						@if ( $lang == 'id')
    						<a href="{{ route('funnel.card', [$lang = 'en']) }}" class="btn-has-text">
    							<div class="d-flex align-items-center btn-has-white-style"><p class="flex-fill my-auto text-black text-uppercase">EN</p></div>
    						</a>
    						@elseif ( $lang == 'en')
    						<a href="{{ route('funnel.card', [$lang = 'id']) }}" class="btn-has-text">
    							<div class="d-flex align-items-center btn-has-white-style"><p class="flex-fill my-auto text-black text-uppercase">ID</p></div>
    						</a>
    						@endif
					    </div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main class="text-has-style">
			{{ $slot }}
	</main>
	<footer class="bg-black shadow py-4 text-white text-has-style">
		<div class="container">
			<div class="row justify-content-center mx-5 gy-3">
				<div class="col-md-4 col-xs-12"><a href="#"><img src="{{ asset('assets/img/funnel/header-logo.png') }}" alt="" height="64px" width="128px"></a></div>
				<div class="col-md-4 col-xs-12">
					<p><b>Address</b><br/><br/>Jl. Sawo VIII Blok SV no. 3, Bekasi<br/>West Java 17131 - Indonesia</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<p><b>Contact</b></p>
					<ul style="list-style-type: none; padding-left: 0px;">
						<li style="white-space: pre;">Phone	: +62 8180 6338 869</li>
						<li style="white-space: pre;">		: +62 8212 2787 878</li>
						<li style="white-space: pre;">Email	: sales@inovasimasadepan.com</li>
					</ul>
				</div>
			</div>
			<div class="row justify-content-center text-center">
				<div class="col"><p>© 2025 INOVASI MASA DEPAN, PT</p></div>
			</div>
		</div>
	</footer>
	  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	  <script>
	    AOS.init();
	  </script>
</body>
</html>
