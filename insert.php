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

$sql = "SELECT * FROM artist where email='".$email."'";
$result = $conn->query($sql);
$num_rows = $result->num_rows;
if($num_rows>0)
{
	echo "ERROR:Email Already Registered !!";
    die();
}
$sql = "INSERT INTO artist (name, email, contact,category,description) VALUES ('".$name."', '".$email."', '".$contact."','".$category."','".$description."')";

if ($conn->query($sql) === TRUE) {
    echo "Successfully Registered";
    die();
} else {
    echo "ERROR:Something Wrong Happends !";
}

$conn->close();

?>