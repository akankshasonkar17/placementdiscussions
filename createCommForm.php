<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" /> 
</head>
<body>
   
    <br>
    <div class="box">
        <center>
            <?php
            if(isset($_SESSION['userID'])){
            
                echo "<form action='comm_create.php' method=post>";
                echo'<input type ="text" name="comm_name" placeholder="Enter tilte of community (11 chars)" class="u-half-width"><br>';
		        echo'<input type ="text" name="comm_desc" placeholder="Enter description (upto 256 chars)" class="u-full-width" class="u-half-height" rows="40" cols="50" ><br>';
                echo'<button type="submit" id="btnSignupAction" name="btnSignupAction" >Create Community</button>';
           
             echo "</form>";
        echo '</center>';
    echo'</div>';
    }
    else {
        echo "please sign up or sign in !! :)";
    }
    ?>
            
                
</body>
</html>