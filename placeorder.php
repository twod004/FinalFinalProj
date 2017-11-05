<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();
$fname = $_POST['customer-first-name'];
$lname = $_POST['customer-last-name'];
$address = $_POST['customer-address'];
$contact = $_POST['customer-contact'];
$email = $_POST['customer-email'];
$date = $_POST['delivery-date'];
$time = $_POST['delivery-time'];
$payment = $_POST['payment'];
print_r($_POST);
$servername = "localhost";
$username = "f35im";
$password = "f35im";
$dbname = "f35im";


$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {

  die ("Connection failed:".mysqli_connect_error());
}

for ($i = 0; $i < sizeOf($_SESSION['post-data']['orderitem']); $i++) {

  $sql = "INSERT INTO orders (customerid, menuid, quantity) "
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/placeorder.js"></script>
  <link rel="stylesheet" href="css/placeorder.css">
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
	<h2>Billing Content</h2>
	<div class="col" id="order-details">
				<p>Thank you for ordering with us.<br> A confirmation email has been sent to your email address.<br>
				You may track your order via the My Order page.</p>
				<h2>Order Details</h2>
				<table border="0">
					<tr>
						<th class="left">Qty Item</th>
						<th class="right">Total</th>
					</tr>
          <?php
          for ($i = 0; $i < sizeOf($_SESSION['post-data']['orderitem']); $i++){
           echo "<tr><td class = 'left'>".$_SESSION['post-data']['orderitem'][$i]." x ".$_SESSION['post-data']['orderqty'][$i]."</td><td class= 'right'>$".$_SESSION['post-data']['orderprice'][$i]."</td></tr>";

         }
          ?>
					<tr>
						<th class="left">SubTotal</th>
						<td class="right"><?php
            echo $_SESSION['post-data']['order-subtotal']?></td>
					</tr>
					<tr>
						<th class="left">Tax</th>
						<td class="right">$1.80</td>
					</tr>
					<tr>
						<th class="left">Delivery Charge</th>
						<td class="right">$1.00</td>
					</tr>
					<tr class="blank-row">
					</tr>
					<tr id="net-total">
						<th class="left">Net Total</td>
						<th class="right">$<?php
            echo $_SESSION['post-data']['order-total']?></th>
					</tr>
					<tr>
					 <th class="left">Payment Method</th>
					 <th id="payment-method"><?php
           echo $payment?></th>
					</tr>
					<tr>
					 <th class="left">Estimated Delivery Time</th>
					 <th id="delivery-time"><?php echo $time?></th>
					</tr>

				</table>
	</div>
	<div style="clear:both"></div>
	<div id="last-row">
		<div id="print"><button >Print</button></div>
		<div id="return"><a href="home.html">Return</a></div>
	</div>

</div>
</div>
<div id="footer">
    <small><i>Copyright &copy 2017 Food Fighters</i></small>
</div>

</body>
</html>

</html>
