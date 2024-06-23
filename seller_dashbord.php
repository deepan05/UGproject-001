
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
      <div class="col col-1" data-label="No">1</div>
      <div class="col col-2" data-label="Customer Name">CUSTOMERS (<?php
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
      <div class="col col-1" data-label="No">2</div>
      <div class="col col-2" data-label="Customer Name">DELIVERY BOY (<?php
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
      <div class="col col-1" data-label="No">3</div>
      <div class="col col-2" data-label="Customer Name">BOOKINGS (<?php
        $con = mysqli_connect("localhost","root","","water_supply");
        $sql = "SELECT * FROM booking";
        $result = $conn->query($sql);
      if ($result = mysqli_query($con, $sql)) {

          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          
          // Display result
          printf( $rowcount);
       }
    ?>)</div>
      <!-- <div class="col col-3" data-label="address">-----</div> -->
      <a href="../new_book.php"><div class="col col-4" data-label="active/deactive"><button>MANAGE  </button></div></a>
    </li>
  </ul>

</div>