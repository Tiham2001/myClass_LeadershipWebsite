<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: rgb(234, 122, 122)
}

#regForm {
    background-color: #ffd2d2;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

#register{

  color: #fa0404;
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    /* -webkit-appearance: none; */
}
.tab input:focus{

  border:1px solid #fa3131 !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
    display: none
}

button {
    background-color: #f45454a8;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus{

  outline: none !important;
}

#prevBtn {
    background-color: #f45454a8
}


.all-steps{
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #c19191;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #d53535;
    opacity: 0.5;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: rgb(239, 205, 205);
   background: #ee2b2b;
   opacity: 1;

}



.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}

#submit {
    border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

#submit span {
    background-color: red;
    cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#submit span:after {
    content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#submit:hover span {
    padding-right: 25px;
}

#submit:hover span:after {
    opacity: 1;
  right: 0;
}
    </style>
</head>
<body style="background-color: rgb(207, 161, 168);;">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm" method="POST" action="educator_db.php">
                    <h1 id="register">Course Fill Form</h1>
                    <div class="all-steps" id="all-steps"> 
                      <span class="step"><i class="fa fa-user" aria-hidden="true"></i></span> 
                      <span class="step"><i class="fa fa-map-marker"></i></span>
                      <span class="step"><i class="fa fa-shopping-bag"></i></span>
                      <span class="step"><i class="fa fa-car"></i></span>
                    </div>
    
                    <div class="tab">
                      <h4>What's the subject of your course provided</h4>
                        <p>
                          <input placeholder="Topic..." oninput="this.className = ''" name="subject"></p>
                        
                    </div>

                    <div class="tab">
                      <h4>Is your Course Technical Or Management Or Others</h4>
                        <p><input placeholder="Domain" oninput="this.className = ''" name="domain"></p>
                        
                    </div>

                    <div class="tab">
                        <h4>In which Language are you providing the course</h4>
                        <p><input placeholder="Language" oninput="this.className = ''" name="language"></p>
                     
                    </div>
                    
                    <div class="tab">
                        <h4>What's your advice to the learners</h4>
                        <p><input placeholder="Advice...." oninput="this.className = ''" name="advice"></p>
                    </div>
                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thankyou for uploading the course!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                        <br> <br>
                        <p><ul>

                            <li><a href="educator_info.php">Upload Coarseb Again</a></li> <br> 
                            <li><a href="educator.php">Go Back to Educator Page</a></li>
                            <br> <br> 
                            
                            <button type="submit" name="database" class="submit">Confirm Upload</button>
                            <?php
                            if(isset($_POST["database"]))
                            {
                            $_SESSION["database"] = '1';
                            }
                            ?>
                        </ul>
                        </p>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                          <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {
              showTab(currentTab);
              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>
</html>