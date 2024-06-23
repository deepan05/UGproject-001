<?php
//connect database 
$sname = $_GET['cid'];
$con=mysqli_connect("localhost","root","","water_supply") or die(mysqli_error());   
//select values from empInfo table
$sql = "SELECT * from `supply_persons` WHERE user_name='$sname'";
$result = mysqli_query($con,$sql);
// echo '<pre>';
// print_r(mysqli_fetch_row($result));
$customer_details = mysqli_fetch_row($result);
// print_r($customer_details);


// echo '</pre>';


mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>supply_person_dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/header_style.css">
<div class="header">
  <div class="header-left"><a href="sp_logout.php"><img src="images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a></div>
  <a href="#default" class="logo">

<img src="https://i.pinimg.com/originals/4f/a8/cc/4fa8ccd95866db239face1f4749df505.png" width="90" ></a>

  <div class="header-right">
    <a href="../customer_dashboard.php"><img src="images/home_1.png" style="width: 65px; height: 60px;border-radius: 68px;"></a></a>
    <a href="contact.php"><img src="images/contact_us.png" style="width: 90px; height: 60px;border-radius: 68px;"></a></a>
    <a href="about_water_supply.php"><img src="images/about.png" style="width: 100px; height: 60px;border-radius: 68px;"></a></a>
  </div>
  <h2><?php echo "Welcome:)".$customer_details[1];;?></h2>
</div>  
</head>
<style>
  * {box-sizing: border-box;}



.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px; 
  border-radius: 30px;
}

.header a {
  font-family: times new roman, sans-serif;
  font-weight: 700;
  float: left;
  color: black;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 22px; 
  line-height: 25px;
  border-radius: 10px;
}

.header a.logo {
  width: 175px;
  height: 10px;
  border-radius: 50%;
  align-items: center;
}

.header a:hover {
  /*background-color: skyblue;*/
  color: black;
}

.header a.active {
  /*background-color: dodgerblue;*/
  color: white;
}
.header a .active:hover{
  /*color: skyblue;*/
}
.header a.deepan {
  /*background-color: green;*/
  /*color: black;*/
}
.header a .deepan:hover{
  color: blue;
  }
.header-right {
  float: right;
}h2{
    text-shadow:0 0 10px red;
    color: black;
    font-family: times new roman,sans-serif;
    text-align: center;
    font-style: italic;
    font-weight: 700;
    /*font-size: 20px;*/
  }
