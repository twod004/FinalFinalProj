function paymentmethod(smth){
  x = document.getElementById(smth).value;
  document.getElementById("payment").value = x;
}
function validateDate(input){
	var today = new Date();
	var dateInput = new Date(input);
	var minimumTime = 2*60*60*1000;
	if(dateInput.getTime() - today.getTime() < minimumTime){
		return false;
	}else{
		return true;
	}
}
function validateForm(){
	var date = document.getElementById('delivery-date');
	var time = document.getElementById('delivery-time');
	if(!date.value && !time.value){
		return true;
	}
	if((date.value && isNaN(time.value)) || (date.value && !time.value)){ 
		alert("Missing time input");
		return false;
	}
	if((time.value && !date.value) || (time.value && isNaN(date.value))){
		alert("Missing date input");
		return false;
	}
	var combinedDate = date.value + " "+time.value;
	if(!validateDate(combinedDate)){
		alert("Invalid date-time input");
		return false;
	}
	return true;

}
window.onload = function(){
	var placeOrderForm = document.getElementById('form2');
	placeOrderForm.onsubmit = validateForm;
}