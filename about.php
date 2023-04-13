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
    <section id="about">

    <h1 class="" style="">About Us</h1>
    <p style="font-size:20px;">Every cup of coffee has a story, and every cafe has a beginning. Our story started in 2020, and we became the largest gathering of coffee lovers, as we provide all the sufficient information about cafes and the best types of coffee..etc. A few years ago, but we achieved great success. We were the first gathering of coffee lovers, and then we became the largest company that allows its customers to order their favorite coffee from anywhere, any type, and in the smallest details. "We make each cup of coffee with passion specially for you, and we prepare the finest coffee to suit your upscale taste, and we continue to search and invest time and effort to learn about everything new in the world of coffee to offer you a distinctive cup of coffee."</p>

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