.banner center h1{
  font-family: times new roman, sans-serif;
  font-weight: 800;
  background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
img
{
Bahnschrift SemiBolddth: 50x;
}

   body {font-family: Verdana, sans-serif;
    background-image: url(https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/129325364/original/afaddcb9d7dfaaf5bff7ef04101935814665ac16/design-an-attractive-background-for-your-website.png);
    color: white;}
  .mySlides {display: none;}
  img {vertical-align: middle;}
  h1{
    text-shadow:0 0 10px white;
    color: red;
    font-family: times new roman,sans-serif;
    text-align: center;
  }
  .header.header-left{
    float: left;
  }
  img.avatar {
  width: 30%;
  height: 32%;
  align-content: center;
  border-radius: 50%;
  /*margin-right: 500px;*/
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
  .cos{
    box-sizing: border-box;
    margin-top: 30px;
    margin-right: 50px auto;
    width: 550px;
    height: 560px;
    float: left ;
    border-radius: 5px 70px 5px;
    background-image: url("images/bg1.svg");
    /*background-repeat: no-repeat;*/
    background-size: cover;
    box-shadow: 0px 0px 9px 10px green;
    /*background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
  }
  .content-left{
  float: right;
  margin-top: 50px;
  margin-right: 200px;
  height: 200px;
  width: 500px;
}
  .slideshow-container {
    box-sizing: border-box;
    box-shadow: 0px 0px 9px 10px white;

  /*max-width: 400px;*/
  height: 100px;
  /*position: absolute;*/
  margin-right: 200px;
  margin-left: 50px;
  }
  /*.text {
  color: red;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}*/

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.amc{
  box-sizing: content-box;
  align-items: center ;
  width: 250px ;
  height: 70%;
  /*background-color: red;*/
   /*box-shadow: 0px 0px 9px 10px black;*/
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
button{
   height: 45px;
   margin: 35px 0;
 }
button{
   /*height: 100%;*/
   /*width: 100%;*/
   border-radius: 5px;
   border: none;
   /*align-items: center;*/
   font-family: times new roman;
   color: black;
   font-size: 38px;
   font-weight: 700;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
    box-shadow: 0px 0px 9px 10px white;

}
button:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
}
</style>
<body>
<div class="content-right">
  <video width="400" height="226" autoplay  loop="true"> 
  <source src="images/Save_the_water_WhatsApp_status(360p).mp4" type="video/mp4">
    <source src="images/Save_the_water_WhatsApp_status(360p).ogg" type="video/ogg">
  </video>
</div>
  <div class="cos">
    <div class="imgcontainer">
    <img src="http://localhost/water_supply/demo/admin/<?php echo $customer_details[11]?>" style="border-radius:50px;height: 85px; width: 100px;">
  </div>

  <h1>WELCOME</h1>
  
  <center><div class="amc"> 
    <a href="s_list.php?pid=<?php echo $customer_details[0]?>"><button>ORDERS</button></a>
    <a href="admin/supply_person_edit.php?pid=<?php echo $customer_details[0]?>"><button>Edit Profile</button></a>
    <a href="vfeedback.php"><button>FEEDBACK</button></a> 
  </div>
</div></center>
</body>
<div class="stickys">
    <a href="https://api.whatsapp.com/send?phone=+919092837344" target="_blank"><img src="images/what's app.png" style="width: 40px;"> </a><span>Whatsapp</span>
</div>
<div class="stickys1">
    <a href="tel:+916369293703" target="_blank"><img src="images/call.png" style="width: 40px;"> </a><span>Call Us</span>
</div>
<style type="text/css">
  .content-right{
  box-shadow: 0px 0px 9px 10px black;
  margin-top: 150px;
  margin-right: 150px;
  float: right;
}
    .stickys{
  position: -webkit-sticky;
  position: fixed;
  float:right;
  right: 20px;
  bottom: 1px;
  transform: translateY(-50%); 
}
.stickys span{
 font-family: 'Raleway', sans-serif;
    font-size:14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    bottom: 0;
    right: 47px;
    line-height: 38px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 0;
    color:white;
    -webkit-transition: 0.50s;
    -moz-transition: 0.50s;
    transition: 0.50s;
}
.stickys:hover span{
  width:auto; padding:0 30px;overflow:visible;
}
.stickys span{
   background-color:#0651a9de;
    color:#fff;
    border-radius: 60px;
}
.stickys1{
  position: -webkit-sticky;
  position: fixed;
  float:right;
  bottom: 0;
  padding-top:0px;
  left: 20px;
  transform: translateY(-50%); 
}
.stickys1 span{
 font-family: 'Raleway', sans-serif;
    font-size:14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    bottom: 0;
    left: 47px;
    line-height: 38px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 0;
    color:white;
    -webkit-transition: 0.50s;
    -moz-transition: 0.50s;
    transition: 0.50s;
}
.stickys1:hover span{
  width:auto; padding:0 30px;overflow:visible;
}
.stickys1 span{
   background-color:#0651a9de;
    color:#fff;
    border-radius: 60px;
}
.stickys2{
  position: -webkit-sticky;
  position: fixed;
  float:right;
  right: 20px;
  bottom: 55px;
  transform: translateY(-50%); 
}
.stickys2 span{
 font-family: 'Raleway', sans-serif;
    font-size:14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    bottom: 0;
    right: 47px;
    line-height: 38px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 0;
    color:white;
    -webkit-transition: 0.50s;
    -moz-transition: 0.50s;
    transition: 0.50s;
}
.stickys2:hover span{
  width:auto; padding:0 30px;overflow:visible;
}
.stickys2 span{
   background-color:#0651a9de;
    color:#fff;
    border-radius: 60px;
}
</style>
</html>
