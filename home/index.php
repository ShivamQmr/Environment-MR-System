<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
    
        .info-table th,
        .info-table td {
            padding: 10px;
            text-align: left;
        }
    
        .info-box {
            padding: 10px;
            border: 1px solid #dddddd;
            transition: transform 0.3s ease;
            border-radius: 5px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
    
        .info-box:hover {
            transform: translateY(-3px);
            background-color: #f0f0f0;
        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Earth - Conservation Portfolio</title>
    <link rel="stylesheet" href="index.css">
 
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="images/logo.jpg" class="logo">
            <ul id="sidemenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#Animals">Animals</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>  
                <li><a href="#">Report</a></li>  
                <i class="fas fa-times" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav> 
        <div class="header-text">
            <p>Conservation Park</p>
            <h1>This is <span>Group</span><br>for Earth Conservation<br></h1>
        </div>
    </div>
</div>
<!-- ------------------------Animals---------- -->
<div id="Animals">
    <div class="container">
        <h1 class="sub-title">Animals</h1>
        <div class="services-list">
            <div>
                <i class="deer"></i>
                <h2>Deer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A modi, saepe accusamus, qui mollitia ipsum expedita illum dignissimos corporis quam nulla quisquam! Dignissimos minima iste, at reprehenderit voluptatibus non itaque.</p>
                    <a href="https://www.google.com/search?q=deer" target="_blank">Learn more</a>
            </div>
            <div>
                <i class="hippo"></i>
                <h2>Hippo</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolorum omnis, hic adipisci assumenda facere quam incidunt quod nihil doloribus minus itaque fuga, enim unde quo eius? Fugit, doloribus cumque..
                </p>
                    <a href="https://www.google.com/search?q=hippo" target="_blank">Learn more</a>
            </div>
            <div>
                <i class="hornbill"></i>
                <h2>Hornbill</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam non quis ad omnis consectetur perspiciatis magnam voluptates culpa repellendus. Alias enim dicta fugit illum sint. Atque minus nihil quasi voluptate.</p>
                    <a href="https://www.google.com/search?q=hornbill" target="_blank">Learn more</a>
            </div>
        </div>
    </div>
</div>

<!-- -----------------------------ONGOING----------------------------- -->
<div class="ongoing">
<h1> ONGOING EVENTS</h1>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "hiking";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error === true) {
    echo "Error Connecting the database" . $conn->connect_errno;
}

$sql = "SELECT OVERVIEW, SPECIES, DETAILS, DAY FROM ongoings";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>OVERVIEW</th>";
    echo "<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>SPECIES OR TYPES</th>";
    echo "<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>DETAILS</th>";
    echo "<th style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>DESIGNATED DATE</th>";
    echo "</tr>";

    while ($rows = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid #dddddd; padding: 8px;'>";
        echo "<div class='info-box'>" . $rows["OVERVIEW"] . "</div>";
        echo "</td>";
        echo "<td style='border: 1px solid #dddddd; padding: 8px;'>";
        echo "<div class='info-box'>" . $rows["SPECIES"] . "</div>";
        echo "</td>";
        echo "<td style='border: 1px solid #dddddd; padding: 8px;'>";
        echo "<div class='info-box'>" . $rows["DETAILS"] . "</div>";
        echo "</td>";
        echo "<td style='border: 1px solid #dddddd; padding: 8px;'>";
        echo "<div class='info-box'>" . $rows["DAY"] . "</div>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$conn->close();
?>

</div>

<!-- -----------------------------Gallery----------------------------- -->
<div id="gallery">
    <div class="container">
        <h1 class="sub-title">Gallery</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/bigbeak.jpg">
                <div class="layer">
                    <h3>Hornbill</h3>
                    <p>Write about hornbill.</p>
                    <a href="#portfolio" onclick="displayAlert()">Learn</a>
                </div>
            </div>
            <div class="work">
                <img src="images/blueparrot.jpg">
                <div class="layer">
                    <h3>Rare bird</h3>
                    <p>Write about that bird</p>
                    <a href="#portfolio" onclick="displayAlert()">Learn</a>
                </div>
            </div>
            <div class="work">
                <img src="images/deer.jpg">
                <div class="layer">
                    <h3>Deer</h3>
                    <p> write about Deer</p>
                    <a href="#portfolio" onclick="displayAlert()">Learn</a>
                </div>
            </div>
        </div>
        <a class="btn" onclick="displayAlert1()">See more</a>
    </div>
</div>

<!-- -------------------------Contact---------------------------------------->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Us</h1>
                <p>info@greenearthconservation.org</p>
                <p>Contact us for inquiries</p>
               <p>       +9779842626061</p>
                <a href="images/GreenEarthBrochure.pdf" download class="btn btn2">Download Brochure</a>
            </div>
            <div class="contact-right">
                <form name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="Email" placeholder="Your Email" required> 
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>          
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © Green Earth Conservation. Made by the Conservation Team</p>
    </div>
</div>

<script>
    var tablinks = document.getElementsByClassName("tab-links")
    var tabcontents = document.getElementsByClassName("tab-contents")

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link")
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab")
        }
        event.currentTarget.classList.add("active-link")
        document.getElementById(tabname).classList.add("active-tab");
    }
</script> 

<script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        sidemenu.style.right = "0";
    }

    function closemenu() {
        sidemenu.style.right = "-200px";
    }
</script>
<script>
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")
  
    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                msg.innerHTML = "Message sent successfully"
                setTimeout(function(){
                    msg.innerHTML = ""
                },5000);
                form.reset()
            })
            .catch(error => console.error('Error!', error.message))
    })
</script>
<script>
    function displayAlert() {
        alert("Learn more about this project on our website. Stay tuned for updates!");
    }
    function displayAlert1() {
        alert("Explore more of our conservation projects and initiatives. Join us in making a difference!");
    }
</script>
</body>
</html>
