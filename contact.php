<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}



.contact-section{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-info{
  color: #fff;
  max-width: 500px;
  line-height: 65px;
  padding-left: 50px;
  font-size: 18px;
}

.contact-info i{
  margin-right: 20px;
  font-size: 25px;
}

.contact-form{
  max-width: 700px;
  margin-right: 50px;
}

.contact-info, .contact-form{
  flex: 1;
}

.contact-form h2{
  color: #fff;
  text-align: center;
  font-size: 35px;
  text-transform: uppercase;
  margin-bottom: 30px;
}

.contact-form .text-box{
  background: 	 #ffff99;
  color: #000;
  border: none;
  width: 100%;
  height: 50px;
  padding: 12px;
  font-size: 15px;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .text-box:first-child{
  margin-right: 15px;
}

.contact-form textarea{
  background:  #ffff99;
  color: #000;
  border: none;
  width: 100%;
  padding: 12px;
  font-size: 15px;
  min-height: 100px;
  max-height: 300px;
  resize: vertical;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .send-btn{
  float: right;
  background: #ff4d4d;
  color: #fff;
  border: none;
  width: 120px;
  height: 40px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  transition-property: background;
}

.contact-form .send-btn:hover{
  background: #0582E3;
}

@media screen and (max-width: 950px){
  .contact-section{
    flex-direction: column;
  }

  .contact-info, .contact-form{
    margin: 30px 50px;
  }

  .contact-form h2{
    font-size: 30px;
  }

  .contact-form .text-box{
    width: 100%;
  }
}

</style>

<body>
<table>
<td>
<img src="./Images/contactimp.svg" align="right" height="170%" width="650px">
</td>
<td>
<font color=" #ff4d4d">
<div class="contact-section">
      
      <div class="contact-form">
<br><br>
    
        <h1>CONTACT US FORM</h1><br>
        <form action="form-process.php" method="POST">
            
               <b> <label for="firstname"><i class="fa fa-user"></i>&nbsp; Name</label></b><br>
               <input type="text" name="name" id="name" class="text-box" placeholder="Your Name" required><br>
            
           <b><label for="phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone</label></b><br>
                <input type="tel" name="phone" id="phone" class="text-box"placeholder="Your Phone No" required><br>
       
         
                <b><label for="email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</label></b><br>
                <input type="email" name="email" id="email" class="text-box"  placeholder="Your Email Id" required><br>
        
          
                <b><label for="message"><i class="fas fa-comment-dots"></i>&nbsp;&nbsp;Message</label></b><br>
                <textarea name="message" id="message" rows="1" cols="50" placeholder="Your Message" required></textarea>
        
            
        <button class="send-btn" type="submit" color="orange">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
    </div>
        </form>
		</div>
    </div>
	</font>
	</td>
	</table>
</body>
</html> 