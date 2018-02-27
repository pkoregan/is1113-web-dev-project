<?php
session_start();
?>
<!DOCTYPE html>
<?php include_once("../includes/navbar.html") ?>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body bgcolor="#D5D8DC">
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>