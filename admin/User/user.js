//search funtion
document.getElementById("searchInput").addEventListener("keyup", function () {
  const filter = this.value.toLowerCase();
  const rows = document.querySelectorAll("table tr:not(:first-child)");

  rows.forEach((row) => {
    const text = row.innerText.toLowerCase();
    row.style.display = text.includes(filter) ? "" : "none";
  });
});

//click table
const table = document.getElementById("employeeTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill activate form
    document.getElementById("idActivate").value = cells[0].innerText;
    document.getElementById("firstNameActivate").value = cells[1].innerText;
    document.getElementById("lastNameActivate").value = cells[2].innerText;
    document.getElementById("emailActivate").value = cells[3].innerText;
    document.getElementById("phoneActivate").value = cells[4].innerText;
    document.getElementById("addressActivate").value = cells[5].innerText;
    document.getElementById("usernameActivate").value = cells[6].innerText;
    document.getElementById("statusActivate").value = cells[7].innerText;
  }
});

//status change

function setStatusAndSubmit(statusValue) {
  document.getElementById("statusActivate").value = statusValue;
  document.getElementById("Activateform").submit();
}
