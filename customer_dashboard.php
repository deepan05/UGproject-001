
<?php
// error_reporting(0);
//connect databaseecho '<script type ="text/JavaScript">' 
$cname = $_GET['cid'];
$con=mysqli_connect("localhost","root","","water_supply") or die(mysqli_error());   
//select values from empInfo table
$sql = "SELECT * from `customers` WHERE costomer_name='$cname'";
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
  <title>customer_dashboard</title>
<!-- <link rel="stylesheet" type="text/css" href="../css/header_style.css"> -->
<div class="header">
  <div class="header-left"><a href="c_logout.php"><img src="images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a>
  <a href="#default" class="logo">
    <img src="images/Logo.png" width="70" ></a>
    
  </div>
  <div class="header-right">
    <a href="../customer_dashboard.php"><img src="images/home_1.png" style="width: 65px; height: 60px;border-radius: 68px;"></a></a>
    <a href="contact.php"><img src="images/contact_us.png" style="width: 90px; height: 60px;border-radius: 68px;"></a></a>
    <a href="about_water_supply.php"><img src="images/about.png" style="width: 100px; height: 60px;border-radius: 68px;"></a></a>
  </div>
</div>  
</head>
<style>
  * {box-sizing: border-box;}



.header {
  overflow: hidden;
  /*background-color: #f1f1f1;*/
  padding: 20px 10px;
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
  border-radius: 4px;
}

.header a.logo {
  width: 175px;
  height: 10px;
  border-radius: 50%;
  align-items: center;
}
.header-right {
    float: right;
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
.header-left {
  float: left;
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
    /* box-sizing:border-box; */
    float: none;
    display: block;
    text-align: left;
  }
  
 
}
img
{
Bahnschrift SemiBolddth: 50x;
}

   body {font-family: Verdana, sans-serif;
    background-image: url("images/bg2.jpg");
    color: white;
  }
  .mySlides {display: none;}
  img {vertical-align: middle;}
  h1{
    text-shadow:0 0 10px blue;
    color: black;
    font-family: times new roman,sans-serif;
    text-align: center;
    justify-content: center;
  }
  h2{
    text-shadow:0 5px 15px pink;
    color: white;
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
    margin-top: 20px;
    margin-right: 100px;
    margin-left: 30px;
    width: 480px;
    height: 460px;
    float: left ;
    background-image: url("images/bg1.svg");
    /*background-repeat: no-repeat;*/
    background-size: cover;
    box-shadow: 0px 0px 9px 10px lightgreen;
    /*background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
     border-radius: 5px 50px 5px 40px;
  }
  .content-left{
  float: right;
  margin-top: 50px;
  margin-right: 100px;
  height: 100px;
  width: 500px;
}
  .slideshow-container {
    box-sizing: border-box;
    box-shadow: 0px 0px 9px 10px black;

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
  height: 50%;
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
  <center><h1><?php echo "Welcome  ". trim($customer_details[1]); ?></h1></center>
  <div class="cos">
    <div class="imgcontainer">
      <img src="http://localhost/water_supply/demo/admin/<?php echo $customer_details[9]?>" style="border-radius:50px;height: 85px; width: 100px;">
    <!-- <img src="<?php echo $customer_details[10] ?>" alt="Avatar" class="avatar"> -->
  </div>

  <!-- <h2>WELCOME</h2> -->
  <center><div class="amc"> 
    <!-- <input type="text" name="" value="<?php echo $customer_details[0]; ?>"> -->
    
    <a href="admin/customer_edit.php?pid=<?php echo $customer_details[5]; ?>"><button>Edit</button></a><br>
    <a href="feedback.php?pid=<?php echo $cname;?>"><button>Feedback</button></a>
    <a href="admin/Booking.php?pid=<?php echo $customer_details[0]; ?>"><button>Book</button></a> 
  </div>
</div></center>
<div class="content-left">
  <div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <!-- <img src="images/p1.jpeg" style="width:100%"> -->
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
   <!-- <img src="images/p2.jpeg" style="width:100%"> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
     <!-- <img src="images/p3.jpeg" style="width:100%"> -->
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <!-- <img src="images/p4.jpg" style="width:100%"> -->
  <!-- <div class="text">Caption Three</div> -->
</div>
<div class="mySlides fade">
  <!-- <div class="numbertext">5 / 5</div> -->
  <img src="images/p5.png" style="width:100%">
</div>
<!-- <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
    <img src="images/s1.jpeg" style="width:100%">
</div> -->
<!-- <div class="mySlides fade">
  <div class="numbertext">5 / 5</div> 
  <p>7. Water helps maintain blood pressure</p>
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
   <div class="numbertext">5 / 5</div>
  <p>8. Water makes minerals and nutrients accessible</p>
   <div class="text">Caption Text</div> 
</div>
<div class="mySlides fade">
   <div class="numbertext">5 / 5</div> 
  <p>9. Water boosts performance during exercise</p>  
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div> 
  <p>10. Water helps with weight loss</p>
  <div class="text">Caption Text</div>
</div> -->
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <!-- <span class="dot"></span> -->
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body></html>