document
  .getElementById("editAccountbtn")
  .addEventListener("click", function () {
    document.querySelector(".content1").classList.remove("active");
    document.querySelector(".content2").classList.add("active");
  });

document.addEventListener("DOMContentLoaded", function () {
  updateErrorVisibility();
});

function validate_form() {
  var form = document.querySelector(".accoutEditForm");

  if (!form) {
    console.error("Form not found!");
    return false;
  }

  var email = form["email"].value.trim();
  //var currentPassword = form["currentPassword"].value.trim();
  var newPassword = form["newPassword"].value.trim();
  //var confirmPassword = form["confirmPassword"].value.trim();
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
  if (newPassword !== "") {
    if (!newPassword.match(passwordPattern))
      return displayError(
        "Weak password! Must contain uppercase, lowercase, number, and special character.",
        form["newPassword"]
      );
  }
  if (address === "")
    return displayError("Please enter address", form["address"]);
  if (phone === "")
    return displayError("Please enter phone number", form["phone"]);

  return true;
}

function displayError(message, inputField) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;
  errorElement.style.display = "block";
  inputField.focus();
  console.log("Setting error: " + message);
  return false;
}

function updateErrorVisibility() {
  var errorDiv = document.getElementById("error-message");
  if (errorDiv.innerText.trim() === "") {
    errorDiv.style.display = "none";
  } else {
    errorDiv.style.display = "block";
  }
}
