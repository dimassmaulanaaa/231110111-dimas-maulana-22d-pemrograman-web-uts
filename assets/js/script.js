// Alert handler
window.setTimeout(function() {
    document.querySelectorAll('.alert').forEach(alert => {
        new bootstrap.Alert(alert).close();
    });
}, 3456);

// Input file button handler
document.addEventListener('DOMContentLoaded', function() {
	const fileInput = document.getElementById('photo');
	const chooseFileButton = document.getElementById('choose-file-button');

	chooseFileButton.addEventListener('click', function() {
	fileInput.click();
	});
});

// Search form handler
$(document).ready(function () {
	$('#search-project-input').on('keyup', function() {
		$('#project-list').load('../ajax/projectList.php?search-project-keyword=' + $('#search-project-input').val());
	});
});

// Contact form handler
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.getElementById("f-name").value + " " + document.getElementById("l-name").value;
      const email = document.getElementById("email").value;
      const telephone = document.getElementById("phone-num").value;
      const message = document.getElementById("message").value;

      const waNum = "6287889198491";
      const text = `Hello, I would like to get in touch with you.%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Telepon:* ${telephone}%0A*Pesan:* ${message}`;

      const waUrl = `https://wa.me/${waNum}?text=${text}`;
      window.open(waUrl, "_blank");
    });
  }
});

// Contact form modal handler
document.addEventListener("DOMContentLoaded", function () {
  const contactFormModal = document.getElementById("contact-form-modal");

  if (contactFormModal) {
    contactFormModal.addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.getElementById("f-name-modal").value + " " + document.getElementById("l-name-modal").value;
      const email = document.getElementById("email-modal").value;
      const telephone = document.getElementById("phone-num-modal").value;
      const message = document.getElementById("message-modal").value;

      const waNum = "6287889198491";
      const text = `Hello, I would like to get in touch with you.%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Telepon:* ${telephone}%0A*Pesan:* ${message}`;

      const waUrl = `https://wa.me/${waNum}?text=${text}`;
      window.open(waUrl, "_blank");
    });
  }
});
