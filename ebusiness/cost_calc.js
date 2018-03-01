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

/*global argSubTotal*/
function calcDisVatTotal(argSubTotal){
var subtotal = argSubTotal
var discount;
var vat;
var total;

discount = (subtotal*0.05);

vat = ((subtotal - discount)*0.1);

total = (subtotal - discount + vat);

display(argSubTotal, discount, vat, total);

}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnproceed(){
     $('#btnProceed').prop('disabled', true);
}
