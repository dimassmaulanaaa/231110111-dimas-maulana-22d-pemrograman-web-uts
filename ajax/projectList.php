<?php

require_once '../controllers/read.php';

$projectRead = new ProjectRead($conn);

$project = $projectRead->getAll();

$keyword = $_GET['search-project-keyword'];
$project = $projectRead->getSearchData($keyword);

?>

<div class="row">
    <?php $i = 1; ?>
    <?php foreach ($project as $projectRow) { ?>
        <div class="col-12 col-md-6 col-xl-4 mt-4">
            <div class="card">
                <img src="../assets/img/<?= htmlspecialchars($projectRow['project_photo']) ?>" class="card-img-top" alt="Project-<?= $i; ?>" />
                <div class="card-body">
                    <h5 class="card-title"><?= $projectRow['project_category'] ?></h5>
                    <p class="card-text"><?= htmlspecialchars($projectRow['project_details']) ?></p>
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
        <?php $i++; ?>
    <?php } ?>
</div>