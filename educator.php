<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Edu Web Template in HTML and CSS</title>
    </head>
    <style type="text/css">
    *
    {
    margin: 0;
    padding: 0;
    font-family: arial;
    overflow: hidden;
    background-color: rgb(250, 222, 226);
    }
    .container-fluid
    {
    width: 100%;
    height: 100vh;
    background: url(bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    }
    .container
    {
    width: 1200px;
    height: 100px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }
    .container ul
    {
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .container ul li
    {
    list-style: none;
    margin-right: 50px;
    font-weight: bold;
    cursor: pointer;
    font-size: 15px;
    color: #383838;
    transition: 0.5s;
    }
    .container ul li:hover
    {
    color: #f44445;
    }
    .container ion-icon
    {
    color: #383838;
    font-size: 50px;
    }
    .content
    {
    width: 1200px;
    height: 100vh;
    margin: auto;
    }
    .content span
    {
    color: #f44445;
    font-weight: 400;
    }
    .content h1
    {
    font-size: 70px;
    color: #393939;
    padding-top: 120px;
    }
    .content p
    {
    color: grey;
    padding-top: 20px;
    font-weight: bold;
    letter-spacing: 1px;
    }
    .content .btn
    {
    width: 170px;
    height: 45px;
    background-color: #f44445;
    color: #fff;
    font-weight: bolder;
    cursor: pointer;
    border: 2px solid #f44445;
    border-radius: 25px;
    margin-top: 30px;
    transition: 0.5s;
    }
    .content .btn:hover
    {
    background-color: transparent;
    border: 2px solid #f44445;
    color: #f44445;
    }
    </style>
    <body>
        <div class="container-fluid">
            <div class="container">
                <img src="logo (1).png" height="50px" width="50px">
                <ul>
                    <li>HOME</li>
                    <a href="aboutus.html"><li>ABOUT</li></a>
                    <li>SERVICE</li>
                    <li>BLOG</li>
                    <li>PRIVACY</li>
                    <a href="localhost:5000"><li><ion-icon class="iconic" name="chatbubble-ellipses-outline"></ion-icon></li></a>
                </ul>
                <ion-icon name="book"></ion-icon>
            </div>
            
            <div class="content">
                <h1><span>Hi <?php echo($_SESSION["username"]);?></span> Upload<br> Courses to help the student Fraternity..</h1>
                <p>All contents uploaded belong to<br>myClass Leadership Community and are subject to copyright if used elsewhere</p>
                <form method="POST" action="educator.php">
                <button type="submit" class="btn" name="submit">UPLOAD COURSES</button>
                </form>;
            
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>

<?php
    if(isset($_POST['submit'])) {
        header("Location: educator_info.php");
    }
?>