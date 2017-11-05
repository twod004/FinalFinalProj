

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
  var z = document.getElementById(itemprice).value;
  var q = parseFloat(y);
  var w = parseFloat(z);
  var e = (q*w).toFixed(2);
  var rows = document.getElementById("order-cart").rows.length;
  var table = document.getElementById("order-cart")
  var row  = table.insertRow(rows-6);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var r = parseFloat(document.getElementById("order-subtotal").value);
  var sub = (parseFloat(e) + parseFloat(r)).toFixed(2);
  var total = (parseFloat(sub) + 1.80 + 1).toFixed(2);
  cell1.innerHTML= x+" x"+y;
  cell2.innerHTML= e;
  cell3.innerHTML = "<input type = 'button' value = 'x'onclick = 'deleterow(this)'>";
  cell4.innerHTML = "<input type = 'hidden' name = 'orderitem[]' value = '"+x+"'>";
  cell5.innerHTML = "<input type = 'hidden' name = 'orderqty[]' value ='"+y+"'>";
  cell6.innerHTML = "<input type = 'hidden' name = 'orderprice[]' value ='"+e+"'>";
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
