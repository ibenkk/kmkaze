let checkout=document.getElementById('checkout-notificatoin');
// alert("asdasd")
function closecheckout(){
checkout.style.display='none';
}
function opencheckout(){
checkout.style.display='flex';
}

// Order Display
let displayorder=document.getElementById('display-order');
let displayorder2=document.getElementById('display-order2');
let buttondisplayorder=document.getElementById('checkout-SingleContent');
let buttondisplayorder2=document.getElementById('checkout2-SingleContent');
let loadingdisplay=document.getElementById('Loading_notification');

// input form
let input1=document.getElementById('input1');
let input2=document.getElementById('input2');
let input3=document.getElementById('input3');
let input4=document.getElementById('input4');
let input5=document.getElementById('input5');



function openFormOrder(){
    displayorder.style.display='none'
    buttondisplayorder.style.display='none'

    displayorder2.style.display='flex'

}
function closeFormOrder(){
  displayorder2.style.display='none'
   displayorder.style.display='flex'
    buttondisplayorder.style.display='flex'

}
function displayloading() {
    if (input1.value!='' && input2.value!=''&& input3.value!=''&& input4.value!=''&& input5.value!='') {

        loadingdisplay.style.display='flex'
    }else{
        alert("isi semua kolom");
    }


}


