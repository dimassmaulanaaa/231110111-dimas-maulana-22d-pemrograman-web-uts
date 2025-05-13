<!-- DISCARD CONFIRM -->
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
                <a class="btn btn-outline-secondary" href="../views/index.php">Discard Anyway</a>
            </div>
        </div>
    </div>
</div>

<!-- CONTACT MODAL -->
<div id="contact-modal" class="modal fade" tabindex="-1" aria-labelledby="contact-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 ps-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <h2 id="contact-modal-label">Let's work together</h2>
                <p class="pt-1 pb-4 px-1">I design and code beautifully simple things and i love what i do. Just simple like that!</p>
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
</div>