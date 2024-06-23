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
  <div class="header">
        
<style>
  body{
    background-image: url("https://wallpaperaccess.com/full/17948.jpg");
    color: white;
    font-family: times new roam;
    font-weight: 700;
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

<center><h1>freedback</h1></center>




<table id="customers">
  <tr>
    <th>s.no</th>
    <th>Customer Name</th>
    <th>Email</th>
    <!-- <th></th> -->
    <th>Feedback</th>
    <th>Date of Feedback</th>
    <!-- <th>No of cans</th> -->
    <!-- <th>can type</th> -->
    <!-- <th>action</th> -->
  </tr>
  <!-- <a href="demo2.php"></a> -->
 <?php
  $sql = "SELECT * FROM feedback ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=1;
  while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['feedback']; ?></td>
    <td><?php echo $row['date']; ?></td>
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


