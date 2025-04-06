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

//click
const table = document.getElementById("trainerTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  // Skip the header row
  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill update form
    document.getElementById("idUpdate").value = cells[0].innerText;
    document.getElementById("firstNameUpdate").value = cells[1].innerText;
    document.getElementById("lastNameUpdate").value = cells[2].innerText;
    document.getElementById("emailUpdate").value = cells[3].innerText;
    document.getElementById("phoneUpdate").value = cells[4].innerText;
    document.getElementById("roleUpdate").value = cells[5].innerText;
    document.getElementById("bioUpdate").value = cells[6].innerText;
    document.getElementById("imageUpdate").value = cells[7].innerText;
    document.getElementById("certificationIDUpdate").value = cells[8].innerText;
    document.getElementById("certificationUpdate").value = cells[9].innerText;
    document.getElementById("experienceUpdate").value = cells[10].innerText;
    document.getElementById("specialtiesUpdate").value = cells[11].innerText;
    document.getElementById("statusUpdate").value = cells[12].innerText;

    // Fill activate form (if applicable)
    document.getElementById("idActivate").value = cells[0].innerText;
    document.getElementById("firstNameActivate").value = cells[1].innerText;
    document.getElementById("lastNameActivate").value = cells[2].innerText;
    document.getElementById("emailActivate").value = cells[3].innerText;
    document.getElementById("phoneActivate").value = cells[4].innerText;
    document.getElementById("roleActivate").value = cells[5].innerText;
    document.getElementById("bioActivate").value = cells[6].innerText;
    document.getElementById("imageActivate").value = cells[7].innerText;
    document.getElementById("certificationIDActivate").value =
      cells[8].innerText;
    document.getElementById("certificationActivate").value = cells[9].innerText;
    document.getElementById("experienceActivate").value = cells[10].innerText;
    document.getElementById("specialtiesActivate").value = cells[11].innerText;
    document.getElementById("statusActivate").value = cells[12].innerText;
    document.getElementById("startDateActivate").value = cells[13].innerText;
    document.getElementById("endDateActivate").value = cells[14].innerText;
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
    role: form["role"].value.trim(),
    bio: form["bio"].value.trim(),
    image: form["image"].value.trim(),
    certificationID: form["certificationID"].value.trim(),
    experience: form["experience"].value.trim(),
    specialties: form["specialties"].value.trim(),
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
  if (fields.phone === "")
    return displayError(
      "Please enter phone number",
      form["phone"],
      errorElement
    );
  if (fields.role === "")
    return displayError("Please enter role", form["role"], errorElement);
  if (fields.bio === "")
    return displayError("Please enter bio", form["bio"], errorElement);
  if (fields.image === "")
    return displayError("Please enter image URL", form["image"], errorElement);
  if (fields.certificationID === "")
    return displayError(
      "Please enter certification ID",
      form["certificationID"],
      errorElement
    );
  if (fields.experience === "")
    return displayError(
      "Please enter experience",
      form["experience"],
      errorElement
    );
  if (fields.specialties === "")
    return displayError(
      "Please enter specialties",
      form["specialties"],
      errorElement
    );
  if (fields.password === "")
    return displayError(
      "Please enter password",
      form["password"],
      errorElement
    );
  if (!fields.password.match(passwordPattern))
    return displayError(
      "Password must include uppercase, lowercase, number, and special character.",
      form["password"],
      errorElement
    );

  return true;
}

function validate_updateform() {
  const form = document.getElementById("updateform");

  if (!form) {
    console.error("Update form not found!");
    return false;
  }

  const fields = {
    trainerID: form["trainerID"].value.trim(),
    firstName: form["firstName"].value.trim(),
    lastName: form["lastName"].value.trim(),
    email: form["email"].value.trim(),
    phone: form["phone"].value.trim(),
    role: form["role"].value.trim(),
    bio: form["bio"].value.trim(),
    image: form["image"].value.trim(),
    certificationID: form["certificationID"].value.trim(),
    certification: form["certification"].value.trim(),
    experience: form["experience"].value.trim(),
    specialties: form["specialties"].value.trim(),
    status: form["status"].value.trim(),
    endDate: form["endDate"].value.trim(),
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
  if (fields.role === "")
    return displayError("Please enter role", form["role"], errorElement);
  if (fields.bio === "")
    return displayError("Please enter bio", form["bio"], errorElement);
  if (fields.image === "")
    return displayError("Please enter image URL", form["image"], errorElement);
  if (fields.certificationID === "")
    return displayError(
      "Please enter certification ID",
      form["certificationID"],
      errorElement
    );
  if (fields.certification === "")
    return displayError(
      "Please enter certification",
      form["certification"],
      errorElement
    );
  if (fields.experience === "")
    return displayError(
      "Please enter experience",
      form["experience"],
      errorElement
    );
  if (fields.specialties === "")
    return displayError(
      "Please enter specialties",
      form["specialties"],
      errorElement
    );
  if (fields.status === "")
    return displayError("Please enter status", form["status"], errorElement);

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
