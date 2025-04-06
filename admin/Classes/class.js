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
  document.querySelector(".delete-form-container").classList.remove("active");
  document.querySelector(".add-form-container").classList.add("active");
});

document.getElementById("updatebtn").addEventListener("click", function () {
  document.querySelector(".add-form-container").classList.remove("active");
  document.querySelector(".delete-form-container").classList.remove("active");
  document.querySelector(".update-form-container").classList.add("active");
});

document.getElementById("deletebtn").addEventListener("click", function () {
  document.querySelector(".add-form-container").classList.remove("active");
  document.querySelector(".update-form-container").classList.remove("active");
  document.querySelector(".delete-form-container").classList.add("active");
});

//click table
const table = document.getElementById("classTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill update form
    document.getElementById("idUpdate").value = cells[0].innerText;
    document.getElementById("classNameUpdate").value = cells[1].innerText;
    document.getElementById("descriptionUpdate").value = cells[2].innerText;
    document.getElementById("dateUpdate").value = cells[3].innerText;
    document.getElementById("capacityUpdate").value = cells[4].innerText;

    // Fill activate form
    document.getElementById("idDelete").value = cells[0].innerText;
    document.getElementById("classNameDelete").value = cells[1].innerText;
    document.getElementById("descriptionDelete").value = cells[2].innerText;
    document.getElementById("dateDelete").value = cells[3].innerText;
    document.getElementById("capacityDelete").value = cells[4].innerText;
    document.getElementById("trainerDelete").value = cells[5].innerText;
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
    className: form["className"].value.trim(),
    description: form["description"].value.trim(),
    date: form["date"].value.trim(),
    capacity: form["capacity"].value.trim(),
    trainer: form["trainer"].value.trim(),
  };

  const errorElement = document.getElementById("error-message");
  errorElement.innerText = "";

  if (fields.className === "")
    return displayError(
      "Please enter className",
      form["className"],
      errorElement
    );
  if (fields.description === "")
    return displayError(
      "Please enter description",
      form["description"],
      errorElement
    );
  if (fields.date === "")
    return displayError("Please enter date", form["date"], errorElement);
  if (fields.capacity === "")
    return displayError(
      "Please enter capacity",
      form["capacity"],
      errorElement
    );
  if (fields.trainer === "")
    return displayError(
      "Please enter trainerID",
      form["trainer"],
      errorElement
    );

  return true;
}

function validate_updateform() {
  const form = document.getElementById("updateform");

  if (!form) {
    console.error("Form not found!");
    return false;
  }

  const fields = {
    className: form["className"].value.trim(),
    description: form["description"].value.trim(),
    date: form["date"].value.trim(),
    capacity: form["capacity"].value.trim(),
    trainer: form["trainer"].value.trim(),
  };

  const errorElement = document.getElementById("error-message2");
  errorElement.innerText = "";

  if (fields.className === "")
    return displayError(
      "Please enter className",
      form["className"],
      errorElement
    );
  if (fields.description === "")
    return displayError(
      "Please enter description",
      form["description"],
      errorElement
    );
  if (fields.date === "")
    return displayError("Please enter date", form["date"], errorElement);
  if (fields.capacity === "")
    return displayError(
      "Please enter capacity",
      form["capacity"],
      errorElement
    );
  if (fields.trainer === "")
    return displayError(
      "Please enter trainerID",
      form["trainer"],
      errorElement
    );

  return true;
}

function displayError(message, inputField, errorElement) {
  errorElement.innerText = message;
  errorElement.style.display = "block";
  inputField.focus();
  console.log("Error: " + message);
  return false;
}
