/**
 * Validation file to validate the inputs of a form.
 *
 * Catalog of functions:
 * sizeInput - Function that limits the number of characters that can be entered in an input.
 * validateInput - Function that validates that the input is not empty.
 * onlyText - Function that validates that the input only contains text (á-úÁ-Úa-zA-Z)
 * validateEmail - Function that validates that the input is a valid email address
 * onlyNumber - Function that validates that the input only contains numbers (0-9)
 * onlyNumberNegative - Function that validates that the input only contains numbers (0-9) and the negative sign (-)
 * onlyNumberLetter - Function that validates that the input only contains numbers and letters
 * password - Function that validates the input for a password
 */

// Function that validates that the input contains only text (á-úÁ-Úa-zA-Z, [space]])
function onlyText(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > espacio - 1)
            return false;
    tecla = document.all ? e.keyCode : e.which;
    // Backspace key for deleting, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accepts numbers and letters
    patron = /^[á-úÁ-Úa-zA-Z ]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

// Function that validates that the input is a valid email address
function validateEmail(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > (espacio - 1))
            return false;
    tecla = (document.all) ? e.keyCode : e.which;
    //Backspace key to delete, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accept numbers and letters
    patron = /^[a-zA-Z0-9@#$%&*+-/=?¡¿!_.,;:ñÑ]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

// Function that validates that the input only contains numbers (0-9)
function onlyNumber(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > espacio - 1)
            return false;
    tecla = (document.all) ? e.keyCode : e.which;
    //Backspace key to delete, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accept numbers and letters
    patron = /^[0-9]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

// Function that validates that the input contains only numbers (0-9) and the negative sign (-)
function onlyNumberNegative(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > espacio - 1)
            return false;
    tecla = (document.all) ? e.keyCode : e.which;
    //Backspace key to delete, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accept numbers and letters
    patron = /^[-0-9]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

// Function that validates that the input only contains numbers and letters
function onlyNumberLetter(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > espacio - 1)
            return false;
    tecla = (document.all) ? e.keyCode : e.which;
    //Backspace key to delete, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accept numbers and letters
    patron = /^[a-zA-Z0-9]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

//Function to validate the input for the password
function password(e, id = false, espacio = false) {
    if (id != false && espacio != false)
        if (document.getElementById(id).value.length > espacio - 1)
            return false;
    tecla = (document.all) ? e.keyCode : e.which;
    //Backspace key to delete, always allows it
    if (tecla == 8) {
        return true;
    }
    // Input pattern, in this case only accept numbers and letters
    patron = /^[a-zA-Z0-9@#$%&*+-/=?¡¿!_.,;:ñÑ]+$/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

