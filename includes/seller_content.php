<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "water_supply";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
//connect database 
$sname = $_GET['cid'];
$con=mysqli_connect("localhost","root","","water_supply") or die(mysqli_error());   
//select values from empInfo table
$sql = "SELECT * from `sellers` WHERE user_name='$sname'";
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
  <title>seller dashboard</title>
  <meta charset="utf-8">
<div class="header">
  <div class="header-left"><a href="../s_logout.php"><img src="../images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a></div>
  <a href="#default" class="logo">
<img src="https://i.pinimg.com/originals/4f/a8/cc/4fa8ccd95866db239face1f4749df505.png" width="56" ></a>

  <div class="header-right">
    <a href="seller_content.php"><img src="../images/home_1.png" style="width: 65px; height: 60px;border-radius: 68px;"></a></a>
  </div>
</div>  
</head>
<body>
  <center><h1><?php echo "Welcome:)".$customer_details[1];; ?></h1></center>
  <style type="text/css">
    * {box-sizing: border-box;}



.header {
  overflow: hidden;
  background-color: transparent;
  padding: 20px 10px;
  box-shadow: 0px 0px 9px 10px white;
  font-weight: 700;
  font-size: 30px;
  color: black;
  text-transform: capitalize;
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
  box-shadow: 0px 0px 9px 10px white;

}
.header-left{
  float: left;
  box-shadow: 0px 0px 9px 10px white;

}
/*.banner center h1{
  font-family: times new roman, sans-serif;
  font-weight: 800;
  background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent
}*/
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
h1{
    text-shadow:0 0 10px red;
    color: black;
    font-family: times new roman,sans-serif;
    text-align: center;
    font-style: italic;
    font-weight: 700;
    /*font-size: 20px;*/
  }
img
{
Bahnschrift SemiBolddth: 50x;
}

  </style>
<link rel="stylesheet" type="text/css" href="dashboard_content.css">
<style type="text/css">
  body {font-family: times new roman, sans-serif;}
  .mySlides {
    display: none;
  }
body { font-size: 3.5em }
.content-right{
  box-shadow: 0px 0px 9px 10px black;
  margin-top: 150px;
  margin-right: 150px;
  float: right;
}
  img {vertical-align: middle;}
  .slideshow-container {
  /*max-width: 400px;*/
  height: 110px;
  /*position: absolute;*/
  margin-right: 150px;
  margin-left: 50px;
  }
  /*.text {
  color: #f2f2f2;
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

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
}
</style>
<div class="content-right">
  <video width="400" height="226" autoplay  loop="true"> 
  <source src="../images/Save_the_water_WhatsApp_status(360p).mp4" type="video/mp4">
    <source src="images/Save_the_water_WhatsApp_status(360p).ogg" type="video/ogg">
  </video>
</div>
<!-- <div class="content-left">
 <h2>CUSTOMER:</h2> 
  <div class="amc">
   <a href="../admin/seller_edit.php?pid=<?php echo $sname; ?>"><button>edit</button></a>
   <a href="../admin/seller_edit.php"><button>Feedback</button></a>
   <a href="../admin/seller_edit.php?pid=<?php echo $sname; ?>"><button>edit</button></a>
 </div>
</div> --><div class="cos">
    <div class="imgcontainer">
      <img src="http://localhost/water_supply/demo/admin/<?php echo $customer_details[7]?>" style="border-radius:50px;height: 85px; width: 100px;">
    <!-- <img src="<?php echo $customer_details[10] ?>" alt="Avatar" class="avatar"> -->
  </div>

  <!-- <h2>WELCOME</h2> -->
  <center><div class="amc"> 
    <!-- <input type="text" name="" value="<?php echo $customer_details[0]; ?>"> -->
    
    <a href="../admin/seller_edit.php?pid=<?php echo $customer_details[0]; ?>"><button>Edit</button></a>
    <a href="../vfeedback.php"><button>Feedback</button></a>
    <a href="../new_book.php"><button>Book</button></a> 
  </div>
</div></center>
<style type="text/css">
  /** {box-sizing: border-box;}*/

body {
  font-family: 'times new roman', sans-serif;
  font-size: 20px;
  color: white;
  background-image: url("https://wallpaperaccess.com/full/17948.jpg");
  /*background: -webkit-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: -o-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: -moz-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  /*background-image: url(pic2.jpeg);*/*/
  background-color: black;
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
.amc{
  box-sizing: content-box;
  align-items: center ;
  width: 250px ;
  height: 50%;
  /*background-color: red;*/
   /*box-shadow: 0px 0px 9px 10px black;*/
}

.container {
  float: left;
  width: 600px;
  margin-top: 70px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 5px;
  /*background-image: url(./images/water-drop.jpeg);*/
}

h2 {
  border-style: double red ;
  font-size: 20px;
  margin: 20px 0;
  text-align: center;
  smal
    font-size:0.5em;
}
.responsive-table 
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {

    background-color: darkviolet;
    /*background-color: transparent;*/
    box-shadow: 0px 0px 9px 10px lightgreen;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }
  .table-row {
    background-color: darkviolet;
    box-shadow: 0px 0px 9px 10px lightgreen;
  }
    
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before 
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
</style>
</div>