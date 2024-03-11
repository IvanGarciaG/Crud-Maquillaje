/**
 * Validation file whose purpose is to validate that all the inputs of a form are filled in.
 *
 * Catalog of functions:
 *
 */

// Generic function to display alerts
function showAlert(icon, title, description) {
    Swal.fire({
        position: "center-center",
        icon: icon,
        title: title,
        text: description,
        showConfirmButton: false,
        timer: 3000,
    });
}

// Success Alert
function successAlert(title, description) {
    showAlert("success", title, description);
}

// Error alert
function errorAlert(title, description) {
    showAlert("error", title, description);
}

// Warning alert
function warningAlert(title, description) {
    showAlert("warning", title, description);
}

// Information alert
function infoAlert(title, description) {
    showAlert("info", title, description);
}
