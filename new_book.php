<<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>bookings</title>
</head>
<body>
       <div class="balaji">
              <a href="newbook.php"><button style="float: left;">New booking </button></a><br><br><br>
              <a href="Booking_list.php"><button style="float: left;">old booking </button></a><br><br><br>
              <a href="report.php"><button style="float: left;">monthly order</button></a>
       </div>
 <div class=deepan>
      
       <div class="clock">      
        <div class="hr"></div>
        <div class="min"></div>
        <div class="sec"></div>
        <div class="pin"></div>
        </div>
 </div>
  <script type="text/javascript">
         // Selecting all of the css classes on which
// we want to apply functionalities
const hr = document.querySelector('.hr')
const min = document.querySelector('.min')
const sec = document.querySelector('.sec')

// Setting up the period of working
setInterval(() => {

       // Extracting the current time
       // from DATE() function
       let day = new Date()
       let hour = day.getHours()
       let minutes = day.getMinutes()
       let seconds = day.getSeconds()

       // Formula that is explained above for
       // the rotation of different hands
       let hrrotation = (30 * hour) + (0.5 * minutes);
       let minrotation = 6 * minutes;
       let secrotation = 6 * seconds;

       hr.style.transform =
              `translate(-50%,-100%) rotate(${hrrotation}deg)`
       min.style.transform =
              `translate(-50%,-100%) rotate(${minrotation}deg)`
       sec.style.transform =
              `translate(-50%,-85%) rotate(${secrotation}deg)`
});

  </script>
    <!-- <script src="index.js"></script> -->
    <style type="text/css">
           /* Restoring browser effects */
* {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       ;
}
/* All of the same styling to the body */
body {
       height: 100vh;
       display: flex;
       justify-content: center;
       align-items: center;
       background-color: #000;
       background-image: linear-gradient(
                     70deg, black, white);
}
.balaji
{
       float: left;
}
button{
   height: 45px;
   margin: 35px 0;
 }
button{
   /*height: 100%;*/
   /*width: 100%;*/
   border-radius: 5px;
   border: none;
   /*align-items: center;*/
   font-family: times new roman;
   color: black;
   font-size: 38px;
   font-weight: 700;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
    box-shadow: 0px 0px 9px 10px white;

}
button:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
}
/* Sizing, positioning of main
       dial of the clock */
.clock {
       margin-top: 50px;
       margin-left: 700px;
       width: 400px;
       height: 400px;
       background-image: linear-gradient(
                            70deg, black, white);
       background-size: cover;
       box-shadow: 0 3em 5.8em;
       border-radius: 50%;
       position: relative;
}

.hr,
.min,
.sec {
       width: 1%;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -100%);
       transform-origin: bottom;
       z-index: 2;
       border-radius: 2em;
}

.pin {
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       width: 1em;
       height: 1em;
       background: black;
       border: 2px solid #ffffff;
       border-radius: 10em;
       margin: auto;
       z-index: 10;
}

/* Different length of different hands of clock */
.hr {
       height: 25%;
       background-color: white;
}

.min {
       height: 30%;
       background-color: white;
}

.sec {
       height: 40%;
       background-color: red;
       transform-origin: 50% 85%;
}

    </style>
    </body>
</html>
