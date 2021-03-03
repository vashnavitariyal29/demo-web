<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "register");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phoneCode = mysqli_real_escape_string($link, $_REQUEST['phoneCode']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
// Attempt insert query execution
$sql = "INSERT INTO signup (name,password,gender,email,phonecode,phone) VALUES ('$name', '$password ', '$gender','$email','$phoneCode','$phone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>