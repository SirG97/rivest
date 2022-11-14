// function validateDomesticTransfer(){
//     let amount = document.getElementById('amount');
//     let bank_name = document.getElementById('bank_name');
//     let account_no = document.getElementById('account_no');
//     let account_name = document.getElementById('account_name');
//     let account_type = document.getElementById('account_type');
//     console.log(amount);
//    if(amount.value !=  false && bank_name.value != false && account_no.value != false && account_name.value != false && account_type.value != false){
//        document.getElementById('domestic_btn').disabled = false
//    }else{
//        document.getElementById('domestic_btn').disabled = true
//    }
// }
// $('#amount, #bank_name, #account_no, #account_name').bind('keyup', function() {
//     if(allFilled()) $('#domestic_btn').removeAttr('disabled');
// });
//
// function allFilled() {
//     let filled = true;
//     $('form input:not("#pin")').each(function() {
//         if($(this).val() == '') filled = false;
//     });
//     return filled;
// }
