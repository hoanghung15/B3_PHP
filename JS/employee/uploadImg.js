const fileInput = document.getElementById("editImage");

// Lắng nghe sự kiện change trên file input
fileInput.addEventListener("change", async () => {
  const file = fileInput.files[0];
  if (!file) {
    console.log("Chưa chọn file!");
    return;
  }

  // Reference to Firebase Storage
  const storageRef = storage.ref(`tempURLavt/${file.name}`);

  try {
    // Upload file
    const snapshot = await storageRef.put(file);
    console.log("File uploaded!");

    // Get download URL
    const downloadURL = await snapshot.ref.getDownloadURL();
    console.log("Download URL:", downloadURL);
    sessionStorage.setItem("tempUrl", downloadURL);
  } catch (error) {
    console.error("Lỗi khi upload file:", error);
  }
});
