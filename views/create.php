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