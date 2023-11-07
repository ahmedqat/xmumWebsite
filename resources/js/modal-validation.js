document.addEventListener("DOMContentLoaded", function () {
    const modalForm = document.getElementById("modal_upload_form");

    modalForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        const formData = new FormData(modalForm);

        // Send the form data via AJAX
        fetch(modalForm.getAttribute("action"), {
            method: "POST",
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // If the form submission is successful, you can close the modal or perform other actions
                // For example, you can close the modal using Bootstrap's built-in method:
                // $('#modal_upload').modal('hide');
            } else {
                // If there are validation errors, update the modal content to display the errors
                const modalContent = document.querySelector(".modal-content");
                modalContent.innerHTML = data.modalContent;
            }
        });
    });
});
