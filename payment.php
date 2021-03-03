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
$cardNo = mysqli_real_escape_string($link, $_REQUEST['cardNo']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$Ptime = mysqli_real_escape_string($link, $_REQUEST['time']);
$Pdate = mysqli_real_escape_string($link, $_REQUEST['date']); 
$sql = "INSERT INTO payment (name,cardNo,address,category,Ptime,Pdate) VALUES ('$name', '$cardNo ', '$category','$address','$Ptime','$Pdate')";
if(mysqli_query($link, $sql)){
    echo "thank you for the booking.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link); 
?>