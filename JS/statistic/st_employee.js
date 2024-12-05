function fetchBestEmployee() {
  fetch(`../php/statistic_employee.php`)
    .then((response) => response.json())
    .then((employees) => {
      console.log("Data fetched successfully:", employees);
      const listBestEmp = document.getElementById("listBestEmp");
      listBestEmp.innerHTML = "";
      employees.forEach((item) => {
        listBestEmp.innerHTML += `
                     <li>#${item.ID}  -  ${item.Ten}</li
        `;
      });
    });
}

fetchBestEmployee();
