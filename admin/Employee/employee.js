//search funtion
document.getElementById("searchInput").addEventListener("keyup", function () {
  const filter = this.value.toLowerCase();
  const rows = document.querySelectorAll("table tr:not(:first-child)");

  rows.forEach((row) => {
    const text = row.innerText.toLowerCase();
    row.style.display = text.includes(filter) ? "" : "none";
  });
});

//show forms
document.getElementById("addbtn").addEventListener("click", function () {
  document.querySelector(".update-form-container").classList.remove("active");
  document.querySelector(".activate-form-container").classList.remove("active");
  document.querySelector(".add-form-container").classList.add("active");
});

document.getElementById("updatebtn").addEventListener("click", function () {
  document.querySelector(".add-form-container").classList.remove("active");
  document.querySelector(".activate-form-container").classList.remove("active");
  document.querySelector(".update-form-container").classList.add("active");
});

document.getElementById("activatebtn").addEventListener("click", function () {
  document.querySelector(".add-form-container").classList.remove("active");
  document.querySelector(".update-form-container").classList.remove("active");
  document.querySelector(".activate-form-container").classList.add("active");
});

//click table
const table = document.getElementById("employeeTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill update form
    document.getElementById("idUpdate").value = cells[0].innerText;
    document.getElementById("firstNameUpdate").value = cells[1].innerText;
    document.getElementById("lastNameUpdate").value = cells[2].innerText;
    document.getElementById("emailUpdate").value = cells[3].innerText;
    document.getElementById("phoneUpdate").value = cells[4].innerText;
    document.getElementById("addressUpdate").value = cells[5].innerText;
    document.getElementById("roleUpdate").value = cells[6].innerText;

    // Fill activate form
    document.getElementById("idActivate").value = cells[0].innerText;
    document.getElementById("firstNameActivate").value = cells[1].innerText;
    document.getElementById("lastNameActivate").value = cells[2].innerText;
    document.getElementById("emailActivate").value = cells[3].innerText;
    document.getElementById("phoneActivate").value = cells[4].innerText;
    document.getElementById("addressActivate").value = cells[5].innerText;
    document.getElementById("roleActivate").value = cells[6].innerText;
    document.getElementById("statusActivate").value = cells[7].innerText;
  }
});

//emty field validation

function validate_form() {
  const form = document.getElementById("addform");

  if (!form) {
    console.error("Form not found!");
    return false;
  }

  const fields = {
    firstName: form["firstName"].value.trim(),
    lastName: form["lastName"].value.trim(),
    email: form["email"].value.trim(),
    phone: form["phone"].value.trim(),
    address: form["address"].value.trim(),
    password: form["password"].value.trim(),
  };

  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  const passwordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

  const errorElement = document.getElementById("error-message");
  errorElement.innerText = "";

  if (fields.firstName === "")
    return displayError(
      "Please enter first name",
      form["firstName"],
      errorElement
    );
  if (fields.lastName === "")
    return displayError(
      "Please enter last name",
      form["lastName"],
      errorElement
    );
  if (fields.email === "")
    return displayError(
      "Please enter email address",
      form["email"],
      errorElement
    );
  if (!fields.email.match(emailPattern))
    return displayError(
      "Please enter a valid email address",
      form["email"],
      errorElement
    );
  if (fields.password !== "" && !fields.password.match(passwordPattern))
    return displayError(
      "Password must include uppercase, lowercase, number, and special character.",
      form["password"],
      errorElement
    );
  if (fields.phone === "")
    return displayError(
      "Please enter phone number",
      form["phone"],
      errorElement
    );
  if (fields.address === "")
    return displayError("Please enter address", form["address"], errorElement);

  return true;
}

function validate_updateform() {
  const form = document.getElementById("updateform");

  if (!form) {
    console.error("Form not found!");
    return false;
  }

  const fields = {
    firstName: form["firstName"].value.trim(),
    lastName: form["lastName"].value.trim(),
    email: form["email"].value.trim(),
    phone: form["phone"].value.trim(),
    address: form["address"].value.trim(),
  };

  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  const errorElement = document.getElementById("error-message2");
  errorElement.innerText = "";

  if (fields.firstName === "")
    return displayError(
      "Please enter first name",
      form["firstName"],
      errorElement
    );
  if (fields.lastName === "")
    return displayError(
      "Please enter last name",
      form["lastName"],
      errorElement
    );
  if (fields.email === "")
    return displayError(
      "Please enter email address",
      form["email"],
      errorElement
    );
  if (!fields.email.match(emailPattern))
    return displayError(
      "Please enter a valid email address",
      form["email"],
      errorElement
    );
  if (fields.phone === "")
    return displayError(
      "Please enter phone number",
      form["phone"],
      errorElement
    );
  if (fields.address === "")
    return displayError("Please enter address", form["address"], errorElement);

  return true;
}

function displayError(message, inputField, errorElement) {
  errorElement.innerText = message;
  errorElement.style.display = "block";
  inputField.focus();
  console.log("Error: " + message);
  return false;
}

//status change

function setStatusAndSubmit(statusValue) {
  document.getElementById("statusActivate").value = statusValue;
  document.getElementById("Activateform").submit();
}
