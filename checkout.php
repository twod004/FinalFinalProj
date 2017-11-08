<?php


session_start();
$_SESSION['post-data']= $_POST;
print_r($_POST);
print_r($_SESSION);



?>
<!DOCTYPE html>
<html>

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/checkout.js"></script>
  <link rel="stylesheet" href="css/checkout.css">
  <link rel="stylesheet" href="css/parent.css">
</head>

<body>
<div id="wrapper">
  <div id="logo">
    <a href="home.html"><img src="images/logo2.png"></a>
  </div>
  <div id="nav">
	<div class="nav-bar">
		<a href="menu.php">Menu</a>
		<a href="myOrder.php">My Order</a>
		<a href="contactUs.html">Contact Us</a>
	</div>
  </div>
  <div id="content">
    <form action = "placeorder.php" id = "form2" method = "post">
		<div id="checkout-info">
			<div class="col" id="customer-details">
				<h2>Customer Details</h2>
				<div class="customer-details-row">
					<div class="inline-input">
						<label for="customer-first-name">First Name</label><br>
						<input type="text" name="customer-first-name" id="customer-first-name" pattern="[A-Za-z]+" title="Only characters are allowed" required>
					</div>
					<div class="inline-input">
						<label for="customer-last-name">Last Name</label><br>
						<input type="text" name="customer-last-name" id="customer-last-name" pattern="[A-Za-z]+" title="Only characters are allowed" required>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="customer-details-row">
					<label for="customer-address">Address</label><br>
					<textarea name="customer-address" id="customer-address" rows="4" required></textarea>
				</div>
				<div class="customer-details-row">
					<div  class="inline-input">
						<label for="customer-contact">Contact</label><br>
						<input type="text" name="customer-contact" id="customer-contact" pattern="^[96]\d{7}" title="Invalid contact number" required>
					</div>
					<div class="inline-input">
						<label for="customer-email">Email</label><br>
						<input type="email" name="customer-email" id="customer-email" pattern="\w+([\.-]?\w+)*@(\w+\.){1,3}(\w{2,3})" title="Invalid email address"required>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="customer-details-row" id="payment-method">
					<label>Payment Method</label><br>
					<div class="inline-input">
						<label>
							<input type="radio" name="pay" id="pay1" value = "VISA" onclick = "paymentmethod('pay1')" checked>
							<img src="images/visa.png">
						</label>
					</div>
					<div class="inline-input">
						<label>
							<input type="radio" name="pay" id="pay2" value = "Mastercard" onclick = "paymentmethod('pay2')">
							<img src="images/mastercard.png">
						</label>
					</div>
					<div class="inline-input">
						<label>
							<input type="radio" name="pay" id="pay3" value = "Paypal" onclick = "paymentmethod('pay3')">
							<img src="images/paypal.png">
						</label>
					</div>
				  <div class = "inline-input">
					<label>
					  <input type = "hidden" name = "payment" id = "payment" value = "VISA">
					</label>
				  </div>
				</div>
				<div style="clear:both"></div>
				<h2>Advance Delivery</h2>
				<div class="customer-details-row">
					<div class="inline-input">
						<label for="delivery-date">Date</label><br>
						<input type="date" name="delivery-date" id="delivery-date">
					</div>
					<div class="inline-input">
						<label for="delivery-time">Time</label><br>
						<input type="time" name="delivery-time" id="delivery-time">
					</div>
				</div>
			</div>
			
			<div id="order-details">
				<h2>Order Details</h2>
				<table border="0">
					<tr>
						<th class="left">Item</th>
						<th class="right">Price($)</th>
					</tr>
            <?php
				for ($i = 0; $i < sizeOf($_SESSION['post-data']['orderitem']); $i++){
				 echo "<tr><td class='left'><strong>".$_SESSION['post-data']['orderqty'][$i]."</strong>  ".$_SESSION['post-data']['orderitem'][$i]."</td><td class='right'>".$_SESSION['post-data']['orderprice'][$i]."</td></tr>";
				}
            ?>
					<tr class="blank-row">
					</tr>
					<tr id="sub-total">
						<th class="left">SubTotal</th>
						<th class="right">
						<?php
							echo $_SESSION['post-data']['order-subtotal']?>
						</th>
					</tr>
					<tr>
						<td class="left">Tax</td>
						<td class="right">1.80</td>
					</tr>
					<tr>
						<td class="left">Delivery Charge</td>
						<td class="right">1.00</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr id="net-total">
						<th class="left">Net Total</th>
						<th class="right">
							<?php
							echo $_SESSION['post-data']['order-total']?>
						</th>
					</tr>
				</table>
				<div id="place-order">
				  <button type = "submit" class="submit-btn" form = "form2">
					Checkout
				  </button>
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
  </form>
  </div>
</div>
<div id="footer">
		<div class="social">
			<span><a href="#"><img src="images/facebook.png"></a></span>
			<span><a href="#"><img src="images/twitter.png"></a></span>
			<span><a href="#"><img src="images/instagram.png"></a></span>
		</div>
		<small><i>Copyright &copy 2017 Food Fighters</i></small>
		</div>

</body>
</html>
