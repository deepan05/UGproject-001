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
<!DOCTYPE html>
<html>
<head>
  <title> Monthly Order placements</title>
  <!-- <div class="header">
      <div class="header-left"><a href="seller_dashbord.php"><img src="images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a></div>
      <div class="header-right">
        <a href="../seller_dashbord.php"><img src="images/home_1.png" style="width: 65px; height: 60px;border-radius: 70px;"></a>
       </div>   -->
<style>
  body{
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    color: white;
    font-family: times new roam;
    font-weight: 700;
    /*font-size: 30px;*/
  }

  .content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
  .header-left{
    float: left;
  }
.header-right {
  float: right;
}
   button {
  background-color: orange; /* Green */
  border: none;
  color: white;
  padding: 15px 30px;
  border-radius: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}

#customers {
  font-family: times new roman, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
#customers td {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: lightblue;
  color: white;
}

</style>
</head>
<body>

<center><h1>Monthly Orders</h1></center>
<form method="POST">
  <label for="stating date" style="color: white; font-style: italic; font-size: 30px;"> Starting Date</label>
  <input type="date" name="start" id="start" >
  <label for="stating date"style="color: white; font-style: italic; font-size: 30px;"> Ending Date</label>
  <input type="date" name="end" id="end">
  <input type="submit" name="submit">
<!-- </form> -->
<table id="customers">
  <tr>
    <th>s.no</th>
    <th>Customer Name</th>
    <th>seller name</th>
    <th>phone number</th>
    <th>schedule</th>
    <th>Date to delivery</th>
    <th>No of cans</th>
    <th>can type</th>
    <!-- <th>action</th> -->
  </tr>
  <!-- <a href="demo2.php"></a> -->
 <?php
 $to=""; 
 $from="";
 if(isset($_POST["submit"]))
  if($_SERVER["REQUEST_METHOD"] == "POST")
{
 $from=date('Y-m-d',strtotime($_POST['start']));
 $to=date('Y-m-d',strtotime($_POST['end']));

}
  $sql = "SELECT * FROM booking where`Date` BETWEEN '$from' and '$to' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc()) {
   ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['Customer_name']; ?></td>
    <td><?php echo $row['seller_type']; ?></td>
    <td><?php echo $row['phone_number']; ?></td>
    <td><?php echo $row['Delivery_time']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['count']; ?></td>
    <td><?php echo $row['cans_type']; ?></td>
    <!-- <td><a href="bill.php?$d=<?php echo $row['Customer_name']; ?> ">Bill it</td> -->
  </tr>
  <?php
  $i++;
}
}
$conn->close();
  ?>
  
</table>
</form>
</body>
</html>
