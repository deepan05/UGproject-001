<?php 
//unset($_SESSION['login_user']);
  // session_destroy();
error_reporting(0);
if($_GET['id']==1)
{
echo '<script type ="text/JavaScript">';
         echo 'alert("invalid user name (or) password")';
         echo '</script>';
      }
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>customer-login</title>
      <link rel="stylesheet" href="admin/login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

   </head>
   <body>
      <div class="container">
         <header>Login Form</header>
<style>
/*.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}*/

/*.closebtn {
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
}*/
</style>
         <form action="customer_login_check.php" method="POST">
            <div class="input-field">
               <input type="text"  name="customer_name" id="customer_name"required name="customer_name">
               <label>Email or Username</label>
            </div>
            <div class="input-field">
               <input class="pswrd" type="password"  name="password" id="password" required name="password">
               <span class="show">SHOW</span>
               <label>Password</label>
               <span class="psw">Forgot <a href="forgot_password.php">password?</a></span>
            </div>
            <div class="button">
               <div class="inner"></div>
               <button>LOGIN</button>
            </div>

            <span class="psw">New<a href="admin/Customer_add.php">Customer</a></span>
         </form>
         
      </div>
      <script>
         var input = document.querySelector('.pswrd');
         var show = document.querySelector('.show');
         show.addEventListener('click', active);
         function active(){
           if(input.type === "password"){
             input.type = "text";
             show.style.color = "#1DA1F2";
             show.textContent = "HIDE";
           }else{
             input.type = "password";
             show.textContent = "SHOW";
             show.style.color = "#111";
           }
         }
      </script>
   </body>
</html>