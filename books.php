<?php
// error_reporting(0);
//connect databaseecho '<script type ="text/JavaScript">' 
$cname = $_GET['pid'];
$con=mysqli_connect("localhost","root","","water_supply") or die(mysqli_error());   
//select values from empInfo table
$sql = "SELECT * from `booking` WHERE `order-id` ='$cname'";
$result = mysqli_query($con,$sql);
// echo '<pre>';
// print_r(mysqli_fetch_row($result));
$customer_details = mysqli_fetch_row($result);
// print_r($customer_details);


// echo '</pre>'
?>
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
$sql="UPDATE `booking` SET `status` = 'Delivered' WHERE `booking`.`order-id` = '$cname'";
if ($conn->query($sql) === TRUE) 
{
  // echo "updated successfully";
  echo '<script type ="text/JavaScript">';
         echo 'alert("invalid user name (or) password")';
         echo '</script>';
  header("Location:./s_list.php");
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
 ?>