<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>myClass Leadership</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">myClass Leadership</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="exploreOurCourses.php">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="contacting.html">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </form>
          </div>
        </div>
      </nav>
      <section class="image-first">
        <img class="first-image" src="https://www.businessinsider.in/photo/52652251.cms">
      </section>
      <section class="firstPage">
        <h1 class="firstPageHeading">Our Courses</h1>
        <div class="firstPageData">
            <p class="dataOnFirst">Make stronger connections with individuals and shape decisions that are essential for a long-lasting company. Based on your needs and circumstances, long-term and short-term engagements to develop leadership competencies can be created.</p>
            <p class="dataOnFirst">Build the emotional intelligence necessary for a leadership role,
              Implement long-lasting adjustments that will have enduring effects,
              Determine distractions and reduce them.</p>
            <p class="dataOnFirst">We offer a number of useful courses, which will help your corporate life become smoother and convinent.</p>
        </div>
        <div class="fullCircles">
        <div class="circles">
            <div class="circleData"><a class="contacting" href="successionPlanning.html" >Succession Planning programme</a></div>
            <div class="circleData"><a class="contacting" href="emotionalIntelligence.html" >Emotional Intelligence programme</a></div>
            <div class="circleData"><a class="contacting" href="teamManagement.html" >Team Management programme</a></div>
            <div class="circleData"><a class="contacting" href="workLifeBalance.html" >Work-Life Balance programme</a></div>
            <div class="circleData"><a class="contacting" href="feedbackManaging.html" >Managing Feedback and difficult conversations</a></div>
            <div class="circleData"><a class="contacting" href="salesExcellence.html" >Sales Excellence programme</a></div>
        </div>
        <div class="circles">
          <div class="circleData"><a class="contacting" href="accountability.html" >Accountability</a></div>
          <div class="circleData"><a class="contacting" href="management.html" >Change Management</a></div>
          <div class="circleData"><a class="contacting" href="leadership-dev.html" >Leadership Development</a></div>
          <div class="circleData"><a class="contacting" href="uncertain.html" >Uncertainity and ambiguity</a></div>
          <div class="circleData"><a class="contacting" href="delegation.html" >Delegation, Empowerment</a></div>
          <div class="circleData"><a class="contacting" href="goal.html" >Goal-Setting</a></div>
        </div>
        <div class="newCircle"></div>
      </section>
      <?php
      $button = $_POST["explore"];
      if(isset($button))
      {
      $conn=mysqli_connect('localhost', 'root', '', 'myclass');

      $query = "select * from courses ORDER BY Serialnumber DESC LIMIT 1";
      $result = mysqli_query($conn,$query);
      // $row = mysqli_num_rows ($result);
      // $query = "select * from courses where 'Serial number' = $row";
      // $result = mysqli_query($conn,$query);
      while($tiham = $result->fetch_assoc()) {
        $answer = $tiham["subject"];
      }
    }
        ?>

      <div class="circleData"><a class="contacting" href="accountability.html" ><?php echo($answer) ?></a></div>
</body>
</html>