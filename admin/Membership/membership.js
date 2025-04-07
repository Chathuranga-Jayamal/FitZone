//search funtion
document.getElementById("searchInput").addEventListener("keyup", function () {
  const filter = this.value.toLowerCase();
  const rows = document.querySelectorAll("table tr:not(:first-child)");

  rows.forEach((row) => {
    const text = row.innerText.toLowerCase();
    row.style.display = text.includes(filter) ? "" : "none";
  });
});

//click
const table = document.getElementById("membershipTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  // Skip the header row
  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill update form
    document.getElementById("id").value = cells[0].innerText;
    document.getElementById("name").value = cells[1].innerText;
    document.getElementById("price").value = cells[2].innerText;
    document.getElementById("discount").value = cells[3].innerText;
    document.getElementById("percentage").value = cells[4].innerText;
    document.getElementById("duration").value = cells[5].innerText;
    document.getElementById("description").value = cells[6].innerText;
  }
});

//emty field validation
function validate_updateform() {
  const form = document.getElementById("updateform");

  if (!form) {
    console.error("Update form not found!");
    return false;
  }

  const fields = {
    id: form["id"].value.trim(),
    name: form["name"].value.trim(),
    price: form["price"].value.trim(),
  };

  const errorElement = document.getElementById("error-message");
  errorElement.innerText = "";
  if (fields.id === "") {
    return displayError("Please enter id", form["id"], errorElement);
  }
  if (fields.name === "")
    return displayError("Please enter name", form["name"], errorElement);
  if (fields.price === "")
    return displayError("Please enter price", form["price"], errorElement);

  return true;
}

function displayError(message, inputField, errorElement) {
  errorElement.innerText = message;
  errorElement.style.display = "block";
  inputField.focus();
  console.log("Error: " + message);
  return false;
}
