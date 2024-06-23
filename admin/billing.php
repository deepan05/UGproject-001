<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="billing.css">
  <title>billing</title>
</head>
<body>
  <div class="pricelist">
   <center><h1>Order placement</h1></center>
    <h1>FRUITS MENU</h1>
    <table>
      <tr>
        <td>25-liter</td>
        <td>1-liter</td>
        <td>250ml</td>
        <td>500ml</td>
        <td>5-liter</td>
      </tr>
      <tr>
        <td>80 Per/can</td>
        <td>50 Per/can</td>
        <td>170 Per/can</td>
        <td>60 Per/can</td>
        <td>60 Per/can</td>
      </tr>
    </table>
  </div>
  <br>
  <br>
  <br>

  <form class="bill1">
    <select id="sf">
  <option selected value = "25-liter">25-liter</option>
  <option value = "1-liter">1-liter</option>
  <option value = "250ml">250ml</option>
  <option value = "500ml">500ml</option>
  <option value = "5-liter">5-liter</option>
</select>
    <input type="text" id="entrybox" pattern="\d*" placeholder="Input Amount">&nbsp;<b>KG</b>&nbsp;&nbsp;
    <input type="button" value="ADD T0 CART" class="mybutton" id="getme">
    <script type="text/javascript">
       var straw = 160;
    var apple = 200;
    var grapes = 170;
    var pome = 220;
    var gu = 60;
    var total = 0;
    var check = 1;
    var gw;
    var sfruit;
    var perkg;
    var adder = document.querySelector("#getme");
    adder.addEventListener("click", getMe);
    var by = document.querySelector("#out");
    by.addEventListener("click", checkOut);
    var cme = document.querySelector("#clr");
    cme.addEventListener("click", clearMe);

    function getMe() {
      sfruit = document.querySelector("#sf").value;
      perkg = parseFloat(document.querySelector("#entrybox").value);
      gw = document.querySelector("#writeme");
      if (Number.isNaN(perkg) === true) {
        alert("Only Numbers !!! Or The Field is Empty");
        check = 0;
      }
      else if (perkg<0) {
        alert("Negative value!! @stupid");
        check = 0;
      }
      else{
        check = 1;
      }
      if (check == 1) {
     
        switch (sfruit) {
          case "Strawberry":
            var st = straw * perkg;
            gw.value += "Strawberry " + perkg + " kg = " + st + " rs\r";
            total += st;
            perkg.value = "";
            break;
          case "Apple":
            var at = apple * perkg;
            gw.value += "Apple " + perkg + " kg = " + at + " rs\r";
            total += at;
            perkg.value = "";
            break;
          case "Grapes":
            var gr = grapes * perkg;
            gw.value += "Grapes " + perkg + " Kg  = " + gr + " rs\r";
            total += gr;
            perkg.value = "";
            break;
          case "Guava":
            var ga = gu * perkg;
            gw.value += "Guava " + perkg + " Kg  = " + ga + " RS\r";
            total += ga;
            perkg.value = "";
            break;
          case "Pomegranate":
            var pomy = pome * perkg;
            gw.value += "Pomegranate " + perkg + " Kg  = " + pomy + " rs\r";
            total += pomy;
            perkg.value = "";
            break;
        }

      }
    }

    function checkOut() {
      gw.value += "--------------------------------------------------------------\r";
      gw.value += "Your Total Bill Is = " + total + " rs Thanks For Shopping! :)\r";
      gw.value += "--------------------------------------------------------------\r";
      total = 0;
    }
    function clearMe () {
      gw.value = "";
    }

    </script>
  </form>
  <br><br>
  <textarea class="bill" cols="100" rows="10" id="writeme"></textarea>
  <br>
  <input type="submit" value="CLEAR TEXTAREA" class="mybutton bill3" id="clr">
  <input type="submit" value="PAY BILL" class="mybutton bill2" id="out">
  </body>

</html>