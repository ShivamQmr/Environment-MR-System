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
    $overview = $_REQUEST['overview'];
    $day = $_REQUEST['day'];
}

$sql = "INSERT INTO ongoings (OVERVIEW, SPECIES, DETAILS, DAY) VALUES ('$overview', '$species', '$details', '$day')";

if($conn->query($sql)){
    echo "<h1>Reported successfully</h1>";
}

$conn->close();
?>
