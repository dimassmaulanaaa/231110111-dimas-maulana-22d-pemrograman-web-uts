<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />

	<title>Dimas'sPortfolio</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css" />
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
	<header>
		<p class="title pb-5">
			<span class="fs-1" style="--delay: 0s">UTS PEMROGRAMAN WEB</span>
			<span class="d-inline-flex px-2" style="--delay: 0.5s">231110111 - Dimas Maulana</span>
		</p>
		<a class="btn" href="views/index.php">
			<span class="circle">
				<i class="fa-solid fa-angle-right"></i>
			</span>
			<span class="text">Get Started</span>
		</a>
	</header>

	<nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="margin-top: -56px">
		<div class="container-fluid tabs-container mx-0 mx-md-3 mx-xl-5">
			<a class="navbar-brand" href="index.php">Dimas'sPortfolio</a>
			<button type="button" class="btn rounded-pill btn-gradient px-4" data-bs-toggle="modal" data-bs-target="#contact-modal">
				Hire Me!
			</button>
		</div>
	</nav>

	<?php require_once "partials/modal.php" ?>

	<!-- JAVASCRIPT -->
	<script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>