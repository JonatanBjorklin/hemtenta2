<?php
//Skapar tablen för att kunna lägga till saker i den
if(isset($_FILES['image'])){
    move_uploaded_file($_FILES['image']['tmp_name'], "img/". $_FILES['image']['name']);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "crud_app";

    $conn = new mysqli($servername, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO Products (`name`,`description`,price,`image`) VALUES ('$name', '$description', '$price', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}else{
    echo "image not found!";
}
?>


