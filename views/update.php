<?php

require_once '../controllers/read.php';
require_once '../controllers/update.php';

$project_id = isset($_GET['project_id']) ? (int)$_GET['project_id'] : 0;
$query = "SELECT * FROM project WHERE project_id = $project_id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

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
	<main>
		<section>
			<div class="container text-center">
				<h1 style="margin: -25px 0px 25px 0px">Edit Project</h1>
			</div>
			<form class="needs-validation" action="" method="POST" enctype="multipart/form-data">
				<!-- image -->
				<div class="container text-center">
					<img src="../assets/img/<?= htmlspecialchars($data['project_photo']) ?>" height="333px" width="333px" class="img-thumbnail rounded-5" alt="Project-Photo" />
					<br />
					<label class="form-label visually-hidden" for="oldProjectPhoto">Changes Project Photo</label>
					<input
						type="hidden"
						class="form-control visually-hidden"
						id="oldProjectPhoto"
						name="oldProjectPhoto"
						value="<?= htmlspecialchars($data['project_photo']) ?>"
						accept="image/*" />
					<input type="file" class="form-control visually-hidden" id="photo" name="projectPhoto" accept="image/*" />
					<button id="choose-file-button" type="button" class="btn btn-sm btn-secondary rounded-3 my-1 px-5">Changes Project Photo</button>
				</div>
				<!-- input -->
				<div class="container my-4">
					<dl class="row justify-content-center">
						<div class="col-12 col-lg-1">
							<label class="form-label" for="category"><strong>Category</strong></label>
						</div>
						<div class="col-12 col-lg-6">
							<input
								type="text"
								class="form-control"
								id="category"
								name="category"
								placeholder="e.g., John Cena"
								value="<?= htmlspecialchars($data['project_category']) ?>"
								required />
						</div>
					</dl>
					<dl class="row justify-content-center">
						<div class="col-12 col-lg-1">
							<label class="form-label" for="details"><strong>Details</strong></label>
						</div>
						<div class="col-12 col-lg-6">
							<textarea
								type="text"
								class="form-control"
								id="details"
								name="details"
								placeholder="e.g., Graphic Designer"
								required><?= htmlspecialchars($data['project_details']) ?></textarea>
						</div>
					</dl>
				</div>
				<!-- button -->
				<div class="row text-center mb-4">
					<div class="col">
						<button type="submit" class="btn btn-gradient rounded-3 mx-1 px-4" name="submitUpdateProject">Save Changes</button>
						<button type="button" class="btn btn-outline-secondary rounded-3 mx-1 px-3" data-bs-toggle="modal" data-bs-target="#discard-confirm-modal">
							Discard Changes
						</button>
					</div>
				</div>
			</form>
		</section>
	</main>

	<!-- FOOTER -->
	<footer>
		<div class="container-fluid m-0 pt-4 pb-5">
			<p class="fs-6 text-center pb-3">&copy; 2025 Dimas Maulana. All rights reserved.</p>
		</div>
	</footer>

	<!-- MODAL -->
	<div id="discard-confirm-modal" class="modal fade" tabindex="-1" aria-labelledby="discard-confirm-modal-label" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header py-1 px-3">
					<h2 id="discard-confirm-modal-label" class="modal-title fs-2">
						<i class="fas fa-exclamation-triangle"></i>Confirm Discard
					</h2>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body py-4 px-3">
					<p>All unsaved changes will be permanently lost. Are you sure?</p>
				</div>
				<div class="modal-footer py-2">
					<button type="button" class="btn btn-gradient" data-bs-dismiss="modal">Keep Editing</button>
					<a class="btn btn-outline-secondary" href="index.html">Discard Anyway</a>
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