<?php
    include('path.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Belwet Mind Clinic</title>
	<?php include(ROOT_PATH . "/includes/head.php"); ?>
</head>

<body>
	<div class="content-wrapper">
		<!-- header section starts here -->
		<?php 
            $page = "index";
            include(ROOT_PATH . "/includes/header.php"); 
        ?>
		<!-- header section ends here -->

		<!-- Hero section starts here -->
		<div class="hero-slider-wrapper bg-dark">
			<div class="hero-slider owl-carousel">
				<div class="owl-slide d-flex align-items-center bg-overlay bg-overlay-400"
					style="background-image: url(img/hero-background.jpg);">
					<div class="container">
						<div class="row">
							<div
								class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start">
								<h2 class="display-1 fs-56 mb-4 text-white animated-caption"
									data-anim="animate__slideInDown" data-anim-delay="500">Your shelter of love, healing
									& comfort!</h2>
								<p class="lead fs-23 lh-sm mb-7 text-white animated-caption"
									data-anim="animate__slideInRight" data-anim-delay="1000">We are always committed to
									giving you the best in an exceptional and soothing atmosphere.</p>
								<div class="animated-caption" data-anim="animate__slideInUp" data-anim-delay="1500">
									<a href="contact-us" class="btn btn-md btn-white "> Contact us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero section ends here  -->

		<!-- about us section starts here -->
		<section class="wrapper bg-light lower-end">
			<div class="container py-10 py-md-10">
				<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
					<div class="col-lg-6 position-relative order-lg-2">
						<div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
							style="top: 3rem; left: 5.5rem"></div>
						<div class="overlap-grid">
							<div class="item">
								<figure class="rounded shadow">
									<img src="img/teamlead.png" height="100%" alt="">
								</figure>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="display-4 mb-3">From our Teamlead</h2>
						<p class="lead fs-lg">At Belwet mind clinic, we are always
							committed to giving you the best in an exceptional and
							soothing atmosphere.
						</p>
						<p class="mb-6">Belwet mind clinic is a Psychological clinic
							and mental health organisation and our goal is to enhance
							the healing process of emotions and the cognitive system
							of clients using therapeutic, clinical and curative measures.
							We professionally monitor your healing progress and ensure
							relapse is prevented.
						</p>
						<p class="mb-6">We understand and know that help rendered
							should be void of stigma, intelligent, practical, affordable,
							comfortable, non-judgemental and guilt-free, with an option
							for clients to request help anonymously.
						</p>
						<p class="mb-6">Belwet mind clinic has the motto: 'your shelter
							of love, healing and comfort' we want you to know that when
							you are convinced that you need help ranging from therapy
							to counselling to coaching and mentorship, we are here to help
							you become your best self as we journey through together.
						</p>
						<p class="mb-6">Our portfolio of experienced, qualified and
							outstanding psychologists, therapists, neuro-linguistic
							programmers(NLP Masters), counsellors, medical doctors,
							nurses, community health workers, trainers and coaches
							are available to provide help over a variety of requests.
						</p>
						<p class="mb-6">A balanced life begins when there is peace,
							and without a mind-body connection, there can't be peace.
							Talk to us today to close the gap between your mind and body.
						</p>
						<div class="">
							Belwet Mind Clinic… your shelter of love, healing and comfort.
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about us section ends here -->

	</div>

	<!-- Footer starts here -->
	<?php 
            include(ROOT_PATH . "/includes/footer.php"); 
        ?>
	<!-- Footer ends here -->
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous"></script>
	<script src="js/plugins.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>