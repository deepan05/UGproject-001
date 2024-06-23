<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
body {
  width: 500px;
  margin: 0 auto;
  font-family: times new roman, sans-serif;
  background-color: lightblue;
/*background-image: url(images/new_login_bg.webp);*/
}
h1{
  color: darkblue;
  border-color:red ;
  font-family: times new roman, sans-serif;
  font-size: 60px;
  font-weight: 700;
  text-decoration: underline red;
  /*text-shadow:  0px 40px px black;*/
}
form {
  background-color: white;
  border: 3px solid transparent;
  box-shadow: 0px 5px 15px 10px black;
}

input[type=text], input[type=password] {
  width:100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2.5px solid black;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.log{
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
  border-radius: 1000px;
}
.log:hover{
  background-color: green;
}
button:hover {
  color: skyblue;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 8%;
  height: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
.continer..selcls { 
    padding: 3px; 
    border: solid 1px #517B97; 
    outline: 0;  
    /*background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; */
    width:150px;
    } 
.container.seldemo
{
  background: #A0CFCF;
  height: 75px;
  width:250px;
  border-radius: 15px;
  padding:20px;
  font-size:22px;
  color:#fff; 
}
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens 
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<center><h1 style="color: darkblue:">LOGIN</h1></center>

<form action="login_check.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo.png" alt="Avatar" class="avatar">
  </div>

  <h3><div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <div class="seldemo">
      <label for="user_type"><b>User_Type:</b></label>
    <select name="user_type" id="user_type" class="selcls ">
      <option value="(select)">(select)</option>
      <option value="admin">admin</option>
      <option value="Customer">Customer</option>
      <option value="Seller">Seller</option>
      <option value="supply person">supply person</option>
    </select>
</div>
    
    

    <center><button type="submit" name="submit" class="log">Login</button><br><br></center>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forgot_password.php">password?</a></span>
   </h3>
  </div>
</form>

</body>
</html>
