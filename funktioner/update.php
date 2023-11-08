<?php 
// Tar in config.php
include 'config.php';
// Gör så att priset ändras 
$sql = "UPDATE Products SET price = $newPrice WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Price updated successfully";
} else {
  echo "Error updating price: " . $conn->error;
}
// Gör så att man kan ändra bild
if(isset($_FILES['newImage'])){
  if ($_FILES['newImage']['error'] === UPLOAD_ERR_OK) {
    $newImage = $_FILES['newImage']['name'];
    move_uploaded_file($_FILES['newImage']['tmp_name'], "img/" . $newImage);
    $sqlImageUpdate = "UPDATE Products SET image = '$newImage' WHERE id=$id";

    if ($conn->query($sqlImageUpdate) === TRUE) {
      echo "Image updated successfully";
    } else {
      echo "Error updating image: " . $conn->error;
    }
  } else {
    echo "Error uploading image: " . $_FILES['newImage']['error'];
  }
}

$conn->close();
?>
