<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/486ebc0d41.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require "navbar.php";
    ?>

    <center>
           <h3>Send us your Feedback</h3>
             <form name="contact-us-form" id="contact-us-form" >
                <label for="firstname">First Name</label>
                <input type="text"\id="firstname" name="firstname">
                <label>Last Name</label>
                <input type="text"id="lastname" name="lastname">
                <br><br>
                <label>Contact Tel.</label>
                <input type="tel" id="areacode" size="5" name="areacode">
                <input type="tel" id="telnum" name="telnum">
                <br><br>
                <label for="emailid" >Email</label>
                <input type="email" id="emailid" name="emailid">
                <br><br>
                <strong>How may we contact you?</strong>
                <input type="checkbox" id="telnum-checkbox">
                <label>Telephone</label>
                <input type="checkbox" id="email-checkbox">
                <label>Email</label>
   
                <!--form action="/action_page.php"--->
                <p>Rate us! How many stars would you give us?</p>
                <input type="radio" id="rate-us" name="rate-us">
                <label for="1">1</label>
                <input type="radio" id="rate-us" name="rate-us">
                <label for="2">2</label>
                <input type="radio" id="rate-us" name="rate-us">
                <label for="3">3</label>
                <input type="radio" id="rate-us" name="rate-us">
                <label for="4">4</label>
                <input type="radio" id="rate-us" name="rate-us">
                <label for="5">5</label><br><br>
                
                <button type="button" onclick="validateContactForm()">Send Feedback</button>
     
                </form>
                <p id="firstnameAlertID"></p>
                <p id="lastnameAlertID"></p>
                <p id="telnumAlertID"></p>
                <p id="emailAlertID"></p>
                <p id="checkboxAlertID"></p>
                <p id="radioAlertID"></p>

         </center>
         <script>
            function validateContactForm() {
                //validate name field name="firstname"
                var firstname = document.forms["contact-us-form"]["firstname"].value;
                var firstnameAlert="";
                if (firstname == "") {
                    //alert("Name must be filled out");
                    firstnameAlert="Name field must be filled";
                }
                document.getElementById("firstnameAlertID").innerHTML = firstnameAlert;
    
                //validate name field name="firstname"
                var lastname = document.forms["contact-us-form"]["lastname"].value;
                var lastnameAlert="";
                if (lastname == "") {
                    //alert("Name must be filled out");
                    lastnameAlert="Name field must be filled";
                }
                document.getElementById("lastnameAlertID").innerHTML = lastnameAlert;
    
                // validate phone number name="telnum"
                var telnum, telnumAlert="";
                telnum = parseInt(document.getElementById("telnum").value);
                // check if it's a 10 digit number
                if (telnum>999999999 && telnum<10000000000) {
                    telnum="";
                    
                }else{
                    
                    telnumAlert = "Telephone field must be filled with 10 digits";
                }
                document.getElementById("telnumAlertID").innerHTML = telnumAlert;
    
                //emailid
                var emailAlert="";
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if (document.getElementById("emailid").value.match(mailformat)){
                    emailAlert="Valid email address";
                }else {
                    emailAlert="You have entered an invalid email address!";
                }
                document.getElementById("emailAlertID").innerHTML = emailAlert;
    
                //checkbox
                var checkboxAlert = "";
                var telnumcheck = document.getElementById("telnum-checkbox").checked;
                var emailcheck = document.getElementById("email-checkbox").checked;
                if(!telnumcheck && !emailcheck){
                    checkboxAlert="Please select one option to contact you";
                }
                document.getElementById("checkboxAlertID").innerHTML = checkboxAlert;
                
                //radio
                var radioOption = document.getElementById("rate-us").checked;
                var radioAlert = "";
                if(!radioOption){
                    radioAlert="Please rate us";
                }else{ radioAlert=""; }
                document.getElementById("radioAlertID").innerHTML = radioAlert;
            }
    
            
            </script>
</body>
</html>