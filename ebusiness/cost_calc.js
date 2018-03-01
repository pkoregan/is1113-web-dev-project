/*global $*/

function calcSub(){
    
var argSubTotal;
    
if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
    }
    else if(document.getElementById('aws').checked) {
        argSubTotal = 300;
    }
    else if(document.getElementById('gmail').checked) {
        argSubTotal = 400;
    }
    else if(document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    


calcDisVatTotal(argSubTotal);
}


function calcDisVatTotal(parmSubTotal){
var subtotal = parmSubTotal;
var discountAmt;
var vatAmt;
var totalPrice;

discountAmt = (subtotal*0.05);

vatAmt = ((subtotal - discountAmt)*0.1);

totalPrice = (subtotal - discountAmt + vatAmt);

display(parmSubTotal, discountAmt, vatAmt, totalPrice);

}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discountAmt").value = parm2;
    document.getElementById("vatAmt").value = parm3;
    document.getElementById("totalPrice").value = parm4;
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnproceed(){
     $('#btnProceed').prop('disabled', true);
}
