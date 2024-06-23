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
  <div class="header-left"><a href="s_logout.php"><img src="../images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a></div>
  <a href="#default" class="logo">
<img src="https://i.pinimg.com/originals/4f/a8/cc/4fa8ccd95866db239face1f4749df505.png" width="56" ></a>
<?php echo "Welcome:)".$customer_details[1];; ?>
<img src="http://localhost/water_supply/demo/admin/<?php echo $customer_details[7]?>" style="border-radius:50px;height: 100px; width: 110px; float: left ;">
  <div class="header-right">
    <a href="seller_dashbord.php"><img src="../images/home_1.png" style="width: 65px; height: 60px;border-radius: 68px;"></a></a>
  </div>
</div>  
</head>
<body>
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

  </style>
</body>
</html>