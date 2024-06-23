<!-- <div class="alert-warning">
  <span class="closebtn">&times;</span>  
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>


<style>
.alert-warning {
  padding: 20px;
  background-color: #ff9800;;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert {background-color: }
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style> -->
<meta charset="utf-8">

<?php
   include("config/config.php");
   //exit;
   //echo $_POST['username'].$_POST['password'];
   //session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myuser_name = mysqli_real_escape_string($db,$_POST['user_name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM `admin` WHERE `user_name` = '$myuser_name' and `password` = '$mypassword'";
      // echo $sql;
      // exit;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      // echo $result;
      // exit;
      
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
          
         header("location: dashboard_content.php?cid=$cid");
      }
      else {
        
         
         header("location: login.php?id=1");
         // echo "Hint:-birth of admin";
         // header("location: login.php");  
          }
   }
?>