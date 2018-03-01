<?php
session_start();
?>
<!DOCTYPE html>

<html>
    
    <head>
        <title>RECEIPT</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
    </head>
    <body>
        <?php include_once("../includes/navbar.html") ?>
        
        <br/>
    <br/>
        
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["name"] . ".";
        echo "E-Mail: " . $_SESSION["email"] . ".";
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
    </body>
</html>