function validate_form() {
  var form = document.querySelector(".registration-form");

  if (!form) {
    console.error("Form not found!");
    return false;
  }

  var email = form["email"].value.trim();
  var password = form["password"].value.trim();
  var fname = form["fname"].value.trim();
  var lname = form["lname"].value.trim();
  var address = form["address"].value.trim();
  var phone = form["phone"].value.trim();
  var username = form["username"].value.trim();

  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var passwordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

  var errorElement = document.getElementById("error-message");
  errorElement.innerText = ""; // Clear previous errors

  if (fname === "")
    return displayError("Please enter first name", form["fname"]);
  if (lname === "")
    return displayError("Please enter last name", form["lname"]);
  if (username === "")
    return displayError("Please enter username", form["username"]);
  if (email === "")
    return displayError("Please enter email address", form["email"]);
  if (!email.match(emailPattern))
    return displayError("Please enter a valid email address", form["email"]);
  if (password === "")
    return displayError("Please enter the password", form["password"]);
  if (!password.match(passwordPattern))
    return displayError(
      "Weak password! Must contain uppercase, lowercase, number, and special character.",
      form["password"]
    );
  if (address === "")
    return displayError("Please enter address", form["address"]);
  if (phone === "")
    return displayError("Please enter phone number", form["phone"]);

  return true;
}

function displayError(message, inputField) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;
  inputField.focus();
  return false;
}

function cancelForm() {
  // Reset form fields
  document.loginForm.reset();

  // Clear the error message
  document.getElementById("error-message").innerText = "";
}
