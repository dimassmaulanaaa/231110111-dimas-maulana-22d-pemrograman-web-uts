<?php

require_once "../config/db.php";

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Dimas Maulana" />

	<link rel="icon" href="../favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="../apple-touch-icon.png" />

	<title>Dimas'sPortfolio</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
	<!-- NAVBAR -->
	<nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
		<div class="container-fluid tabs-container mx-0 mx-md-1 mx-xl-2">
			<a class="navbar-brand" href="index.html">Dimas'sPortfolio</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbar-supported-content"
				aria-controls="navbar-supported-content"
				aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbar-supported-content" class="collapse navbar-collapse">
				<ul class="navbar-nav m-auto pe-5">
					<li class="nav-item">
						<a class="nav-link" href="#works">Works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#resume">Resume</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#skills">Skills</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>
				<!-- lg+ -->
				<a type="button" class="btn rounded-pill btn-gradient ms-4 px-4 d-none d-lg-block" href="#contact"> Hire Me! </a>
				<!-- md- -->
				<div class="container-fluid d-flex d-block d-lg-none">
					<a type="button" class="btn rounded-pill btn-gradient mx-auto pb-2 px-4" href="#contact"> Hire Me! </a>
				</div>
			</div>
		</div>
	</nav>

	<!-- MAIN -->
	<main>
		<!-- About Section -->
		<section id="about" aria-labelledby="about-heading">
			<div class="container-fluid py-3 px-2 p-md-5 me-0 me-xl-5">
				<div class="row align-items-center">
					<div class="col-12 col-md-7 col-xl-7">
						<h3>I am Dimas Maulana</h3>
						<h1 class="py-2"><strong>Web Developer + Graphic Designer</strong></h1>
						<p class="mt-3 mt-3 mb-4 mb-md-4 me-5 pe-5">
							I deconstruct abstract design challenges to build intuitive and aesthetically pleasing interfaces that improve
							engagement for diverse user demographics.
						</p>
						<ul class="navbar-nav d-flex flex-row mb-5">
							<li>
								<a
									class="btn btn-outline-gradient rounded-circle social-icon me-2 p-0"
									href="http://wa.me/+6287889198491"
									target="_blank"><i class="bi bi-whatsapp"></i></a>
							</li>
							<li>
								<a
									class="btn btn-outline-gradient rounded-circle social-icon mx-2 p-0"
									href="https://www.instagram.com/dimassmaulanaaa/"
									target="_blank"><i class="bi bi-instagram"></i></a>
							</li>
							<li>
								<a
									class="btn btn-outline-gradient rounded-circle social-icon ms-2 p-0"
									href="https://github.com/dimassmaulanaaa"
									target="_blank"><i class="bi bi-github"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-5 col-xl-4 text-center ms-0 ms-xl-5 px-5 px-md-0 ps-xl-4 pe-xl-5">
						<img
							src="../assets/img/IMG_0004.JPG"
							class="img-thumbnail rounded-5"
							alt="Dimas-Maulana"
							style="transform: rotate(9deg)" />
					</div>
				</div>
			</div>
		</section>

		<!-- Works Section -->
		<section id="works" aria-labelledby="works-heading">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center mb-4">
						<div class="container">
							<h2 id="works-heading">My Recent Works</h2>
							<p>I transform your vision and needs into a captivating digital presence that delights both you and your audience.</p>
						</div>
					</div>
					<div class="col-12 mt-2">
						<div class="row row-cols-auto d-flex justify-content-center align-items-center">
							<div class="col-10 col-sm-11 m-0 p-0 px-2">
								<form action="#my-project" method="POST" role="search">
									<input
										id="search-project-input"
										name="search-project-keyword"
										class="form-control rounded-pill search-icon"
										type="search"
										placeholder="Search"
										autocomplete="off"
										aria-label="Search" />
								</form>
							</div>
							<div class="col m-0 p-0 px-2">
								<a type="button" class="btn btn-transparant m-0 p-0" data-bs-toggle="modal" data-bs-target="#create-project">
									<i class="bi bi-plus-circle fs-2"></i>
								</a>
							</div>
						</div>
					</div>
					<div id="project-list">
						<div class="col-12 col-md-6 col-xl-4 mt-4">
							<div class="card">
								<img src="../assets/img/Dimdim.png" class="card-img-top" alt="1" />
								<div class="card-body">
									<h5 class="card-title">Graphic Design</h5>
									<p class="card-text">ETTASHANE - Graphic Design</p>
								</div>
								<div class="dropdown d-flex justify-content-end pb-2 pe-2">
									<button
										id="dropdown-menu-button"
										class="btn btn-circular-secondary btn-round dropdown-toggle"
										type="button"
										data-bs-toggle="dropdown"
										aria-expanded="false">
										<i class="bi bi-list"></i>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdown-menu-button">
										<li><a class="dropdown-item" href="update.html">Edit</a></li>
										<li><a class="dropdown-item" href="">Delete</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Resume Section -->
		<section id="resume" aria-labelledby="resume-heading">
			<div class="container">
				<div class="row justify-content-center">
					<!-- experience -->
					<div class="col-10 col-lg-5 text-center mx-0 mx-md-4 mb-5">
						<div class="container mb-2 pb-0 pb-md-1">
							<h2 id="resume-heading">My Experinece</h2>
						</div>
						<div class="card rounded-4 my-4">
							<div class="card-body text-start m-0 p-4">
								<h5>December 2024 - April 2025</h5>
								<h4 class="py-1">GRAPHIC DESIGNER</h4>
								<p>Shane Indonesia, Sleman</p>
							</div>
						</div>
						<div class="card rounded-4 my-4">
							<div class="card-body text-start m-0 p-4">
								<h5>January 2022 - July 2023</h5>
								<h4 class="py-1">STAFF NOTARIS</h4>
								<p>Wahyurin Widayati, S.SH, M.Kn, Klaten</p>
							</div>
						</div>
						<div class="card rounded-4 my-4">
							<div class="card-body text-start m-0 p-4">
								<h5>June 2021 - December 2021</h5>
								<h4 class="py-1">GRAPHIC DESIGNER</h4>
								<p>Smulvi Store, Jakarta Barat</p>
							</div>
						</div>
					</div>
					<!-- education -->
					<div class="col-10 col-lg-5 text-center mx-0 mx-md-4 mb-5">
						<div class="container mb-2 pb-0 pb-md-1">
							<h2 id="resume-heading">My Education</h2>
						</div>
						<div class="card rounded-4 my-4">
							<div class="card-body text-start m-0 p-4">
								<h5>2023 - Present</h5>
								<h4 class="py-1">BACHELOR OF INFORMATICS</h4>
								<p>Universitas Mercu Buana Yogyakarta</p>
							</div>
						</div>
						<div class="card rounded-4 my-4">
							<div class="card-body text-start m-0 p-4">
								<h5>2018 - 2021</h5>
								<h4 class="py-1">SOSIAL SCIENCE</h4>
								<p>SMA Negeri 84 Jakarta</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Skills Section -->
		<section id="skills" aria-labelledby="skills-heading">
			<div class="container text-center">
				<div class="container mb-3">
					<h2 id="skills-heading">My Skills</h2>
					<p>My core technical competencies and key skill sets</p>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body position-relative m-0">
								<img src="../assets/img/html5.png" class="img-fluid" alt="html5.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body m-0">
								<img src="../assets/img/css3.png" class="img-fluid" alt="css3.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body m-0">
								<img src="../assets/img/js.png" class="img-fluid" alt="js.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body m-0">
								<img src="../assets/img/php.png" class="img-fluid" alt="php.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body m-0">
								<img src="../assets/img/mysql.png" class="img-fluid" alt="mysql.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-2">
							<div class="card-body m-0">
								<img src="../assets/img/illustrator.png" class="img-fluid" alt="illustrator.png" />
							</div>
						</div>
					</div>
					<div class="col-3 col-md-2 col-xl-1 text-center mx-0 mx-sm-1 mx-md-2 mx-xl-0 mx-xxl-2">
						<div class="card rounded-4 mt-4 mb-5">
							<div class="card-body m-0">
								<img src="../assets/img/photoshop.png" class="img-fluid" alt="photoshop.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Contact Section -->
		<section id="contact" aria-labelledby="contact-heading">
			<div class="container">
				<div class="row">
					<!-- form message -->
					<div class="col-12 col-lg-6 mb-0 py-5">
						<div class="card rounded-4">
							<div class="card-body py-4 px-4">
								<h2 id="contact-heading">Let's work together</h2>
								<p class="pt-1 pb-4 px-1">
									I design and code beautifully simple things and i love what i do. Just simple like that!
								</p>
								<form class="row g-3">
									<div class="col-12 col-sm-6">
										<input type="text" class="form-control" name="firstName" placeholder="First name" required />
									</div>
									<div class="col-12 col-sm-6">
										<input type="text" class="form-control" name="lastName" placeholder="Last name" required />
									</div>
									<div class="col-12 col-sm-6">
										<input type="email" class="form-control" name="email" placeholder="Email address" required />
									</div>
									<div class="col-12 col-sm-6">
										<input type="tel" class="form-control" name="phoneNumber" placeholder="Phone number" required />
									</div>
									<div class="col-12">
										<textarea class="form-control" name="message" rows="6" placeholder="Message.." required></textarea>
									</div>
									<div class="col-12">
										<button type="submit" class="btn rounded-pill btn-gradient mb-3 py-2 px-4">Send Message</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- info contact -->
					<div class="col-12 col-lg-6 col-xl-5 col-xxl-4 m-auto">
						<!-- XS -->
						<ul class="d-block d-sm-none" style="list-style: none">
							<li class="d-flex align-items-start">
								<div class="bg-icon-sm rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-telephone fs-4"></i></div>
								<div>
									<p class="fs-7 mb-1">Phone</p>
									<p class="fs-6 mb-0">+62 878 8919 8491</p>
								</div>
							</li>
							<li class="mt-5 d-flex align-items-start">
								<div class="bg-icon-sm rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-envelope fs-4"></i></div>
								<div>
									<p class="fs-7 mb-1">Email</p>
									<p class="fs-6 mb-0">dimasmaulana.idn@gmail.com</p>
								</div>
							</li>
							<li class="mt-5 d-flex align-items-start">
								<div class="bg-icon-sm rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-geo-alt fs-4"></i></div>
								<div>
									<p class="fs-7 mb-1">Address</p>
									<p class="fs-6 mb-0">Klaten, Jawa Tengah</p>
								</div>
							</li>
						</ul>
						<!-- SM+ -->
						<ul class="d-none d-sm-block" style="list-style: none">
							<li class="mt-3 d-flex align-items-start">
								<div class="bg-icon rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-telephone fs-4"></i></div>
								<div>
									<p class="fs-6 mb-1">Phone</p>
									<p class="mb-0">+62 878 8919 8491</p>
								</div>
							</li>
							<li class="mt-5 d-flex align-items-start">
								<div class="bg-icon rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-envelope fs-4"></i></div>
								<div>
									<p class="fs-6 mb-1">Email</p>
									<p class="mb-0">dimasmaulana.idn@gmail.com</p>
								</div>
							</li>
							<li class="mt-5 d-flex align-items-start">
								<div class="bg-icon rounded-circle btn-gradient me-3 me-xl-4"><i class="bi bi-geo-alt fs-4"></i></div>
								<div>
									<p class="fs-6 mb-1">Address</p>
									<p class="mb-0">Klaten, Jawa Tengah</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- FOOTER -->
	<footer>
		<div class="container-fluid m-0 pt-4 pb-5">
			<p class="fs-6 text-center pb-3">&copy; 2025 Dimas Maulana. All rights reserved.</p>
		</div>
	</footer>

	<!-- CREATE.HTML -->
	<div id="create-project" class="modal fade" tabindex="-1" aria-labelledby="create-project-label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header border-0 py-1 px-3">
					<h2 id="create-project-label" class="modal-title fs-1">New Project</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-4 pt-1">
					<form class="needs-validation" action="" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label" for="category">Category</label>
							<input type="text" class="form-control" id="category" name="category" placeholder="e.g., Graphic Design" required />
						</div>
						<div class="mb-3">
							<label class="form-label" for="details">Details</label>
							<textarea
								class="form-control"
								id="details"
								name="details"
								rows="4"
								placeholder="e.g., ETTASHANE - Social media design special ramadhan"
								required></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label" for="projectPhoto">Photo</label>
							<input type="file" class="form-control" id="projectPhoto" name="projectPhoto" accept="image/*" required />
						</div>
						<button type="submit" class="btn btn-gradient w-100 mt-3 py-2" name="submitAddProject">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT -->
	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/jquery-3.7.1.min.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>