function validate_form() {
  var email = document.signupForm.email.value.trim();
  var password = document.signupForm.password.value.trim();
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

    var passwordField = document.signupForm["password"];
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
  if (!password.match(passwordPattern)) {
    displayError("Weak password!", "password");
    return false;
  }

  return true;
}

function displayError(message, field) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;

  // Focus on the correct field
  document.signupForm[field].focus();
}

function cancelForm() {
  // Reset form fields
  document.loginForm.reset();

  // Clear the error message
  document.getElementById("error-message").innerText = "";
}