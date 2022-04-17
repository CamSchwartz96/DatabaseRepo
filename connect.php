<?php 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    //DB Connection
    $conn = new mysqli('localhost','root','','carsdb');
    if ($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt - $conn->prepare("insert into client_register(firstname, lastname, email, password, address, city, state, zip)
            values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssi", $firstname, $lastname, $email, $password, $address, $city, $state, $zip);
        $stmt->execute();
        echo "Client Register Successful";
        $stmt->close();
        $conn->close();
    }
?>