
window.onload = function(){
	document.getElementById("form1").onsubmit = checkForEmptyCart;
}
function checkForEmptyCart(){
	var y = document.getElementById("order-subtotal").value;
	if(y == '0.00'){
		alert("Cart is empty. Please add an item to cart before checking out.");
		return false;
	}else{
		return true;
	}
	
}

function itemplus(itemqty){

  var y = document.getElementById(itemqty).value;
  document.getElementById(itemqty).value = +y + 1;


}

function itemminus(itemqty){

  var y = document.getElementById(itemqty).value;
  if (y != 0){

  document.getElementById(itemqty).value = y - 1;
}

else return false;
}

function additem(itemqty, itemname, itemprice){
  var x = document.getElementById(itemname).value;
  var y = document.getElementById(itemqty).value;
  
  if(y == '0'){
	  return;
  }
 
  var z = document.getElementById(itemprice).value;
  var q = parseFloat(y);
  var w = parseFloat(z);
  var e = (q*w).toFixed(2);
  
  //calculate the subtotal and total
  var r = parseFloat(document.getElementById("order-subtotal").value);
  var sub = (parseFloat(e) + parseFloat(r)).toFixed(2);
  var total = (parseFloat(sub) + 1.80 + 1).toFixed(2);
  
  //check if item exists in cart
  var itemExists = document.getElementById(x+"-order");
  if(itemExists != null){
	  var tempqty = document.getElementById(x+"-order-qty").innerHTML;
	  var newY = parseFloat(tempqty) + parseFloat(y);
	  document.getElementById(x+"-order-qty").innerHTML = newY;
	  var tempprice = document.getElementById(x+'-order-price').innerHTML;
	  var newPrice = (parseFloat(tempprice) + parseFloat(e)).toFixed(2);
	  document.getElementById(x+'-order-price').innerHTML = newPrice;
	  
	  var hiddenOrderItems = document.getElementsByName("orderitem[]");
	  for(var i=0; i<hiddenOrderItems.length; i++){
		  if(hiddenOrderItems[i].value == x){
			  document.getElementsByName('orderqty[]')[i].value = newY;
			  document.getElementsByName('orderprice[]')[i].value = newPrice;
		  }
	  }
  }else{
  //if doesn't exist, add new row and hidden input elements
  var rows = document.getElementById("order-cart").rows.length;
  var table = document.getElementById("order-cart");
  var row  = table.insertRow(rows-6);
  row.className+="new-row";
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  
  cell1.className+= "left";
  cell1.className+=" new-item";
  cell1.innerHTML= "<div id='"+x+"-order'><strong id='"+x+"-order-qty'>"+y+"</strong> "+x+" </div><img class='delete-btn' src='images/bin.png' onclick='deleterow(this)'>";
  
  cell2.innerHTML= e;
  cell2.id = x+'-order-price';
  cell2.className += "right";
  
  cell3.innerHTML = "<input type = 'hidden' name = 'orderitem[]' value = '"+x+"'>";
  cell4.innerHTML = "<input type = 'hidden' name = 'orderqty[]' value ='"+y+"'>";
  cell5.innerHTML = "<input type = 'hidden' name = 'orderprice[]' value ='"+e+"'>";
  
  cell3.style.display = "none";
  cell4.style.display = "none";
  cell5.style.display = "none";
  }
//update sub total and total
  document.getElementById("order-subtotal").value = sub;
  document.getElementById("order-total").value = total;
  document.getElementById(itemqty).value = 0;
}

function deleterow(x){
  var y = x.parentNode.parentNode.rowIndex;
  var z = x.parentNode.parentNode.cells[1].innerHTML;
  var q = document.getElementById("order-total").value;
  var r = document.getElementById("order-subtotal").value;
  var newtotal = parseFloat(q) - parseFloat(z);
  var newsub = parseFloat(r) - parseFloat(z);
  var t = newsub.toFixed(2);
  var e = newtotal.toFixed(2);
  document.getElementById("order-cart").deleteRow(y);
  document.getElementById("order-subtotal").value = t;

  document.getElementById("order-total").value = e;


}

function togglepromotion(){

  document.getElementById("alacarte-menu").style.display = "none";
  document.getElementById("promotion-menu").style.display = "block";
  document.getElementById("sides-menu").style.display = "none";
  document.getElementById("drinks-menu").style.display = "none";
}

function togglealacarte(){
  document.getElementById("alacarte-menu").style.display = "block";
  document.getElementById("promotion-menu").style.display = "none";
  document.getElementById("sides-menu").style.display = "none";
  document.getElementById("drinks-menu").style.display = "none";

}

function toggleside(){
  document.getElementById("alacarte-menu").style.display = "none";
  document.getElementById("promotion-menu").style.display = "none";
  document.getElementById("sides-menu").style.display = "block";
  document.getElementById("drinks-menu").style.display = "none";
}

function toggledrinks(){
  document.getElementById("alacarte-menu").style.display = "none";
  document.getElementById("promotion-menu").style.display = "none";
  document.getElementById("sides-menu").style.display = "none";
  document.getElementById("drinks-menu").style.display = "block";
}
