<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    
    <head>
        
        <title> Enter Details</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validation.js"></script>
    </head>
    
    <body>
        <?php include_once("../includes/navbar.html") ?>
        
        <br/>
    <br/>
        
        <h4>Please enter your payment details.</h4>

            
            <form action = "Ebus3.php" method = "POST">
                
                <label for="user_pin">PIN</label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()">Validate</button>
        
        <?php
        // Set session variables
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["discountAmt"] = $_POST["discountAmt"];
        $_SESSION["vatAmt"] = $_POST["vatAmt"];
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
    
</html>