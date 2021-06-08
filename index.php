<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
	<div class="bg" style="height: 80vh"></div>

	<div class="container">
		<div class="row py-4">
			<div class="c-nav d-flex justify-content-between align-items-center">
				<img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
				<ul class="c-nav__items d-flex justify-content-center">
					<li class="c-nav__link px-3"><a href="index.php" class="active">Home</a></li>
					<li class="c-nav__link px-3"><a href="schedule.php">Program</a></li>
					<li class="c-nav__link px-3"><a href="speakers.php">Speakers</a></li>
					<li class="c-nav__link px-3"><a href="partners.php">Partners</a></li>
					<li class="c-nav__link px-3"><a href="contact.php">Contact</a></li>
				</ul>
				<a href="bestel.php" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
			</div>
		</div>
		<div class="row c-header">
			<h1 class="text-white text-center">Welcome to Multi-Mania!</h1>
			<p class="text-white text-center">Belgium's biggest IT conference</p>
		</div>
	</div>

	<div class="owl-carousel c-carousel mb-5 d-flex align-items-center">

		<div class="c-carousel__item">
			<img src="img/carousel_1.jpg" alt="Conference" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="img/carousel_2.jpg" alt="Conference" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="img/carousel_3.jpg" alt="Conference" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="img/carousel_4.jpg" alt="Conference" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="img/carousel_5.jpg" alt="Conference" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="img/carousel_6.jpg" alt="Conference" class=" c-img">
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="c-intro d-flex justify-content-between align-items-center">
				<div class="c-intro__halls d-flex flex-column align-items-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="120" height="120" preserveAspectRatio="xMinYMin" class="icon__icon mb-3">
						<path style="fill: #c54893;" d="M18 18V7.132l-8-4.8-8 4.8V18h4v-2.75a4 4 0 1 1 8 0V18h4zm-6 2v-4.75a2 2 0 1 0-4 0V20H2a2 2 0 0 1-2-2V7.132a2 2 0 0 1 .971-1.715l8-4.8a2 2 0 0 1 2.058 0l8 4.8A2 2 0 0 1 20 7.132V18a2 2 0 0 1-2 2h-6z"></path>
					</svg>
					<h4>5 halls</h4>
					<a href="schedule.php" class="text-black">view all</a>
				</div>
				<div class="c-intro__about d-flex flex-column align-items-center justify-content-center">
					<h2 class="mb-4">About Multi-Mania</h2>
					<p class="text-center mb-4">Multi-Mania is for UX researchers, experience designers, interface designers, product owners, service innovators, software developers and business leaders that are defining the way we research, design, and deliver new products and services using operations at scale.
						The conference is now in its 3rd year and has established itself as the preeminent global conference for professionals leading and scaling research, design, development and innovation using ‘operations principles’ in the digital product-service continuum.</p>
					<a href="bestel.php" class="c-intro__btn c-btn c-btn--pink py-2 px-5 w-auto">Buy tickets</a>
				</div>
				<div class="c-intro__speakers d-flex flex-column align-items-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -1.5 24 24" width="120" height="120" preserveAspectRatio="xMinYMin" class="icon__icon mb-3">
						<path style="fill: #c54893;" d="M3.534 11.07a1 1 0 1 1 .733 1.86A3.579 3.579 0 0 0 2 16.26V18a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.647a3.658 3.658 0 0 0-2.356-3.419 1 1 0 1 1 .712-1.868A5.658 5.658 0 0 1 14 16.353V18a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3v-1.74a5.579 5.579 0 0 1 3.534-5.19zM7 1a4 4 0 0 1 4 4v2a4 4 0 1 1-8 0V5a4 4 0 0 1 4-4zm0 2a2 2 0 0 0-2 2v2a2 2 0 1 0 4 0V5a2 2 0 0 0-2-2zm9 17a1 1 0 0 1 0-2h1a1 1 0 0 0 1-1v-1.838a3.387 3.387 0 0 0-2.316-3.213 1 1 0 1 1 .632-1.898A5.387 5.387 0 0 1 20 15.162V17a3 3 0 0 1-3 3h-1zM13 2a1 1 0 0 1 0-2 4 4 0 0 1 4 4v2a4 4 0 0 1-4 4 1 1 0 0 1 0-2 2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path>
					</svg>
					<h4>28 speakers</h4>
					<a href="speakers.php" class="text-black">view all</a>
				</div>
			</div>
		</div>
	</div>

	<div class="c-speakers">
		<div class="container">
			<div class="row justify-content-center">
				<h2 class="text-white text-center mb-4">Some of our speakers</h2>
				<div class="row d-flex mb-5 justify-content-center">
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-3 align-items-stretch">
						<div class="c-card p-4">
							<div class="c-card__header mb-3">
								<h3>Aral Balkan</h3>
							</div>
							<div class="c-card__image mb-3">
								<img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
							</div>
							<div class="c-card__description mb-3 d-flex">
								<!-- Langere tekst: functie in PHP, x-aantal karakters laten zien. Als karakters meer zijn: aanvullen met '...' -->
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda temporibus esse ipsam! Veniam ea reprehenderit amet animi magni fugit odio placeat sapiente facilis quam, autem reiciendis itaque culpa aliquam tempora.</^p>
							</div>
							<div class="c-card__footer d-flex flex-wrap justify-content-between">
								<a class="c-btn c-btn--outline py-2 px-4 w-auto">
									<i class="far fa-heart me-2"></i>Like
								</a>
								<a href="speaker-detail.php" class="c-btn c-btn--pink py-2 px-5 w-auto">
									More info
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="c-card p-4">
							<div class="c-card__header mb-3">
								<h3>Aral Balkan</h3>
							</div>
							<div class="c-card__image mb-3">
								<img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
							</div>
							<div class="c-card__description mb-3">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus odio eligendi velit unde eos praesentium, illo harum placeat eaque voluptatem.</p>
							</div>
							<div class="c-card__footer d-flex flex-wrap justify-content-between">
								<a class="c-btn c-btn--outline py-2 px-4 w-auto">
									<i class="far fa-heart me-2"></i>Like
								</a>
								<a href="speaker-detail.php" class="c-btn c-btn--pink py-2 px-5 w-auto">
									More info
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="c-card p-4">
							<div class="c-card__header mb-3">
								<h3>Aral Balkan</h3>
							</div>
							<div class="c-card__image mb-3">
								<img src="https://www.troyhunt.com/content/images/2016/12/P1220073.jpg" alt="Speaker">
							</div>
							<div class="c-card__description mb-3">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium nihil possimus quo consequuntur ipsam molestias iure libero placeat veritatis. Neque autem unde veritatis tempora reprehenderit eveniet nesciunt fuga maxime? Fugit voluptatum, incidunt modi culpa maxime amet numquam assumenda odio sunt illo asperiores facere aut cupiditate, a quos quaerat dolor!</p>
							</div>
							<div class="c-card__footer d-flex flex-wrap justify-content-between">
								<a class="c-btn c-btn--outline py-2 px-4 w-auto">
									<i class="far fa-heart me-2"></i>Like
								</a>
								<a href="speaker-detail.php" class="c-btn c-btn--pink py-2 px-5 w-auto">
									More info
								</a>
							</div>
						</div>
					</div>
				</div>
				<a href="bestel.php" class="c-btn c-btn--outline py-2 px-5 w-auto">Buy tickets</a>
			</div>

		</div>
	</div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-sm-12 col-lg-8 c-price p-5">
				<h2 class="text-center mb-5">Get your tickets!</h2>
				<div class="row gap-3 d-flex justify-content-center">
					<div class="col-sm-12 col-lg-6 c-price__cat p-3">
						<p class="text-center mb-4">Early Bird</p>
						<ul class="list-unstyled text-center mb-4">
							<li class="mb-2">Early entrance to the venue (9am)</li>
							<li class="mb-2">Exlcusive goodiebag</li>
							<li class="mb-2">Access to all halls</li>
							<li class="mb-2">Access to all talks</li>
							<li class="mb-2">Replay all talks after the event</li>
							<li class="mb-2">Priority access to workshops</li>
						</ul>
						<div class="c-price__prices d-flex justify-content-around mb-4">
							<div class="c-prices__prices--early text-center">
								<p>Early Bird</p>
								<h3>€99</h3>
							</div>
							<div class="c-price__prices--regular text-center">
								<p>Regular price</p>
								<h3>€159</h3>
							</div>
						</div>
						<div class="row d-flex justify-content-center">
							<a href="bestel.php" class="c-btn c-btn--pink py-2 px-5 w-auto">Buy tickets</a>
						</div>
					</div>
					<div class="col">
						<div class="row flex-column gap-3">
							<div class="col c-price__cat p-3">
								<p class="text-center text-center">Groups</p>
								<p class="c-price__caption text-center mb-4">min. of 6 tickets</p>
								<div class="c-price__prices d-flex justify-content-around mb-4">
									<div class="c-prices__prices--early text-center">
										<p>Early Bird</p>
										<h3>€89</h3>
									</div>
									<div class="c-price__prices--regular text-center">
										<p>Regular price</p>
										<h3>€149</h3>
									</div>
								</div>
								<div class="row d-flex justify-content-center">
									<a href="bestel.php" class="c-btn c-btn--pink py-2 px-5 w-auto">Buy tickets</a>
								</div>
							</div>
							<div class="col c-price__cat p-3">
								<p class="text-center mb-4">Students</p>
								<div class="c-price__prices d-flex justify-content-around mb-4">
									<div class="c-prices__prices--early text-center">
										<p>Early Bird</p>
										<h3>€49</h3>
									</div>
									<div class="c-price__prices--regular text-center">
										<p>Regular price</p>
										<h3>€109</h3>
									</div>
								</div>
								<div class="row d-flex justify-content-center">
									<a href="bestel.php" class="c-btn c-btn--pink py-2 px-5 w-auto">Buy tickets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer style="padding-top: 10rem;margin-top: -7rem;">
		<div class="container">
			<div class="row">
				<p class="text-center text-white">&copy; Multi-Mania, 2021</p>
				<br>
				<p class="text-center text-white">Images copyright: Frederik Jaques</p>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".owl-carousel").owlCarousel({
				center: true,
				items: 3,
				loop: true,
				margin: 0,
				autoplay: true,
				autoplayTimeout: 5000,
				nav: true,
				dots: false,
			});
		});
	</script>
</body>

</html>