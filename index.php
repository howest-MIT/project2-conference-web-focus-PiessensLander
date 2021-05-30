<!DOCTYPE html>
<html lang="en">
<?php include "src/helper/header.php" ?>

<body>
	<div class="bg"></div>

	<div class="container">
		<div class="row py-4">
			<div class="c-nav d-flex justify-content-between align-items-center">
				<img src="img/logo_fw.png" alt="Multi-Mania Logo" class="c-nav__logo">
				<ul class="c-nav__items d-flex justify-content-center">
					<li class="c-nav__link px-3"><a href="#" class="active">Home</a></li>
					<li class="c-nav__link px-3"><a href="#">Program</a></li>
					<li class="c-nav__link px-3"><a href="#">Partners</a></li>
					<li class="c-nav__link px-3"><a href="#">Contact</a></li>
				</ul>
				<a href="#" class="c-nav__cta c-btn c-btn--outline py-2 px-5">Buy tickets</a>
			</div>
		</div>
		<div class="row c-header">
			<h1 class="text-white text-center">Welcome to Multi-Mania!</h1>
			<p class="text-white text-center">Belgium's biggest IT conference</p>
		</div>
	</div>

	<div class="owl-carousel c-carousel">

		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
		<div class="c-carousel__item">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcNQid_kIRW2Loj-xw5hoOmGuHxjRcY6sNOW15b2GQViLf2UJN5YnTT1_iiMcEIOOB-I8&usqp=CAU" alt="" class=" c-img">
		</div>
	</div>
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