<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Design Your Website With Background Video</title>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="back.mp4" type="video/mp4">
            </video>
            <div class="navbar">
                <img class="logo" src="logo.png">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">ANIMALS</a></li>
                    <li><a href="#">ONGOING</a></li>
                    <li><a href="#">GALLERY</a></li>
                    <li><a href="#">GUIDING</a></li>
                    <li><a href="#">REPORT</a></li>

                </ul>
            </div>
            <div class="content">
                <h1>EXPLORE </h1>
                <div>
                    <button type="button">Ex</button>
                </div>
            </div>
        </div>

<br><br>

<div>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "hiking";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error === True){
    echo "Error Connecting the database". $conn->connect_errno;
}

$sql = "SELECT OVERVIEW, SPECIES, DETAILS, DAY FROM ongoings";

$result = $conn->query($sql);

if($result->num_rows>0){
    echo "<table><tr><th>OVERVIEW</th><th>SPECIES OR TYPES</th><th>DETAILS</th><th>DESIGNATED DATE</th>";
    while($rows=$result->fetch_assoc()){
        echo "<tr><td>". $rows["OVERVIEW"]. "</td><td>". $rows["SPECIES"]. "</td><td>". $rows["DETAILS"]."</td><td>". $rows["DAY"] . "</td></table>";
    } 
}

$conn->close();
?>

</div>


    </body>
</html>
