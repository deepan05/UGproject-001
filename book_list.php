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
<?php
// include('include/seller_head.php');
?>
<title>Booking dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dashboard_content.css">
<style type="text/css">
  body {
    background-image: url("./images/b1.svg");
    font-family: times new roman, sans-serif;}
  .mySlides {
    display: none;
  }
  img {vertical-align: middle;}
  .slideshow-container {
  /*max-width: 400px;*/
  height: 100px;
  /*position: absolute;*/
  margin-right: 150px;
  margin-left: 50px;
  }
  /*.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}*/

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
}
</style>
<div class="container">

  <!-- <h2>CUSTOMER:</h2> -->
   <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">S.NO</div>
      <div class="col col-2">User type</div>
      
      <div class="col col-4">Actions</div>
      <!-- <div class="col col-5">5</div> -->
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="No">2</div>
      <div class="col col-2" data-label="Customer Name">NEW BOOKING(<?php
        $con = mysqli_connect("localhost","root","","water_supply");
        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);
      if ($result = mysqli_query($con, $sql)) {

          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          
          // Display result
          printf( $rowcount);
       }
    ?>)</div>
      <!-- <div class="col col-3" data-label="address">asfsfegergerhej</div> -->
      <a href="./admin/Customer_list.php"><div class="col col-4" data-label="active/deactive"><button>MANAGE  </button></div></a>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="No">3</div>
      <div class="col col-2" data-label="Customer Name">OLD BOOKING(<?php
        $con = mysqli_connect("localhost","root","","water_supply");
        $sql = "SELECT * FROM supply_persons";
        $result = $conn->query($sql);
      if ($result = mysqli_query($con, $sql)) {

          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          
          // Display result
          printf( $rowcount);
       }
    ?>)</div>
      <!-- <div class="col col-3" data-label="address">csdvdgsfvweg</div> -->
      <a href="./admin/supply_list.php"><div class="col col-4" data-label="active/deactive"><button>MANAGE  </button></div></a>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="No">4</div>
      <div class="col col-2" data-label="Customer Name">Feedbacks</div>
      <!-- <div class="col col-3" data-label="address">-----</div> -->
      <a href="./book_list.php"><div class="col col-4" data-label="active/deactive"><button>MANAGE  </button></div></a>
    </li>
  </ul>

</div>
<style type="text/css">
  /** {box-sizing: border-box;}*/

body {
  font-family: 'times new roman', sans-serif;
  font-size: 20px;
  color: white;
  background-image: url("./images/bg1.svg");
  /*background: -webkit-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: -o-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: -moz-linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  background: linear-gradient(70deg, #ff6464 40%, #5ac8fa 40%);
  /*background-image: url(pic2.jpeg);*/*/
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
.content-left{
  float: right;
  margin-right: 100px;
  margin-top: 55px;
  height: 700px;
  width: 350px;
}  
.container {
  /*float: left;*/
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 5px;
  /*background-image: url(./images/water-drop.jpeg);*/
}

h2 {
  border-style: double red ;
  font-size: 20px;
  margin: 20px 0;
  text-align: center;
  smal
    font-size:0.5em;
}
.responsive-table 
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {

    background-color: darkviolet;
    /*background-color: transparent;*/
    box-shadow: 0px 0px 9px 10px white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }
  .table-row {
    background-color: darkviolet;
    box-shadow: 0px 0px 9px 10px white;
  }
    
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before 
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
</style>
</div>