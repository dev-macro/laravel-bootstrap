<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.bunny.net"
			rel="preconnect">
		<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
			rel="stylesheet" />

		<!-- Styles -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])

	</head>

	<body>
		<main class="main-06">
			<!-- header start  -->
			<div class="header header-06">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-4">
							<a class="logo"
								href="#">
								<img src="{{ Vite::asset('resources/img/logo.png') }}"
									alt="" /></a>
						</div>
						<div class="col-md-8">
							<div class="header-right text-right">
								<p class="wow fadeInLeft">Say hello!</p>
								<a class="wow fadeInRight"
									href="#"
									onclick="sendMailto('app.dev@macro-trend.com')">
									app.dev@macro-trend.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header end  -->
			<!-- ========================= main-wrapper start ========================= -->
			<div class="main-wrapper demo-06">
				<div class="hero-area">
					<div class="container">
						<div class="row">
							<div class="col-xl-8">
								<div class="heading">
									<h1 class="wow fadeInUp text-white"
										data-wow-delay=".2s">
										We Are <br />
										Coming Soon
									</h1>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4">
								<p class="wow fadeInLeft"
									data-wow-delay=".4s">
									We're strong believers that the best solutions come from
									gathering new insights and pushing conventional boundaries.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ========================= main-wrapper end ========================= -->
			<!-- footer start  -->
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="copyright wow fadeInLeft"
								data-wow-delay=".2s">
								<p>
									Part of
									<a href="https://macro-trend.com"
										target="_blank"
										rel="nofollow">Macro Trend Technology</a>
								</p>
							</div>
						</div>
						<div class="col-md-5">
							<div class="credit wow fadeInRight"
								data-wow-delay=".4s">
								<p>
									Developed by
									<a href="#"
										rel="nofollow"
										onClick="sendMailto('agung.aprian@macro-trend.com')">Agung Trisutaji Aprian</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer end  -->
		</main>
		<!-- ========================= main end ========================= -->

		<!-- ========================= JS here ========================= -->
		<script src="{{ Vite::asset('resources/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<script src="{{ Vite::asset('resources/js/vendor/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ Vite::asset('resources/js/popper.min.js') }}"></script>
		<script src="{{ Vite::asset('resources/js/bootstrap-4.5.0.min.js') }}"></script>
		<script src="{{ Vite::asset('resources/js/countdown.js') }}"></script>
		<script src="{{ Vite::asset('resources/js/wow.min.js') }}"></script>
		{{-- <script src="{{ Vite::asset('resources/js/main.js') }}"></script> --}}

		<script>
			function sendMailto(email) {
				const body = `Hello there!,
                `;

				// Membuka aplikasi email dengan mailto
				const mailtoLink = `mailto:${email}?subject=Contact Form Submission&body=${encodeURIComponent(
          body
        )}`;
				window.location.href = mailtoLink;

				return false; // Mencegah pengiriman form default
			}
		</script>
	</body>

</html>
