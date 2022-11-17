<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      *{
        /* background-color: rgb(250, 222, 226); */
      }
    .firstPage{
    background-image: url("https://img.freepik.com/free-photo/chicken-wings-barbecue-sweetly-sour-sauce-picnic-summer-menu-tasty-food-top-view-flat-lay_2829-6471.jpg?w=2000");
    background-repeat: no-repeat;
    background-size: 100%;
}
.resturant-web{
    color:white;
    font-family: 'Fredoka One', cursive;
    letter-spacing: 2px;
}
.textFirst{
    padding-top:12%;
    padding-bottom:12%;
    padding-left:2%;
    font-size: 2.5rem;
    color:white;
    width:30%;
    text-align: center;
    font-family: 'Fredoka One', cursive;
}
.si{
    padding-left:8%;
    padding-right: 8%;
    padding-top:1%;
    padding-bottom:1%;
    /* margin-left:5px; */
    background-color:rgb(250, 222, 226);
    font-weight: 700;
    font-size: 1.2rem;
    border:0px;
}
.si:hover{
    background-color: black;
    color:black;
    transition:0.4s;
}
.ni{
    padding-left:8%;
    padding-right: 8%;
    padding-top:1%;
    padding-bottom:1%;
    /* margin-left:5px; */
    background-color:#76B947;
    font-weight: 700;
    font-size: 1.2rem;
    border:0px;
}
.ni:hover{
    background-color:black;
    color:rgb(156, 247, 21);
    transition:0.4s;
}
.ci{
    padding-left:8%;
    padding-right: 8%;
    padding-top:1%;
    padding-bottom:1%;
    /* margin-left:5px; */
    background-color:pink;
    font-weight: 700;
    font-size: 1.2rem;
    border:0px;
}
.ci:hover{
    background-color: black;
    color:pink;
    transition:0.4s;
}
.di{
    padding-left:8%;
    padding-right: 8%;
    padding-top:1%;
    padding-bottom:1%;
    /* margin-left:5px; */
    background-color:orange;
    font-weight: 700;
    font-size: 1.2rem;
    border:0px;
}
.di:hover{
    background-color: black;
    color:orange;
    transition:0.4s;
}
.thirdText{
    font-size: 1.5rem;
    /* padding-top:5%;   */
    /* padding-top:10%; */
    /* padding-bottom:10%; */
}
/* .vegText{
    background-color:#88CA5E ;
    padding-top:20%;
    padding-bottom:20%;
}
.nvegText{
    background-color: #ef565b;
    padding-top:20%;
    padding-bottom:20%;
} */
/* .dishes{
    display: flex;
    flex-direction: row;
} */
.dishPic{
    width:50%;
}
/* .dishText{ */
    /* padding-left:10%; */
    /* padding-top:2%; */
    /* background-color: pink; */
    /* padding-right:0%; */
/* } */
/* .priceDish{ */
    /* padding-top:7%; */
