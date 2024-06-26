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
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
  crossorigin="anonymous"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400"
  rel="stylesheet"
/>
<body>
  <form action="seller_login_check.php" method="POST" enctype="multipart/form-data">
    <div id="form_wrapper">
    <div id="form_left">
      <img src="images/logo.png" alt="computer icon" />
    </div>
    <div id="form_right">
      <h1>Seller Login</h1>
      <div class="input_container">
        <i class="fas fa-envelope"></i>
        <input placeholder="Email"type="text"name="name"id="field_email"class="input_field"required>
      </div>
      <div class="input_container">
        <i class="fas fa-lock"></i>
        <input
          placeholder="Password"type="password"name="Password"id="field_password"class="input_field" required >
      </div>
      <input
        type="submit"
        value="Login"
        id="input_submit"
        class="input_field"
      />
      <span>Forgot <a href="forgot_password.php"> Username / Password ?</a></span>
      <span id="create_account">
        <a href="admin/sellers_add.php ">Create your account ➡ </a>
      </span>
    </div>
  </div>
</form>
  <style type="text/css">
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
    :root {
  --body_gradient_left: #7200d0;
  --body_gradient_right: #c800c1;
  --form_bg: #ffffff;
  --input_bg: #e5e5e5;
  --input_hover: #eaeaea;
  --submit_bg: #1fcc44;
  --submit_hover: #40e263;
  --icon_color: #6b6b6b;
}
body {
  /* make the body full height*/
  height: 100vh;
  /* set our custom font */
  font-family: 'Roboto', sans-serif;
  /* create a linear gradient*/
  background-thumbnail: linear-gradient(to right,var(--body_gradient_left),var(--body_gradient_right));
  display: flex;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
   justify-content: center;
  align-items: center;
}
#form_wrapper {
  width: 1000px;
  height: 700px;
  /* this will help us center it*/
  margin: auto;
  box-shadow: 0px 0px 9px 10px black;
  background-color: var(--form_bg);
  border-radius: 50px;
  /* make it a grid container*/
  display: grid;
  /* with two columns of same width*/
  grid-template-columns: 1fr 1fr;
  /* with a small gap in between them*/
  grid-gap: 5vw;
  /* add some padding around */
  padding: 5vh 15px;
}
#form_left {
  /* center the image */
  display: flex;
  justify-content: center;
  align-items: center;
}
#form_left img {
  width: 350px;
  height: 350px;
}
#form_right {
  display: grid;
  /* single column layout */
  grid-template-columns: 1fr;
  /* have some gap in between elements*/
  grid-gap: 20px;
  padding: 10% 5%;
}
.input_container {
  background-color: var(--input_bg);
  /* vertically align icon and text inside the div*/
  display: flex;
  align-items: center;
  padding-left: 20px;
}
.input_container:hover {
  background-color: var(--input_hover);
}
.input_container,
#input_submit {
  height: 60px;
  /* make the borders more round */
  border-radius: 30px;
  width: 100%;
}
.input_field {
  /* customize the input tag with lighter font and some padding*/
  color: var(--icon_color);
  background-color: inherit;
  width: 90%;
  border: none;
  font-size: 1.3rem;
  font-weight: 400;
  padding-left: 30px;
}
.input_field:hover,
.input_field:focus {
  /* remove the outline */
  outline: none;
}
#input_submit {
  /* submit button has a different color and different padding */
  background-color: var(--submit_bg);
  padding-left: 0;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
}
#input_submit:hover {
  background-color: var(--submit_hover);
  /* simple color transition on hover */
  transition: background-color, 1s;
  cursor: pointer;
}
h1,
span {
  text-align: center;
}
/* shift it a bit lower */
#create_account {
  display: block;
  position: relative;
  top: 30px;
}
a {
  /* remove default underline */
  text-decoration: none;
  color: var(--submit_bg);
  font-weight: bold;
}
a:hover {
  color: var(--submit_hover);
}
i {
  color: var(--icon_color);
}
/* make it responsive */
@media screen and (max-width: 768px) {
  /* make the layout  a single column and add some margin to the wrapper */
  #form_wrapper {
    grid-template-columns: 1fr;
    margin-left: 10px;
    margin-right: 10px;
  }
  /* on small screen we don't display the image */
  #form_left {
    display: none;
  }
}
  </style>
</body>