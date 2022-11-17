
<?php 
    if(isset($_POST["pay"]))
    {
    ini_set("SMTP","gmail.com");
    ini_set("SMTP_port","25");
    $from = ini_set("sendmail_from","shalini.mishra2020@vitstudent.ac.in");
    $to = "shamishra2002@gmail.com";
    $subject = "test mail";
    $message = "hello";
    $header = "from:" . $from;
    mail($to,$subject,$message,$header);
    echo('
    <div class="message">
    Mail is sent to your email Id
    </div>
    ');
    }
    else{
        echo "NO";
    }
?>