<?php

if(isset($_POST['submit']))
{
    include'database_connection.php';
    $name= $_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
             //Insert user into database
             $query="insert into contact(contact_name,contact_email,contact_message)values('$name','$email','$message');";
             mysqli_query($connection,$query);
             header("Location: contact.php?check=Success");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- page title on tabs above -->
    <title>Coffee Fans</title>

    <!-- link of external style -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- inwhich internal style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>

    /* here style code */
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      padding-left: 50px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }
        .foter{
  width: 100%;
  height: 300px;
  border: 80px;
  padding-top: 30px;
  padding-bottom: 20;
  text-align: center;
            background-color: saddlebrown;
}
.foter h3 {
  margin: 0;
  font-size: 40px;

}
.foter ul{
  margin-left: 38%;

}
.foter ul li{
  list-style-position: none;
  border: 5px solid #fff;
  display: inline-block;
  padding: 30px;
    font-size: 20px;

}
    </style>
    </head>
    <body>
    <ul>
      <li><a href="home.php"><img src="img/coffee.png" style="width: 50px; height: 50px;"/></a></li>
      <li><a href="home.php" class="active" style="padding-top: 30px;">Home</a></li>
      <li><a href="about.php" style="padding-top: 30px;">About</a></li>
      <li><a href="contact.php" style="padding-top: 30px;">Contact</a></li>
      <li><a href="guide.html" style="padding-top: 30px;">Guide</a></li>
      <li style="float: right;" id="date"><a href="contact.html">date</a></li>
    </ul>

    <section id="section2">
        <h2>Contact Us</h2>
        <h2 style="color: black; font-size: 20px; margin-top: 30px;">coffee_fans@gmail.com</h2>
        <h2 style="color: black; font-size: 20px; margin-top: 15px;">0505395036</h2>
        <div id="cont" class="contact" onmouseover="coloring(this)" >
           <form id="myform" name="form" action="contact.php" method="post" onclick="return form_validation()">
                <h5 style="text-align: center;">First name:</h5>
                <input type="text" id="name" name="name"><br>
                <p style="color:red;" id="error_name">Enter Valid Name</p>
                <h5 style="text-align: center;">Email:</h5>
                <input type="text" id="email" name="email"><br>
                <p style="color:red;" id="error_mail">Enter Valid mail</p>
                <h5 style="text-align: center;">Message:</h5>
                <textarea id="message" name="message" style="text-align: center;"></textarea><br>
                <p style="color:red;" id="error_message">Enter Valid message</p>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
    </section>
     <!-- START FOOTER -->
    <div class="foter" id= "com">
            <h3>communication</h3>
            <p><i class="fa fa-map-marker"></i>133, THE BEST COFFEE,
                ABHA</p>
                <br>
            <p><i class="fa fa-paper-plane"></i>coffee_fans@gmail.com</p>
            <p><i class="fa fa-phone"></i>+966 537212797</p>
<br>
            <ul style="background-color:saddlebrown;">
            <li><i class="fa fa-twitter"></i></li>
            <li><i class="fa fa-facebook"></i></li>
            <li><i class="fa fa-instagram"></i></li>
            <li><i class="fa fa-whatsapp"></i></li>
           </ul>
           <br>
           <p> 2021 &copy; All rights; </p>
           <h5>set Developed by Ghadeer & Taif & Khlouod </h5>
      </div>
        <script src="scripts.js"></script>
        <script>
            var date = new Date();
            document.getElementById("date").innerHTML = date;
            document.getElementById("date").style.color = "white";
            </script>

    </body>
</html>
