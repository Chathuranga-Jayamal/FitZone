function validate_form() {
  var className = document.getElementById("class").value.trim();
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("email").value.trim();
  var username = document.getElementById("username").value.trim();

  var errorElement = document.getElementById("error-message");
  errorElement.innerText = "";

  if (className === "") {
    return displayError("Please enter class", "class");
  }
  if (name === "") {
    return displayError("Please enter name", "name");
  }
  if (email === "") {
    return displayError("Please enter email", "email");
  }
  if (username === "") {
    return displayError("Please enter username", "username");
  }
  return true;
}

function displayError(message, inputId) {
  var errorElement = document.getElementById("error-message");
  errorElement.innerText = message;
  document.getElementById(inputId).focus();
  return false;
}

//click table
const table = document.getElementById("Table");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill form
    document.getElementById("classID").value = cells[0].innerText;
    document.getElementById("className").value = cells[1].innerText;
  }
});
