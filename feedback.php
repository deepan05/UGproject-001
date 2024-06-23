<?php
//connect database 
$cname = $_GET['pid'];
$con=mysqli_connect("localhost","root","","water_supply") or die(mysqli_error());   
//select values from empInfo table
$sql = "SELECT * from `customers` WHERE costomer_name='$cname'";
$result = mysqli_query($con,$sql);
// echo '<pre>';
//print_r(mysqli_fetch_row($result));
$customer_details = mysqli_fetch_row($result);
// print_r($customer_details);


// echo '</pre>';


mysqli_close($con);
?>

<!DOCTYPE html>
<html>

<head>
    <title>FEEDBACK FORM </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    
    <style>
        body {
            margin: 0 auto;
            background-repeat: no-repeat;
            background-color: black;

        }
        .header-left{
          float: left;
        }
        .header-right{
          float: right;
        }
        
        div.formContainer {
            margin: 4em auto 4em auto;
            width: 80%;
            color: red;
            border: 1px solid #FCE205;
            border-radius: 2px;
            background-color: whitesmoke;
            box-shadow: 0px 0px 9px 10px black;
        }
        
        div.heading {
            margin: 0 auto 0 auto;
            width: 100%;
            padding: 1em 0 1em 0;
            letter-spacing: 0.1em;
            font-size: 1.2em;
            font-weight: bold;
            border-bottom: 1px solid #FCE205;
            text-align: center;
            background-color: #FCE205;
            color: black;
        }
        
        div.description {
            padding: 1em 0 1em 0;
            width: 80%;
            margin: 0 auto 0 auto;
            text-align: center;
        }
        
        div.form {
            margin: 0 auto 0 auto;
            width: 100%;
        }
        
        div.form form {
            margin: 0 auto 0 auto;
            width: 80%;
        }
        
        div.form label {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: black;
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 0.1;
        }
        
        div.form input {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: darkblue;
            font-family: times new roman,sans-serif;
            font-weight: 600;
            padding: 1.2em 0 1em 1.2em;
            background-color: transparent;
            border: 0.5px solid #FCE205;
        }
        
        div.form textarea {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: #FCE205;
            padding: 1.2em 0 1em 1.2em;
            background-color: transparent;
            border: 0.5px solid #FCE205;
            height: 8em;
            resize: none;
        }
        
        div.form button {
            outline: none;
            margin: 2em auto 2em auto;
            padding: 2em;
            cursor: pointer;
            border: none;
            display: block;
            width: 60%;
            text-align: center;
            border: 1px solid #FCE205;
        }
        
        div.form input:active,
        div.form input:focus,
        div.form select:active,
        div.form select:focus,
        div.form textarea:active,
        div.form textarea:focus,
        div.form button:active,
        div.form button:hover {
            box-shadow: 0 0 2px 2px white;
        }
        
        div.form button {
            background-color: black;
            color: #FCE205;
            font-weight: bolder;
            transition: all 0.2s linear;
        }
        
        @keyframes status {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }
        
        div.statusActive {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            padding: 1.2em 0 1em 1.2em;
            background-color: #FCE205;
            color: black;
            text-align: center;
            animation-name: status;
            animation-duration: 0.3s;
            transition: all 0.2s linear;
        }
        
        div.loadingActive {
            width: 90%;
            margin: 4em auto 4em auto;
            grid-template-columns: 33.3% 33.3% 33.3%;
            display: grid;
            transition: all linear 0.2s;
        }
        
        div.loadingActive div {
            padding: 0.5em;
            background-color: #FCE205;
            animation-name: rotatingDiv;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        @keyframes rotatingDiv {
            from {
                transform: rotate(-180deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        @media only screen and (min-width: 1224px) {
            div.formContainer {
                width: 500px;
            box-shadow: 0 0 2px 2px white;
            }
        }
        
        @media only screen and (min-width: 1824px) {
            div.formContainer {
                width: 500px;
            }
        }
        
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            div.formContainer {
                width: 80%;
            }
        }
    </style>


</head>

<body>

    <div class="formContainer">
      <div class="header">
      <div class="header-left"><a href="customer_dashboard.php"><img src="images/back_button.png" style="width: 55px; height: 50px;border-radius: 68px;"></a></div>
      <div class="header-right">
        <a href="customer_dashboard.php"><img src="images/home_1.png" style="width: 65px; height: 60px;border-radius: 70px;"></a>
        <a href="contact.php"><img src="images/contact_us.png" style="width: 90px; height: 60px;border-radius: 68px;"></a>
      </div>
        <div class="heading">
        CUSTOMERS FEEDBACK
        </div>
        <div class="description">
            <p style="font-size: 30px;font-weight: 600;"> This is a responsive form with some Good UI.</p>
        </div>
        <div class="form">
            <form id="form" action="feedback_save.php" method="post">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Enter the name" value="<?php echo $customer_details[1] ?>">
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter the email" value="<?php echo $customer_details[2] ?>">
                <label for="date">date of feeback</label>
                <input type="date" name="Date_of_feedback" id="Date_of_feedback">
                <label for="phone_number">Phone number</label>
                <input name="phone_number" type="text" id="phone_number" placeholder="Enter the phone number"value="<?php echo $customer_details[7] ?>">
                <label for="feedback">Feedback</label>
                <textarea name="feedback" id="feedback" placeholder="Enter the feedback"></textarea>
                <button type="submit">SUBMIT</button>               
            </form>
        </div>

        <div id="loading">
            <div>
            </div>
            <div>
            </div>
            <div>
            </div>
        </div>

        <div id="status">

        </div>

    </div>

    <!-- <script>
        class Feedback {
            constructor() {
                this.formEle = document.getElementById("form");
                this.emailEle = document.getElementById("email");
                this.designationEle = document.getElementById("designation");
                this.nameEle = document.getElementById("name");
                this.feedbackEle = document.getElementById("feedback");
                this.statusEle = document.getElementById("status");
                this.loading = document.getElementById("loading");
            }
            setStatus(content) {
                this.removeLoading();
                this.statusEle.classList.add("statusActive");
                this.statusEle.innerHTML = content;
            }
            removeStatus() {
                this.statusEle.classList.remove("statusActive");
                this.statusEle.innerHTML = ``;
            }
            addLoading() {
                this.loading.classList.add("loadingActive");
            }
            removeLoading() {
                this.loading.classList.remove("loadingActive");
            }
            isEmpty(value) {
                return (value.trim().length == 0) ? true : false;
            }
            invalidLength(value, len) {
                return (value.length > len) ? true : false;
            }
            validateEmail(email) {
                let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            initialize() {
                this.formEle.onsubmit = (e) => {
                    e.preventDefault();
                    this.removeStatus();
                    this.addLoading();
                    this.validate();
                }
            }

            validate() {
                let email = this.emailEle.value.trim();
                let designation = this.designationEle.value.trim();
                let feedback = this.feedbackEle.value.trim();
                let name = this.nameEle.value.trim();
                let hasErrors = false;
                let errors = `<h>ERROR</h>`;
                if (this.isEmpty(name)) {
                    errors = `${errors} <p> We need your name pal !!! </p>`;
                    hasErrors = true;
                }
                if (this.invalidLength(name, 59)) {
                    errors = `${errors} <p>Name cant exceed 60 characters</p>`;
                    hasErrors = true;
                }
                if (!this.validateEmail(email)) {
                    errors = `${errors} <p> Is that a valid email ? ? </p>`;
                    hasErrors = true;
                }
                if (this.isEmpty(email)) {
                    errors = `${errors} <p> Email can not be empty </p>`;
                    hasErrors = true;
                }
                if (this.invalidLength(email, 319)) {
                    errors = `${errors} <p>Email can not exceed 320 characters</p>`;
                    hasErrors = true;
                }

                if (this.isEmpty(designation)) {
                    errors = `${errors} <p> Designation cant be empty </p>`;
                    hasErrors = true;
                }
                if (this.invalidLength(designation, 59)) {
                    errors = `${errors} <p>Please fit your designation within 60 characters</p>`;
                    hasErrors = true;
                }

                if (this.isEmpty(feedback)) {
                    errors = `${errors} <p> Irony....!feedback cant be empty</p>`;
                    hasErrors = true;
                }
                if (this.invalidLength(feedback, 5999)) {
                    errors = `${errors} <p>Thats a long feedback,sorry feedback can not exceed 6000 characters</p>`;
                    hasErrors = true;
                }

                if (hasErrors) {
                    this.setStatus(errors);
                } else {
                    let data = {
                            data: {
                                email: email,
                                designation: designation,
                                name: name,
                                feedback: feedback
                            }
                        }
                        // this.sendData(JSON.stringify(data));
                }
            }

            sendData(jsonData) {
                const url = "./php/AddFeedback.php";
                let xhttp = new XMLHttpRequest();
                let that = this;
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText) {
                            that.setStatus("Thank you ! We got your feedback, we look forward to more from you.");
                            that.formEle.reset();
                        } else {
                            that.setStatus("Are you sure you entered valid data? Dont worry there might also be problem with our server. Why not give it another shot?");
                        }
                    }
                };
                xhttp.open("POST", url, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`data=${jsonData}`);
            }

        }
        const fb = new Feedback();
        fb.initialize();
    </script> -->

</body>

</html>