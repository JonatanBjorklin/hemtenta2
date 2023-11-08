<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktadministration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
           margin: 5%;
        }
        button{
            margin: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Produktadministration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#addProduct">Lägg till produkt</a></li>
                <li class="nav-item"><a class="nav-link" href="#viewProducts">Se alla produkter</a></li>
                <li class="nav-item"><a class="nav-link" href="#updateProduct">Ändra pris/bild på produkt</a></li>
                <li class="nav-item"><a class="nav-link" href="#deleteProduct">Ta bort produkt</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Lägg till produkt -->
        <h2 id="addProduct">Lägg till produkt</h2>
        <form method="post" class="my-4 p-4 border" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Produkt namn</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="price">Pris</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="image">Bild</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Lägg till</button>
        </form>

    <?php 
   if (isset($_POST['add'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    include 'funktioner/create.php';
    } ?>

        <!-- Se alla produkter -->
        <h2 id="viewProducts">Se alla produkter</h2>
        <?php include 'funktioner/view.php' ?>   
        <form method = "post">
        <button type="submit" name="update3" class="btn btn-primary">Uppdatera</button>
        </form>
        <!-- Ändra pris/bild på produkt -->
        <h2 id="updateProduct">Ändra pris/bild på produkt</h2>
        <form method="post" enctype="multipart/form-data" class="my-4 p-4 border">
            <div class="form-group">
                <label for="id">Produkt ID</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="newPrice">Nytt pris</label>
                <input type="number" class="form-control" id="newPrice" name="newPrice" required>
            </div>
            <div class="form-group">
                <label for="newImage">Ny bild</label>
                <input type="file" class="form-control" id="newImage" name="newImage" required>
            </div>
            <button type="submit" name="update2" class="btn btn-primary">Uppdatera</button>
        </form>
    <?php 
    if (isset($_POST['update2'])){
    $newPrice = $_POST['newPrice'];
    $newImage = $_FILES['newImage']['name'];
    $id = $_POST['id'];
    include 'funktioner/update.php';
    } ?>
        <!-- Ta bort produkt -->
        <h2 id="deleteProduct">Ta bort produkt</h2>
        <form method="post" class="my-4 p-4 border">
            <div class="form-group">
                <label for="id">Produkt ID</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <button type="submit" name="delete" class="btn btn-danger">Ta bort</button>
        </form>
    </div>
    <?php 
if (isset($_POST['delete'])){
    $id = $_POST['id'];
    include 'funktioner/delete.php';
}
?>
</body>
</html>
