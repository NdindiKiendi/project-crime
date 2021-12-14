<?php
//database connection
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "crime system"

$conn = new mysqli('localost', 'root', '','crime system' );
if($conn->connect_error){
    die('connection failed : '.$conn->connect_eror);
}else{
    $stmt = $conn->prepare("insert into user(Names,id,Residence,Email,Phonenum) values(?, ?, ?, ?, ?, ?, )");
    $stmt->bind_param("sssii",$name, $id, $residence, $email, $number);
    $stmt->execute();
    echo"registration succesful";
    $stmt->close();
    $conn->();
}

$name = $_POST['Names'];
$id = $_POST['id'];
$residence = $_POST['Residence'];
$email = $_POST['Email'];
$number = $_POST['Phonenum'];

?>