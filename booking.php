<?php 
$servername = "localhost";
$username = "leadfxx1_sleeper";
$password = "MnlFJOaX=TKW";
$db="leadfxx1_sleeper";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$contact=mysqli_real_escape_string($conn,$_POST['mob']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$description=mysqli_real_escape_string($conn,$_POST['msg']);

$sql = "INSERT INTO booking (name, email, contact,occasion,description) VALUES ('".$name."', '".$email."', '".$contact."','".$category."','".$description."')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully Submited";
    die();
} else {
    echo "ERROR:Something Wrong Happends !";
}

$conn->close();

?>