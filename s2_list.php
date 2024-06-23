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
  <title>Order placements</title>
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
  }
  h1{
    text-decoration: double underline green;
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
  cursor: pointer;
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
<center><h1>Old Delivery Reports</h1></center>




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
    <th>Status</th>
    <!-- <th>aaction</th> -->
  </tr>
  <!-- <a href="demo2.php"></a> -->
 <?php
 $s=  "delivered";

  $sql = "SELECT * FROM booking where `status`=  '$s' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <?php $s= $row['order-id']; ?>
    <td><?php echo $row['Customer_name']; ?></td>
    <td><?php echo $row['seller_type']; ?></td>
    <td><?php echo $row['phone_number']; ?></td>
    <td><?php echo $row['Delivery_time']; ?></td>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['count']; ?></td>
    <td><?php echo $row['cans_type']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <!-- <td><a href="books.php?pid=<?php echo $s;?>">take</a></td> -->
  </tr>
  <?php
  $i++;
}
}
$conn->close();
  ?>
  
</table>

</body>
</html>


