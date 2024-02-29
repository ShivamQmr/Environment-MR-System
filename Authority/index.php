<!DOCTYPE html>
<head>
    <title>
        Update Ongoings
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
<div class="form">
    <h1>Mention the legal ongoing events here for public</h1>
    <form action="ongoings.php" method="POST">
    Give an OVERVIEW of the ongoing works: <input type="textarea" name="overview" required>
    Species or Name:<input type="text" name="Species" required><br>
    Details (of Plant or Animal):<input type="text" name="Details" required><br>
    <input type="date" name="day" required>
        <button type="submit" onclick="submit()">Report action</button>
    </form>



<br><br><br>


</div>
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

$conn->close();
?>

</div>

</body>