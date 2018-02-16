<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
        
        <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disabledbtnproceed()"/>
            Salesforce @100
        </label> 
        
        <br/>
        
        <label for="aws">
            <input type="radio" id="aws" name="product" checked onClick="disabledbtnproceed()"/>
            aws @ $300
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
            Sub Total
            <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            <label/>
            
            <br/>
            
            <label for="total">
            Total
            <input type="hidden" id="total" name="total" value="0.00" readonly/>
            <label/>
            
        <br/>
        
        <buttontype="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
</html>