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
const table = document.getElementById("appointmentTable");

table.addEventListener("click", function (e) {
  const row = e.target.closest("tr");

  if (row && row.rowIndex !== 0) {
    const cells = row.getElementsByTagName("td");

    // Fill activate form
    document.getElementById("id").value = cells[0].innerText;
    document.getElementById("userID").value = cells[1].innerText;
    document.getElementById("email").value = cells[2].innerText;
    document.getElementById("title").value = cells[3].innerText;
    document.getElementById("description").value = cells[4].innerText;
    document.getElementById("trainerID").value = cells[5].innerText;
    document.getElementById("trainerName").value = cells[6].innerText;
    document.getElementById("status").value = cells[7].innerText;
  }
});

//status change

function setStatusAndSubmit(statusValue) {
  document.getElementById("status").value = statusValue;
  document.getElementById("form").submit();
}
