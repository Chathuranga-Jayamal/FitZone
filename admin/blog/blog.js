// Search Function
document.getElementById("searchInput").addEventListener("keyup", function () {
  const filter = this.value.toLowerCase();
  const rows = document.querySelectorAll("table tr:not(:first-child)");

  rows.forEach((row) => {
    const text = row.innerText.toLowerCase();
    row.style.display = text.includes(filter) ? "" : "none";
  });
});

// Show Forms
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

// Click Table Row and Fill Forms
const table = document.getElementById("blogTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill Update Form
    document.getElementById("idUpdate").value = cells[0].innerText;
    document.getElementById("titleUpdate").value = cells[1].innerText;
    document.getElementById("contentUpdate").value = cells[2].innerText;
    document.getElementById("categoryUpdate").value = cells[3].innerText;
    document.getElementById("featuredImageUpdate").value = cells[5].innerText;

    // Fill Delete Form
    document.getElementById("idDelete").value = cells[0].innerText;
    document.getElementById("titleDelete").value = cells[1].innerText;
    document.getElementById("contentDelete").value = cells[2].innerText;
    document.getElementById("categoryDelete").value = cells[3].innerText;
    document.getElementById("featuredImageDelete").value = cells[5].innerText;
  }
});

// Empty Field Validation for Add Form
function validate_form() {
  const form = document.getElementById("addform");

  if (!form) return false;

  const fields = {
    title: form["title"].value.trim(),
    content: form["content"].value.trim(),
    category: form["category"].value.trim(),
    featured_image: form["featured_image"].value.trim(),
  };

  const errorElement = document.getElementById("error-message");
  errorElement.innerText = "";

  if (fields.title === "")
    return displayError("Please enter blog title", form["title"], errorElement);
  if (fields.content === "")
    return displayError(
      "Please enter blog content",
      form["content"],
      errorElement
    );
  if (fields.category === "")
    return displayError(
      "Please enter category",
      form["category"],
      errorElement
    );
  if (fields.featured_image === "")
    return displayError(
      "Please enter featured image URL",
      form["featured_image"],
      errorElement
    );

  return true;
}

// Empty Field Validation for Update Form
function validate_updateform() {
  const form = document.getElementById("updateform");

  if (!form) return false;

  const fields = {
    title: form["title"].value.trim(),
    content: form["content"].value.trim(),
    category: form["category"].value.trim(),
    featured_image: form["featured_image"].value.trim(),
  };

  const errorElement = document.getElementById("error-message2");
  errorElement.innerText = "";

  if (fields.title === "")
    return displayError("Please enter blog title", form["title"], errorElement);
  if (fields.content === "")
    return displayError(
      "Please enter blog content",
      form["content"],
      errorElement
    );
  if (fields.category === "")
    return displayError(
      "Please enter category",
      form["category"],
      errorElement
    );
  if (fields.featured_image === "")
    return displayError(
      "Please enter featured image URL",
      form["featured_image"],
      errorElement
    );

  return true;
}

function displayError(message, inputField, errorElement) {
  errorElement.innerText = message;
  errorElement.style.display = "block";
  inputField.focus();
  return false;
}
