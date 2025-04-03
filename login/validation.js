function validate_form() {
  var email = document.loginForm.email.value.trim();
  var password = document.loginForm.password.value.trim();
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var errorElement = document.getElementById("error-message");

  // Clear previous error messages
  if (errorElement) {
    errorElement.innerText = ""; // Instead of removing, just clear the text
  } else {
    // If error element doesn't exist, create it
    errorElement = document.createElement("p");
    errorElement.id = "error-message";
    errorElement.classList.add("error-message");

    var passwordField = document.loginForm["password"];
    passwordField.parentNode.insertBefore(
      errorElement,
      passwordField.nextSibling
    );
  }

  // Validation checks
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

  return true;
}

function displayError(message, field) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;

  // Focus on the correct field
  document.loginForm[field].focus();
}
