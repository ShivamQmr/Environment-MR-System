<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "hiking";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error === True){
    echo "Error Connecting the database". $conn->connect_errno;
}

$sql = "SELECT SPECIES, DETAILS, TYPE, ONGOINGS FROM reports";

$result = $conn->query($sql);

if($result->num_rows>0){
    echo "<table><tr><th>SPECIES</th><th>DETAILS</th><th>TYPE</th><th>ONGOINGS</th>";
    while($rows=$result->fetch_assoc()){
        echo "<tr><td>". $rows["SPECIES"]. "</td><td>". $rows["DETAILS"]. "</td><td>". $rows["TYPE"]."</td><td>". $rows["ONGOINGS"] . "</td></table>";
    } 
}

?>