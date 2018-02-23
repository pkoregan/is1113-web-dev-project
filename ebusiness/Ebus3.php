<?php
session_start();
?>
<!DOCTYPE html>
<?php include_once("../includes/navbar.html") ?>
<br/>
<html>
    <body bgcolor="#D5D8DC">
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>