<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/myOrder.js"></script>
  <link rel="stylesheet" href="css/myOrder.css">
</head>

<body>
<div id="wrapper">
  <div id="logo">
    <a href="home.html"><img src="images/logo.png"></a>
  </div>
  <div id="nav">
    <a href="menu.html">Menu</a>
    <a href="myOrder.html">My Order</a>
    <a href="contactUs.html">Contact Us</a>
  </div>
  <div id="content">
	<div id="my-order-email">
		<p> Order Status </p>
		<form action="" id="my-order-email-form">
			<input type="email" placeholder="Enter your email address." name="email" id="email">
			<input type="image" id="submit" src="images/submit-arrow.png">
		</form>
	</div>
	<!--Order status when valid email-->
	<div id="my-order-info" hidden>
		<div class="col" id="order-summary">
			<h2>Order Summary</h2>
			<table border="0">
					<tr id="first-row">
						<th class="left" colspan="2">Address</th>
					</tr>
					<tr class="item-detail-row">
						<td class="left">Bukit Batok Ave 5 Blk 999 #02-02</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr>
						<th class="left"><p>Qty item</p></th>
						<th class="right"><p>TOTAL</p></th>
					</tr>
					<tr class="item-detail-row">
						<td class="left">1 Big Mac</td>
						<td class="right">4.95</td>
					</tr>
					<tr class="item-detail-row">
						<td class="left">1 McSpicy</td>
						<td class="right">2.95</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr>
						<th class="left">Subtotal</td>
						<td class="right">7.90</td>
					</tr>
					<tr>
						<th class="left">Tax</td>
						<td class="right">1.50</td>
					</tr>
					<tr>
						<th class="left">Delivery Charge</td>
						<td class="right">1.00</td>
					</tr>
					<tr class="blank-row">
						<td></td>
						<td></td>
					</tr>
					<tr id="net-total">
						<th class="left">Net Total</td>
						<td class="right">10.40</td>
					</tr>
				</table>
		</div>
		<div class="col" id="delivery-status">
			<h2>Delivery Status</h2>
			<p>Preparing</p>
		</div>
		<div style="clear:both"></div>
	</div>
  </div>


</div>
<div id="footer">
    <small><i>Copyright &copy 2017 Food Fighters</i></small>
  </div>

</body>
</html>

</html>
