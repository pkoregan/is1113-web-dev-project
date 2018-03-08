<?php
session_start();
?>
<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8"/>
        
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="../cloud.css" type="text/css" />
        
    </head>
    <body>
        <?php include_once("../includes/navbar.html") ?>
        
        <h4>RECEIPT</h4>
        
        
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["name"] . ".";
        ?>
        
        <p>
        <?php
        echo "E-Mail: " . $_SESSION["email"] . ".";
        ?>
        </p>
        
        <p>
        <?php
        echo "SubTotal is $" . $_SESSION["subtotal"] . ".";
        ?>
        </p>
        
        <p>
        <?php
        echo "Discount $" . $_SESSION["discountAmt"] . ".";
        ?>
        </p>
        
        <p>
        <?php
        echo "VAT is $" . $_SESSION["vatAmt"] . ".";
        ?>
        </p>
        
        <p>
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
        </p>
    </body>
</html>