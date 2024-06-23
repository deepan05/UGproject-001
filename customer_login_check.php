<meta charset="utf-8">

<?php
   // include("admin/config/config.php");
   //exit;
   //echo $_POST['username'].$_POST['password'];
   //session_start();
$db = mysqli_connect('localhost','root','','water_supply');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myuser_name = mysqli_real_escape_string($db,$_POST['customer_name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
   
      $sql = "SELECT * FROM `customers` WHERE `costomer_name` = '$myuser_name' and `password` = '$mypassword'";
      
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // echo $count;
      // exit;
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
         session_start();
         // session_register("myusername");
         $_SESSION['login_user'] = $myuser_name;
          $cid = $_SESSION['login_user'];
          //exit;
         header("location: customer_dashboard.php?cid=$cid");
      }
      else {
         // echo '<script type="text/javascript">';
         // echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
         // echo '</script>'; 
         header("location: costomer_login.php?id=1"); 
          }
   }
?>