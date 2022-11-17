<?php 
session_start();
?>
<?php
if(isset($_POST['database'])) {
    echo('
    <!DOCTYPE html>
<html>
<head>
<title>Thank You</title>
</head>
<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Raleway:400,600,900");

*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
body{
        background-color:#FF5555;
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
a {
  color: #fff;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1{
  font-family: "Raleway", Arial Black, Sans-Serif;
  font-size:4em;
  font-weight: 900;
  letter-spacing:3px;
  color: #fafafa;
  margin:0;
  margin-top: 40px;
  margin-bottom:40px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#fafafa;
  font-family: "Raleway", sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
  background: #e83890;
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-family: "Raleway", Arial Black;
  font-size: 1rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.footer-like{
  margin-top: auto; 
  background: rgb(31,38,130);
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#fafafa;
  font-family: "Raleway", sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  color:#FFF;
 }

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .thankyoucontent{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  }
  
}
</style>
<body>
<div class=thankyoucontent>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <img src="https://i.ibb.co/Lkn7rkG/thank-you-envelope.png" alt="thank-you-envelope" border="0">
      <h1>Thank you!</h1>
      <p>Course uploaded successfully, we will promptly</p>
      <p>display it in our website once verified by our team. </p>
      <h2><u><i>
      <button><a href="educator.php" style="color: black;">
          Go back to Educator Page</a></button><br><br>
          <form method="post" action="exploreOurCourses.php">
         <button name="explore">See your course on our website</button>
         </form>
      </u></i></h2>
    </div>

    
      <p>
      </p>
    </div>
  </div>
</body>
</html>
    
    ');
    if(isset($_POST["explore"]))
    {
      $_SESSION["database"] = '1';
    }
  //database upload part begis after here....

  $conn=mysqli_connect('localhost', 'root', '', 'myclass');

  $subject = $_POST['subject'];
  $domain = $_POST['domain'];
  $language = $_POST['language'];
  $advice = $_POST['advice'];
  $time = time();
  $query = "insert into courses values('$time','$subject','$domain','$language','$advice')";
  mysqli_query($conn,$query);
}
?>