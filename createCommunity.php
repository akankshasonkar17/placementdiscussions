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
    require "createCommForm.php"
    ?>
    <div align="center">
    <?php
            if(isset($_SESSION['userID'])){
               echo '<div>
                       
                    </div>';
            } else{  
            echo '<div class="login" id="btnLogin">
                    <div id="btnSignup" style="display:inline;">
                        <button ><a href="./signup.php">Signup</a></button>
                    </div>
                    OR
                    <form action="./loginAction.php" style="display:inline;" method="post">
                        <input type="text" name="emailLogin" id="emailLogin" placeholder="Username">
                        <input type="text" name="passwordLogin" id="passwordLogin" placeholder="Password">
                        <button id="btnLogin" name="btnLogin">Login</button>
                    </form>
                  </div>';
            }
            ?>
    
</div>
                
</body>
</html>