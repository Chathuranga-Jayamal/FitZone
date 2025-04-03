function validate_form() {
  var email = document.registrationForm.email.value.trim();
  var password = document.registration - form.password.value.trim();
  var fname = d;

  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var passwordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  var errorElement = document.getElementById("error-message");

  // Clear previous error messages
  if (errorElement) {
    errorElement.innerText = ""; // Instead of removing, just clear the text
  } else {
    // If error element doesn't exist, create it
    errorElement = document.createElement("p");
    errorElement.id = "error-message";
    errorElement.classList.add("error-message");

    var passwordField = document.registrationForm["password"];
    passwordField.parentNode.insertBefore(
      errorElement,
      passwordField.nextSibling
    );
  }

  // Validation checks
  if (fname === "") {
    displayError("Please enter first name", "fname");
    return false;
  }
  if (lname === "") {
    displayError("Please enter last name", "lname");
    return false;
  }

  if (email === "") {
    displayError("Please enter email address", "email");
    return false;
  }
  if (!email.match(emailPattern)) {
    displayError("Please enter a valid email address", "email");
    return false;
  }
  if (password === "") {
    displayError("Please enter the password", "password");
    return false;
  }
  if (!password.match(passwordPattern)) {
    displayError("Weak password!", "password");
    return false;
  }
  if (address === "") {
    displayError("Please enter address", "address");
    return false;
  }
  if (phone === "") {
    displayError("Please enter phone number", "phone");
    return false;
  }

  return true;
}

function displayError(message, field) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;

  // Focus on the correct field
  document.registrationForm[field].focus();
}
