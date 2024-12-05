const toggleButton = document.getElementById('toggleButton');
const myDiv = document.getElementById('myDiv');
const closeLink = document.getElementById('closeLink');

// Hiển thị div khi ấn vào button
toggleButton.addEventListener('click', function() {
  myDiv.style.display = 'block';
});

// Ẩn div khi ấn vào link
closeLink.addEventListener('click', function(event) {
  event.preventDefault(); // Ngăn không cho link điều hướng
  myDiv.style.display = 'none';
});