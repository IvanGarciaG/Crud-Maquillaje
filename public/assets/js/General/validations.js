function validateForm(formId) {
    const form = document.getElementById(formId);
    const requiredFields = form.querySelectorAll(".required");
    const photoInput = form.querySelector(".photoInput"); // Change this to a class if necessary

    let isValid = true;

    requiredFields.forEach(field => {
        if (field.value.trim() === "") {
            isValid = false;
            field.classList.add("is-invalid");
        } else {
            field.classList.remove("is-invalid");
        }
    });

    // Specific validation for the photo field (if any)
    if (photoInput) {
        if (photoInput.style.backgroundImage === 'none') {
            isValid = false;
            photoInput.style.border = "1px solid red"; // Apply the style directly
        } else {
            photoInput.style.border = ""; // Removes the style
            photoInput.classList.remove("is-invalid");// Removes Bootstrap styling
        }
    }

    if (!isValid) {
        errorAlert("Formulario inválido", "Por favor, complete todos los campos obligatorios.");
    }

    return isValid;
}

// Add event listener to each required field
document.querySelectorAll(".required, select, textarea").forEach(field => {
    field.addEventListener("input", () => {
        field.classList.remove("is-invalid");
    });
});

// Add event listener to the photo field
document.querySelectorAll(".photoInput").forEach(photoInput => {
    photoInput.addEventListener("click", () => {
        photoInput.style.border = ""; // Removes the direct style
    });
});

// Add event listener to each required file field
document.querySelectorAll(".required[type='file']").forEach(field => {
    field.addEventListener("change", () => {
        if (!field.files || !field.files[0]) {
            field.classList.add("is-invalid");
        } else {
            field.classList.remove("is-invalid");
        }
    });
});

// Add event listener to each date field required
document.querySelectorAll(".required[type='date']").forEach(field => {
    field.addEventListener("input", () => {
        if (field.value.trim() === "") {
            field.classList.add("is-invalid");
        } else {
            field.classList.remove("is-invalid");
        }
    });
});

// Add event listener to each required color field
document.querySelectorAll(".required[type='color']").forEach(field => {
    field.addEventListener("input", () => {
        if (field.value.trim() === "") {
            field.classList.add("is-invalid");
        } else {
            field.classList.remove("is-invalid");
        }
    });
});