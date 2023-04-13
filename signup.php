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
    </style>
    </head>
    <body>
    <section id="section2">
        <h2>Sign Up</h2>
        <div id="cont" class="contact">
           <form id="myform" name="form" action="sign_up.php" method="post">
                <h5 style="text-align: center;">Name:</h5>
                <input type="text" name="name"><br>
                
                <h5 style="text-align: center;">Email:</h5>
                <input type="text" name="email"><br>
                
                <h5 style="text-align: center;">Password:</h5>
                <input type="text" name="password"><br>
                
                <h5 style="text-align: center;">Phone:</h5>
                <input type="text" name="phone"><br>
                
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <br>
    </section>
        <script src="scripts.js"></script>
        <script>
            var date = new Date();
            document.getElementById("date").innerHTML = date;
            document.getElementById("date").style.color = "white";
            </script>

    </body>
</html>