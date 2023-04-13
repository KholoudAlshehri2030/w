<?php

if(isset($_POST['submit']))
{
    include'database_connection.php';
    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $problem=$_POST['problem'];
             //Insert user into database
             $query="insert into complaints(name,phone,problem)values('$name','$phone','$problem');";
             mysqli_query($connection,$query);
             header("Location: home.php?check=Success");
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- inwhich internal style -->
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
    <script src="scripts.js"></script>
    <script type="text/javascript">
        print_date();
    </script>
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
    <section id="section1">

    <h1 class="" style="">Coffee Fans</h1>
    <p>Let's know more about coffee</p>

    </section>

    <section id="section2">
    <h2>Coffee Cups Types</h2>
    <br>
    <h2 style="font-size:20px;line-height:55px;">Flat White - Americano - Mocca - Espresso</h2>
        <img src="img/espresso-coffee.png"/>
        <img src="img/maxresdefault.jpg"/>
        <img src="img/7C0BADB7-D030-4E4E-BE715FB20458C51E_source.jpg"/>
        <img src="img/Aussie-barista-helps-scientists-to-brew-the-perfect-espresso_wrbm_large.jpg"/>
        <img src="img/espresso.jpg"/>
    </section>
    <section id="section1" style="background-image:url(img/2.jpg);">

    <h1 class="" style="font-size:40px;color:saddlebrown;">Benefits of Coffee</h1>
    <p style="font-size:25px; padding:50px;line-height:55px;color:saddlebrown;">Since coffee contains caffeine, this popular beverage can help people feel less tired, increase energy levels, burn fat by jump-starting the body’s metabolism, and improve productivity and brain function—including memory, mood, reaction times, and general mental function. Although there are many healthful benefits of coffee, consuming it in moderation is still important to avoid side effects, as well as limiting the amount of less-nutritious ingredients like cream and sugar you add to each cup of joe.</p>

    </section>
     <section id="section2">
        <h2>complaints</h2>
        <h2 style="color: black; font-size: 20px; margin-top: 30px;">for any complaints please fill the form below</h2>
        <div id="cont" class="contact" onmouseover="coloring(this)" >
           <form id="myform" name="form" action="home.php" method="post" onclick="return form_validation()">
                <h5 style="text-align: center;">Name: </h5>
                <input type="text" id="name" name="name"><br>

                <p style="color:red;" id="error_name">Enter Valid Name</p>

                <h5 style="text-align: center;">Phone:</h5>
                <input type="text" id="email" name="phone"><br>

                <p style="color:red;" id="error_mail">Enter Valid Phone</p>

                <h5 style="text-align: center;">Description of the problem:</h5>
                <textarea id="message" name="problem" style="text-align: center;"></textarea><br>

                <p style="color:red;" id="error_message">Enter Valid Description</p>

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
        <script>
            var date = new Date();
            document.getElementById("date").innerHTML = date;
            document.getElementById("date").style.color = "white";
            </script>
    </body>
</html>
