<?php

if(isset($_POST['submit']))
{
    include 'database_connection.php';  
    $email=$_POST['email'];
    $password=$_POST['password'];
    $log_query="select * from user where user_email='$email'";
    $out=mysqli_query($connection,$log_query);
    $out_ck=mysqli_num_rows($out);
    if($out_ck<1)
    {
        header("Location: index.php?error");
    }
    else
    {
        if($row=mysqli_fetch_assoc($out))
        {
            if($password!=$row['user_password'])
            {
               header("Location: index.php?error");
              
            }
            else
            {
                 header("Location: home.php?success");
                
            }
        }
    }
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
        <h2>Login</h2>
        <div id="cont" class="contact">
           <form id="myform" name="form" action="index.php" method="post">
                <h5 style="text-align: center;">Email:</h5>
                <input type="text" name="email"><br>
                <h5 style="text-align: center;">Password:</h5>
                <input type="password" name="password"><br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
        <br>
        <a href="signup.php" style="text-decoration:none;"><h3 style="text-align: center;">Sign Up</h3></a>
    </section>
        <script src="scripts.js"></script>
        <script>
            var date = new Date();
            document.getElementById("date").innerHTML = date;
            document.getElementById("date").style.color = "white";
            </script>

    </body>
</html>