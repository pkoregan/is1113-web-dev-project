<!DOCTYPE html>

<html>
  
    <head>
      <meta charset="utf-8"/>
      
        <title>Select Product</title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      <?php include_once("../includes/navbar.html") ?>
      <br/>
    <br/>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="name">
                Name:
                <input type="text" name="name" id="name"/>
              </label>
              
              <br/>
              
              <label for="email">
                E-mail:
                <input type="text" name="email" id="email"/>
              </label>
              
              <br/>
              <br/>
              <br/>
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discountAmt">
                Discount
                <input type="text" id="discountAmt" name="discountAmt" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vatAmt">
                VAT @ 10%
                <input type="text" id="vatAmt" name="vatAmt" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="totalPrice">
                Total
                <input type="text" id="totalPrice" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
          
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>