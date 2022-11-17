<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign-in Sign-up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body style="overflow:hidden">
<main>
    <div class="box" style="height: 575px">
      <div class="inner-box">
        <div class="forms-wrap">

          <form autocomplete="off" class="sign-in-form" method="post">
            <div class="logo">
              <img src="logo.png" alt="easyclass" />
              <h4>myClass leadership😀</h4>
            </div>

            <div class="heading">
              <h2>Welcome Back</h2>
              <h6>Not registred yet?</h6>
              <a href="#" class="toggle">Sign up</a>
              <h6 class="error"></h6>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" name="username" minlength="5" class="input-field" autocomplete="off"  title="minimum 5 characters required" required/>
                <label>👤UserName</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="pass" minlength="4" class="input-field" autocomplete="off" required />
                <label>🔒Password</label>
              </div>

              <input type="submit" value="Sign In" class="sign-btn" name="sub1" style="margin-bottom: 10px"/>

              <p class="text">
                Forgotten your password or you login datails?
                <a href="#">Get help</a> signing in
              </p>
            </div>
          </form>
          <?php
          $sub1 = $_POST["sub1"];
          $usernaam = $_POST["username"];
          $pass = $_POST["pass"];

          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "myclass";

          $conn = mysqli_connect($servername,$username,$password,$database);
            
          if(isset($sub1))
          {
            // $query = "insert into signin values('$usernaam','$pass')";
            // mysqli_query($conn,$query);
            $query = "select * from signin where username = '$usernaam'";
            $result = mysqli_query($conn,$query);
            while($row = $result->fetch_assoc())
            {
              if($row["password"]==$pass)
              {
                if($row["mode"] == '1')
                {
                  header("Location: educator.php");
                  $_SESSION["username"] = $usernaam;
                }
                if($row["mode"] == '0')
                {
                  header("Location: learner.php");
                  $_SESSION["username"] = $usernaam;
                }
              }
              else
              {
                echo("<script> alert('Username and password does not match')</script>");
              }
            }

          }
          ?>

          <form autocomplete="off" class="sign-up-form" method="post">
            <div class="logo">
              <img src="logo.png" alt="easyclass" />
              <h4>myClass leadership😀</h4>
            </div>

            <div class="heading" >
              <h2>Get Started</h2>
              <h6>Already have an account?</h6>
              <a href="#" class="toggle">Sign in</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" name="name" minlength="4" class="input-field" autocomplete="off"  title="minimum 4 characters required" required/>
                <label>👤Name</label>
              </div>

              <div class="input-wrap">
                <input type="text" name="mobile" minlength="10" maxlength="10" class="input-field" autocomplete="off" title="10 digits only" required pattern="^\d{10}$"/>
                <label>📱Mobile No.</label>
              </div>

              <div class="input-wrap">
                <input type="email" name="email" class="input-field" autocomplete="off" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"/>
                <label>📧Email</label>
              </div>
              
              <div class="input-wrap">
                <input type="text" name="username" minlength="5" class="input-field" autocomplete="off"  title="minimum 5 characters required" required/>
                <label>👤UserName</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"/>
                <label>🔒Password</label>
              </div>

              
              <p>
              <a href="index.php"><input type="submit" name="sub2" value="Learner" class="sign-btn" style="margin-bottom: 10px; float: left; width: 45%; padding: 5px;"></a>
              <a href="index.php"><input type="submit" name="sub3" value="Educator" class="sign-btn" style="margin-bottom: 10px; float: right; width: 45%; padding: 5px;"/></a>
              </p>
              <p class="text">
                Upon signing up, I agree to
                <a href="#">T&C</a> & <a href="#">Privacy Policy</a> of myClass leadership😀
              </p>
            </div>
          </form>
          <?php
          $sub2 = $_POST["sub2"];
          $sub3 = $_POST["sub3"];

          $name = $_POST["name"];
          $mobile = $_POST["mobile"];
          $email = $_POST["email"];
          $usernaam = $_POST["username"];
          $pass = $_POST["password"];

          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "myclass";

          $conn = mysqli_connect($servername,$username,$password,$database);
            
          if(isset($sub2))
          {
            $mode = 0;
            $query = "insert into signin values('$name','$mobile','$email','$usernaam','$pass','$mode')";
            mysqli_query($conn,$query);
          }

          if(isset($sub3))
          {
            $mode = 1;
            $query = "insert into signin values('$name','$mobile','$email','$usernaam','$pass','$mode')";
            mysqli_query($conn,$query);
          }
          ?>
        </div>


        <div class="carousel">
          <div class="images-wrapper">
            <img src="image1.png" class="image img-1 show" alt="" />
            <img src="image2.png" class="image img-2" alt="" />
            <img src="image3.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Create your own courses</h2>
                <h2>Customize as you like</h2>
                <h2>Connect with people around the globe</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="app.js"></script>
</body>

</html>