/* } */
.dishFlex{
    display: flex;
    flex-direction: row;
}
.dishFlex{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding-top:5%;
}
img{
    width:80%;
}
.north{
    background-color:#cdf5b0 ;
    padding-bottom:3%;
}
.south{
    background-color:rgb(236, 173, 173);
    padding-bottom:3%;
}
.continental{
    background-color:rgb(247, 200, 208);
    padding-bottom:3%;
}
.desert{
    background-color:rgb(249, 203, 118);
    padding-bottom:3%;
}
.card:hover{
    border:2px solid black;
    background-color: black;
    opacity: 0.8;
    color:white;
}
.card-text{
    font-size: 20px;
    font-weight: 600;
    font-family: 'Ubuntu', sans-serif;
    letter-spacing: 1px;
}
.card-Dish{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.Dishprice{
    color:#59af1b;
    font-size: 20px;
    font-weight: 800;
}
.online{
    text-align: center;
    font-size: 1.8rem;
    font-weight: 500;
    color:white;
    background-color:#422215;
}
.fourthPage{
    display: flex;
    flex-direction: row;
    background-color: bisque;
}
.featText{
    text-align: center;
}
.featCard{
    margin-left:7%;
    margin-top:5%;
    margin-bottom:5%;
}
.oldText{
    padding-top:2%;
    text-align: center;
    background-color:#422215;
    color:white;
    padding-bottom:2%;
    font-weight: 700;
    margin-bottom:0px;
}
.icon{
    padding-right:1%;
}
.sixthPage{
    background-image: url("https://assets.cntraveller.in/photos/62988ba974e2baa4e2fc008d/16:9/w_1280,c_limit/new%20restaurants%20in%20Mumbai%20lead.png");
    background-repeat: no-repeat;
    background-size: 100%;
    margin:0px;
    
    padding:5%;
    /* margin-bottom:3%; */
}
.pageSix{
    display: flex;
    flex-direction: column;
    margin-left:25%;
    margin-right:25%;
    border:0px solid white;
    padding-left:4%;
    padding-right:4%;
    padding-top:2%;
    padding-bottom:2%;
    background-color: #422215;}
.textSix{
    text-align: center;
    font-size: 2rem;
    font-weight: 700;
    color:white;
    text-decoration: underline;
}
.bigText{
    text-align: center;
    font-size: 1.1rem;
    color:rgb(244, 207, 213);
}
.fifthPage{
    margin-bottom:0px;
    padding-bottom:0px;
}
.minus{
    background-color: red;
    padding-left:12%;
    padding-right:12%;
    margin-right:1%;
    border:0px;
    border-radius:5px;
}
.billing{
    margin-left:44%;
    margin-top:5%;
    padding-top:1%;
    padding-bottom:1%;
    padding-left:3%;
    padding-right:3%;
    background-color:rgb(236, 173, 173);
    color:black;
    font-weight: 700;
}
.billfull{
    text-decoration: none;
    color: white;
}
.billing:hover{
    background-color: white;
    color:black;
}
.minus:hover{
    background-color: rgb(240, 57, 57);
    transition:0.5s;
}
.add{
    background-color: green;
    padding:1%;
    padding-left:12%;
    padding-right:12%;  
    margin-left:1%;
    border:0px;
    border-radius:5px;
}
.add{
    background-color: rgb(60, 174, 60);
    transition:0.5s;
}
.basket{
    margin-left:20%;
}

.newFlex{
  margin-left:35%;
  margin-top:2%;
  border:2px solid black;
  margin-right:35%;
  padding:2%;
  background-color:#FF5555;
}
.heading{
            margin-top:1%;
            text-align:center;
            font-size:2rem;
        }
        .total{
            text-align:center;
            margin-top:0.5%;
            font-size:1.4rem;
        }
        .item{
            /* background-color:#FF5555; */
            color:white;
        }
        .price{
            /* background-color:#FF5555; */
            color:white;
        }
        .pay{
            font-size:1.3rem;
            color:white;
            margin-top:1%;
            background-color:green;
            padding-left:5%;
            padding-right:5%;
            padding-top:1%;
            padding-bottom:1%;
            border:5px solid white;
            margin-left:38%;
        }
        .pay:hover{
            background-color:white;
            color:green;
            border:5px solid green;
            transition:0.4s;
        }
      </style>
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
<script>

var num1 = 0;
var num2 = 0;
var num3 = 0;
var num4 = 0;
var num5 = 0;
var num6 = 0;
var num7 = 0;
var num8 = 0;
var num9 = 0;
var num10 = 0;
var num11 = 0;
var num12 = 0;

function minusing1()
{
  var pricePut1 = document.querySelector(".pricePut1");
  if(num1 == 0)
  {
    pricePut1.innerHTML = `${num1}`;
  }
  else
  {
  num1 = num1-1;
  pricePut1.innerHTML = `${num1}`;
  }
}
function add1()
{
  var pricePut1 = document.querySelector(".pricePut1");
  num1 = num1+1;
  pricePut1.innerHTML = `${num1}`;
}


function minusing2()
{
  var pricePut2 = document.querySelector(".pricePut2");
  if(num2 == 0)
  {
    pricePut2.innerHTML = `${num2}`;
  }
  else
  {
  num2 = num2-1;
  pricePut2.innerHTML = `${num2}`;
  }
}
function add2()
{
  var pricePut2 = document.querySelector(".pricePut2");
  num2 = num2+1;
  pricePut2.innerHTML = `${num2}`;
}


function minusing3()
{
  var pricePut3 = document.querySelector(".pricePut3");
  if(num3 == 0)
  {
    pricePut3.innerHTML = `${num3}`;
  }
  else
  {
  num3 = num3-1;
  pricePut3.innerHTML = `${num3}`;
  }
}
function add3()
{
  var pricePut3 = document.querySelector(".pricePut3");
  num3 = num3+1;
  pricePut3.innerHTML = `${num3}`;
}


function minusing4()
{
  var pricePut4 = document.querySelector(".pricePut4");
  if(num4 == 0)
  {
    pricePut4.innerHTML = `${num4}`;
  }
  else
  {
  num4 = num4-1;
  pricePut4.innerHTML = `${num4}`;
  }
}
function add4()
{
  var pricePut4= document.querySelector(".pricePut4");
  num4 = num4+1;
  pricePut4.innerHTML = `${num4}`;
}


function minusing5()
{
  var pricePut5 = document.querySelector(".pricePut5");
  if(num5 == 0)
  {
    pricePut5.innerHTML = `${num5}`;
  }
  else
  {
  num5 = num5-1;
  pricePut5.innerHTML = `${num5}`;
  }
}
function add5()
{
  var pricePut5 = document.querySelector(".pricePut5");
  num5= num5+1;
  pricePut5.innerHTML = `${num5}`;
}


function minusing6()
{
  var pricePut6 = document.querySelector(".pricePut6");
  if(num6 == 0)
  {
    pricePut6.innerHTML = `${num6}`;
  }
  else
  {
  num6 = num6-1;
  pricePut6.innerHTML = `${num6}`;
  }
}
function add6()
{
  var pricePut6 = document.querySelector(".pricePut6");
  num6= num6+1;
  pricePut6.innerHTML = `${num6}`;
}

function minusing7()
{
  var pricePut7 = document.querySelector(".pricePut7");
  if(num7 == 0)
  {
    pricePut7.innerHTML = `${num7}`;
  }
  else
  {
  num7 = num7-1;
  pricePut7.innerHTML = `${num7}`;
  }
}
function add7()
{
  var pricePut7 = document.querySelector(".pricePut7");
  num7= num7+1;
  pricePut7.innerHTML = `${num7}`;
}

function minusing8()
{
  var pricePut8 = document.querySelector(".pricePut8");
  if(num8 == 0)
  {
    pricePut8.innerHTML = `${num8}`;
  }
  else
  {
  num8 = num8-1;
  pricePut8.innerHTML = `${num8}`;
  }
}
function add8()
{
  var pricePut8 = document.querySelector(".pricePut8");
  num8= num8+1;
  pricePut8.innerHTML = `${num8}`;
}

function minusing9()
{
  var pricePut9 = document.querySelector(".pricePut9");
  if(num9 == 0)
  {
    pricePut9.innerHTML = `${num9}`;
  }
  else
  {
  num9 = num9-1;
  pricePut9.innerHTML = `${num9}`;
  }
}
function add9()
{
  var pricePut9 = document.querySelector(".pricePut9");
  num9= num9+1;
  pricePut9.innerHTML = `${num9}`;
}

function minusing10()
{
  var pricePut10 = document.querySelector(".pricePut10");
  if(num10 == 0)
  {
    pricePut10.innerHTML = `${num10}`;
  }
  else
  {
  num10 = num10-1;
  pricePut10.innerHTML = `${num10}`;
  }
}
function add10()
{
  var pricePut10 = document.querySelector(".pricePut10");
  num10= num10+1;
  pricePut10.innerHTML = `${num10}`;
}

function minusing11()
{
  var pricePut11 = document.querySelector(".pricePut11");
  if(num11 == 0)
  {
    pricePut11.innerHTML = `${num11}`;
  }
  else
  {
  num11 = num11-1;
  pricePut11.innerHTML = `${num11}`;
  }
}
function add11()
{
  var pricePut11 = document.querySelector(".pricePut11");
  num11= num11+1;
  pricePut11.innerHTML = `${num11}`;
}

function minusing12()
{
  var pricePut12 = document.querySelector(".pricePut12");
  if(num12 == 0)
  {
    pricePut12.innerHTML = `${num12}`;
  }
  else
  {
  num12 = num12-1;
  pricePut12.innerHTML = `${num12}`;
  }
}
function add12()
{
  var pricePut12 = document.querySelector(".pricePut12");
  num12 = num12+1;
  pricePut12.innerHTML = `${num12}`;
}
var total = (num1+num2+num3+num4+num5+num6+num7+num8+num9+num10+num11+num12)*100; 
function saveFile(total)
        {
            const date = new Date();
            let day = date.getDate();
            let month = date.getMonth() + 1;
            let year = date.getFullYear();
            let currentDate = `${day}-${month}-${year}`;
            var data = "";
            if(num1!=0)
            {
              data = data + "You have purchased Succession Planning course and your pdf password is - myClassSuccesion123 \n \n" ;
            }
            if(num2!=0)
            {
              data = data + "You have purchased Emotional Intelligence course and your pdf password is - myClassEmotional123 \n \n";
            }
            if(num3!=0)
            {
              data = data + "You have purchased Team Management course and your pdf password is - myClassTeam123 \n \n";
            }
            if(num4!=0)
            {
              data = data + "You have purchased Work-Life Balance course and your pdf password is - myClassWorkLife123 \n \n";
            }
            if(num5!=0)
            {
              data = data + "You have purchased Managing Feedback course and your pdf password is - myClassManagingFeedback123 \n \n";
            }
            if(num6!=0)
            {
              data = data + "You have purchased Sales Excellence course and your pdf password is - myClassSales123 \n \n";
            }
            if(num7!=0)
            {
              data = data + "You have purchased Accountability course and your pdf password is - myClassAccountability123 \n \n";
            }
            if(num8!=0)
            {
              data = data + "You have purchased Change Management course and your pdf password is - myClassChangeManagement123 \n \n";
            }
            if(num9!=0)
            {
              data = data + "You have purchased Leadership Development course and your pdf password is - myClassLeadership123 \n \n";
            }
            if(num10!=0)
            {
              data = data + "You have purchased Uncertainity and ambiguity course and your pdf password is - myClassUncertainity123 \n \n";
            }
            if(num11!=0)
            {
              data = data + "You have purchased Delegation, Empowerment course and your pdf password is - myClassDelegation123 \n \n";
            }
            if(num12!=0)
            {
              data = data + "You have purchased Goal-Setting course and your pdf password is - myClassGoal123 \n \n";
            }
            const textToBLOB = new Blob([data], {type: 'text/plain'});
            const sFileName = 'Download.txt'; // The file to save the data.
            let newLink = document.createElement("a");
            newLink.download = sFileName;
            if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
            }
            else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
            }
            newLink.click();
          }
