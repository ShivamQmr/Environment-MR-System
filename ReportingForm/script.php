<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "hiking";

$conn = new mysqli("$host", "$user", "$password", "$db");

if($conn->connect_error === True){
    echo "Error Connecting the database". $conn->connect_errno;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $species = $_REQUEST['Species'];
    $details = $_REQUEST['Details'];
    $type = $_REQUEST['Type'];
    $event = $_REQUEST['Ongoings'];
}

$sql = "INSERT INTO reports (SPECIES, DETAILS, TYPE, ONGOINGS) VALUES ('$species', '$details', '$type', '$event')";

if($conn->query($sql)){
    echo "<h1>Reported successfully</h1>";
}

$conn->close();
?>
