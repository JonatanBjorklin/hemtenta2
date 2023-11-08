<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "crud_app"; 

// Skapar connection
$conn = new mysqli($servername, $username, $password, $db);
// Kollar connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"SELECT * FROM Products");
$data = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();
?>
<!-- Skapar table -->
<table border="2" class="table table-striped-columns">
  <tr>
    <th class="col-md-1">ID</th>
    <th class="col-md-2">Name</th>
    <th class="col-md-2">Description</th>
    <th class="col-md-2">Price</th>
    <th>Image Link</th>
  </tr>
  <?php foreach($data as $row): ?>
  <tr>
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['description']) ?></td>
    <td><?= htmlspecialchars($row['price']) ?></td>
    <td>
        <img src="img/<?= htmlspecialchars($row['image']) ?>" alt="Bild"  class="col-md-4" class="img-fluid img-thumbnail">
    </td>
  </tr>
  <?php endforeach ?>
</table>

</body>
</html>