function billGen()
{
  total = (num1+num2+num3+num4+num5+num6+num7+num8+num9+num10+num11+num12)*100;
  var genn = document.querySelector(".gen");
  genn.innerHTML = `
  <div class="newFlex">
    <i class="item" style="color:white;">Succession Planning programme --- </i> <b class="price">${num1}</b><br>
    <i class="item">Emotional Intelligence programme --- </i> <b class="price">${num2}</b><br>
    <i class="item">Team Management programme --- </i> <b class="price">${num3}</b><br>
    <i class="item">Work-Life Balance programme --- </i> <b class="price">${num4}</b><br>
    <i class="item">Managing Feedback, difficult conversations - </i> <b class="price">${num5}</b><br>
    <i class="item">Sales Excellence programme --- </i> <b class="price">${num6}</b><br>
    <i class="item">Accountability --- </i> <b class="price">${num7}</b><br>
    <i class="item">Change Management ---</i> <b class="price">${num8}</b><br>
    <i class="item">Leadership Development --- </i> <b class="price">${num9}</b><br>
    <i class="item">Uncertainity and ambiguity --- </i> <b class="price">${num10}</b><br>
    <i class="item">Delegation, Empowerment --- </i> <b class="price">${num11}</b><br>
    <i class="item">Goal-Setting --- </i><b class="price">${num12}</b><br>
    </div>
    <div class="heading">Total Bill</div>
    <div class="total">Total bill is ${total} </div>
    <input class="pay" type='button' id='bt' value='Pay and Download' onclick='saveFile(total)'>
    `;
  }
