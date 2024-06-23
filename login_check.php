<?php  
$servername = "localhost";
$username = "root";
$password="";
$db = mysqli_connect('localhost','root','','water_supply');
if(isset($_POST["submit"])){  /// submit button check panra 

if(!empty($_POST['user_name']) && !empty($_POST['password']))
 {  

    $user=$_POST['user_name'];  /// value vangra place
    $pass=$_POST['password']; 
  
    // $con=mysql_connect('localhost','root','') or die(mysql_error());// connection to database 
    $conn = mysqli_connect("localhost","root","","water_supply"); 
    //mysql_select_db('water_supply') or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `user_name`='$user' AND `password`='$pass' 'user_type'='$type'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
echo $num_rows;
  if ($num_rows>0)
  {
      $Message = "Login Successful!";
       session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    // if($type=1) {
    //   header("location:admin_dashboard.php")
      
    // }
    // elseif ($type=2) {
    //   header("location:client_dashboard.php")
    //   // code...
    // }
    // elseif ($type=3) {
    //   header("location:customer_dashboard.php")
    //   // code...
    // }
    // else ($type=4) {
    //   header("location:supply_person_dashboard.php")
    //   // code...
    // }
    header("location:dashboard.php") 
  }
  else{
    $Message = "Login Failed! User not found";
  }
  
} 
else 
{  
    echo "All fields are required!";  
}  
}  
?>