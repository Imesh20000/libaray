<?php
$host ="localhost";
$user="root";
$pass="";
$dbname="website_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error){
    die("connection failed: . $conn->connect_error");

}
if (isset($_POST['register'])){
    $username = $_POST['username'];
    $password =$_POST['password'];
    $email =$_POST['email'];
    $fullname =$_POST['fullname'];
    $dob =$_POST['dob'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $gender =$_POST['gender'];
    $membership =$_POST['membership'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, email, fullname, dob, phone, address, gender, membership) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $username, $password, $email, $fullname, $dob, $phone, $address, $gender, $membership);
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>