</script>


    <section class="south">
    <div class="dishFlex">
    <div class="card" style="width: 18rem;">
    <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Succession Planning programme</p>
    <p class="Dishprice">$100</p>
    </div>
    <p class="basket"><button class="minus" onClick="minusing1()">-</button><b class="pricePut1"> 0 </b><button class="add" onClick="add1()">+</button></p>
  </div>
 
  </div>
<div class="card" style="width: 18rem;">
<img src="https://st2.depositphotos.com/3889193/7829/i/600/depositphotos_78294064-stock-photo-executive-standing-in-his-office.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Emotional Intelligence programme</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing2()">-</button><b class="pricePut2"> 0 </b><button class="add" onClick="add2()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="card-3-image (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Team Management programme</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing3()">-</button><b class="pricePut3"> 0 </b><button class="add" onClick="add3()">+</button></p>
  </div>
  </div>
</div>
<div class="dishFlex">
<div class="card" style="width: 18rem;">
<img src="https://dailytravelpill.com/wp-content/uploads/2022/04/work-life-balance-digital-nomad-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Work-Life Balance programme</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing4()">-</button><b class="pricePut4"> 0 </b><button class="add" onClick="add4()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://www.managementcentre.co.uk/wp-content/uploads/Giving-and-receiving-feedback-500x500.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Managing Feedback and difficult conversations</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing5()">-</button><b class="pricePut5"> 0 </b><button class="add" onClick="add5()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://virkon.dk/wp-content/uploads/2017/11/Virkon-thumbnail21.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Sales Excellence programme</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing6()">-</button><b class="pricePut6"> 0 </b><button class="add" onClick="add6()">+</button></p>
  </div>
</div>
</div>
<div class="dishFlex">
<div class="card" style="width: 18rem;">
<img src="https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/WORKPLACEV9CMS/-ntvpef-t0umodri5ef9dw.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Accountability</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing7()">-</button><b class="pricePut7"> 0 </b><button class="add" onClick="add7()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://cdn.elearningindustry.com/wp-content/uploads/2016/04/change-management-3-reasons-training-supports-organizational-change-r100-1024x569.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Change Management</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing8()">-</button><b class="pricePut8"> 0 </b><button class="add" onClick="add8()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://www.upskillist.com/static/9a95ea7b5534a941347405925090c115/27f16/website-wide.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Leadership Development</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing9()">-</button><b class="pricePut9"> 0 </b><button class="add" onClick="add9()">+</button></p>
  </div>
</div>
</div>
<div class="dishFlex">
<div class="card" style="width: 18rem;">
<img src="https://www.verywellmind.com/thmb/o2imihXRxV40wDOr1Djz-C8_jAg=/500x350/filters:no_upscale():max_bytes(150000):strip_icc()/iStock_93170915_MEDIUM-579b8c095f9b589aa9380581.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Uncertainity and ambiguity</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing10()">-</button><b class="pricePut10"> 0 </b><button class="add" onClick="add10()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://www.zandax.com/wordpress/wp-content/uploads/2016/05/Delegate-to-the-best-person-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Delegation, Empowerment</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing11()">-</button><b class="pricePut11"> 0 </b><button class="add" onClick="add11()">+</button></p>
  </div>
</div>
<div class="card" style="width: 18rem;">
<img src="https://www.sassyhongkong.com/wp-content/uploads/2020/12/set-realistic-goals-2021-health-wellness-500x500.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="card-Dish">
    <p class="card-text">Goal-Setting</p>
    <p class="Dishprice">$100</p>
  </div>
  <p class="basket"><button class="minus" onClick="minusing12()">-</button><b class="pricePut12"> 0 </b><button class="add" onClick="add12()">+</button></p>
  </div>
</div>
</div>
<button name="getbill" class="billing" onclick="billGen()"> Generate Bill </a></button>
<br>
<div class="gen">
</div>
</section>
</body>
</html>