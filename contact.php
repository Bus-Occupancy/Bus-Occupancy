<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <!-- --swett alert cdn--- -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="contact-body">
<?php
// include("config.php");
require("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    extract($_POST);
    $sql = "INSERT INTO `contactdata`(`name`, `phone`, `email`, `message`) VALUES ('".$name."',".$phone.",'".$email."','".$message."')";
    $result = $db->con->query($sql);
    // $result = $mysqli->query($sql);
    if(!$result){
        die("Couldn't enter data: ".$mysqli->error);
    }else{
        echo '<script>swal({
      title: "Thank You!",
      text: "Your message has been sent.",
      icon: "success",
    });</script>';
    }
}
?>
<header class="header-container">
    <p class="title"><a href="./index.htm">BUS OCCUPANCY</a></p>
    <nav class="nav-bar">
        <ul>
            <li><a href="./index.htm">HOME</a></li>
            <li><a href="./buses.php">BUSES</a></li>
            <li><a href="./contact.php">CONTACT US</a></li>
        </ul>
    </nav>
</header>
<table id="contact-table">
<td>
<img src="./Images/contactimp.svg" align="right" height="170%" width="650px">
</td>
<td>
<font color=" #ff4d4d">
<div class="contact-section">
      
      <div class="contact-form">
        <br><br>
    
        <h1>CONTACT US FORM</h1><br>
        <form method="POST">
            
               <b> <label for="firstname"><i class="fa fa-user"></i>&nbsp; Name</label></b><br>
               <input type="text" name="name" id="name" class="text-box" placeholder="Your Name" required><br>
            
                <b><label for="phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone</label></b><br>
                <input type="tel" name="phone" id="phone" class="text-box"placeholder="Your Phone No" required><br>
       
         
                <b><label for="email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</label></b><br>
                <input type="email" name="email" id="email" class="text-box"  placeholder="Your Email Id" required><br>
        
          
                <b><label for="message"><i class="fas fa-comment-dots"></i>&nbsp;&nbsp;Message</label></b><br>
                <textarea name="message" id="message" rows="1" cols="50" placeholder="Your Message" required></textarea>
        
            
                <button class="send-btn" type="submit" color="orange">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
        </form>
		  </div>
  </div>
	</font>
	</td>
  </table>
  
  <footer class="footer-container">
        <div class="footer-content">
             <p>BUS OCCUPANCY</p>
            <hr>
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/im_ajmal_k/ " target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCRDnaxGwNRZ49o3jDe1vvzQ/featured?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <p class="credits">Copyright &copy;2020 BUS OCCUPANCY. Designed by <span>Ajmal | Vaishnavi | Heet</span></p>
        </div> 
            
    </footer>
</body>
</html> 