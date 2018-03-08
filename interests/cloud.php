<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8"/>
        <title>Travel</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
         <link rel="stylesheet" href="cloud_pages.css" type="text/css" />
         
         
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <!--Page Piling-->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.js"></script>
    
    
        <script type = "text/javascript">
            $(document).ready(function() {
    	        $('#pagepiling').pagepiling({
                });
            });
        </script>
    
    </head>
    <body>
       <?php include_once("../includes/navbar.html") ?> 
       <div id="pagepiling">
	<div class="section" id="section1">Google Drive</div>
	<div class="section" id="section2">iCloud</div>
	<div class="section" id="section3">
	    Dropbox
	    <br/>
	    <a href="sports.php" class="btn btn-success">Sports</a>
	    <br/>
	    <br/>
	    <a href="../homepage.php" class="btn btn-success">Home</a>
	</div>
</div>
    </body>
</html>