<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel ="aboutus"href="/aboutus.html">
    <link rel ="contactus.html"href="/contactus.html">
    <marquee>*************WELCOME TO YOGA CENTER****************</marquee>
    <img src ="file:///C:/xampp/htdocs/Signlogin/images/banner.jpg">
    <center><h1>YOGA ACADEMY INSTITUTION</h1></center>
    <P>Our yoga certification course in bangalore are designed to make it accessible for passionate yogis from all walks of life to immerse themselves in traditional practices meant for modern application. Sattwa method introduces you how to inculcate Yoga On and Off Mat</P>
    <p Style ="font-size: 40">What We Offer</p> 
    <img src ="C:\xampp\htdocs\Signlogin\images\images (2).jpeg">
    <p>Yoga is an ancient art that connects the mind and body. It is an exercise that we perform by balancing the elements of our bodies. In addition, it helps us meditate and relax. there are 2 sessions morning and evening session based on your confort you can join the yoga session the session is displayed below..</p>
   <br>
   <p><u><B>TIMINGS::</B></u></p>
    <table border= "10px">
        <tr>
            <th>MORNING</th>
            <th>EVENING</th>
        </tr>
        <tr>
            <td><U><B>4:30-5:45</U></B></td>
            <td><U><B>5:55-7:00</B></U></td>
        </tr>
        <tr>
            <td><U><B>4:00-:5:00</B></U></td>
            <td><U><B>5:00-6:00</B></U></td>
        </tr>
        </table>
    <br>

    


    <h3>Benefits of Yoga Teaching Training</h3>
            <img src ="D:\project tie\project\html\images (4).jpeg" width ="1500px" height="600px" >
            <p>A Guru is the one who lights the lamp on the journey of his/her disciple. In order to be a complete Guru, one needs to learn and practice first and be confident in what they deliver. It is said that “Master Teachers are Mindful Teachers”. Learning from a mindful teacher improves your focus and awareness and brings emotional balance and harmony. Yoga Teacher Training helps to deepen asana, pranayama, and higher practices. It also helps to gain an authentic knowledge of the philosophy and history of yoga. The training builds confidence to teach others and aids in developing and maintaining self-practice.Enrol in our yoga certification course in Bangalore and immerse yourself in traditional practices.</p>
    <video controls>
        <source src ="D:\project tie\project\html\WhatsApp Video 2022-09-14 at 10.52.49 PM.mp4" width="500px" height="500px">
    </video>
    <h2><u><b> CLICK THE BELOW LINK TO KNOW MORE ABOUT US</b></u></h2>
<a href="aboutus.html">aboutus</a>
<h2><u><b>CONTACT US</b></u></h2>
<a href="contactus.html">contactus</a>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>LOGIN OR SIGNUP</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>