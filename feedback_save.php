<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "water_supply";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone_number =$_POST['phone_number'];
    $feedback =$_POST['feedback'];
    $Date_of_feedback=$_POST['Date_of_feedback'];
    $sql = "INSERT  INTO `feedback` (`name`,`phone_number`,`email`,`feedback`,`date`) VALUES ('$name','$phone_number','$email','$feedback','$Date_of_feedback')";

    if ($conn->query($sql) === TRUE) 
    {echo '<script type ="text/JavaScript">';
         echo 'alert("thanks for your feedback..")';
         echo '</script>';
     header("location: customer_dashboard.php?cid=$name");
    } 
    else 
   {
    echo "Error: " . $sql . "<br>" . $conn->error;
   }

}
    
?>