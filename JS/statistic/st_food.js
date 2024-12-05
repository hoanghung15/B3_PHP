function fetcbBestFood() {
  fetch(`../php/statistic_food.php`)
    .then((response) => response.json())
    .then((foods) => {
      console.log("bestFood", foods);
      const tableBody = document.querySelector("tbody");
      tableBody.innerHTML = "";
      foods.forEach((item) => {
        tableBody.innerHTML += `
           <tr class="">
                        <td>#${item.ID}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="me-3" style="width: 40px; height: 40px">
                                    <img src="${
                                      item.Anh
                                    }" alt="" class="rounded w-100 h-100" />
                                </div>
                                <p class="mb-0">${item.TenMon}</p>
                            </div>
                        </td>
                        <td>${item.Gia} đ</td>
                        <td>${item.SoLuongBan}</td>
                        <td>${item.Gia * item.SoLuongBan} đ</td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="bi bi-pen-fill"></i>
                            </button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                class="btn text-danger">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </td>
                    </tr>
                    `;
      });
    });
}
fetcbBestFood();
