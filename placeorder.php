<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

session_start();
$fname = $_POST['customer-first-name'];
$lname = $_POST['customer-last-name'];
$address = $_POST['customer-address'];
$contact = $_POST['customer-contact'];
$email = $_POST['customer-email'];
$date = $_POST['delivery-date'];
$time = $_POST['delivery-time'];
$payment = $_POST['payment'];
$total =  $_SESSION['post-data']['order-total'];
$subtotal = $_SESSION['post-data']['order-subtotal'];
// print_r($_POST);
$servername = "localhost";
$username = "f35im";
$password = "f35im";
$dbname = "f35im";

if(empty($time)){
	date_default_timezone_set("Asia/Singapore");
	$time = date("h:ia", strtotime("+30 minutes"));
}

$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection.
if (!$conn) {

  die ("Connection failed:".mysqli_connect_error());
}
$sql = "INSERT INTO customers (firstname, lastname, address,cemail, orderdate, ordertime, subtotal, total, contact) values ('".$fname."','".$lname."','".$address."','".$email."','".$date."','".$time."','".$subtotal."','".$total."','".$contact."');";
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
for ($i = 0; $i < sizeOf($_SESSION['post-data']['orderitem']); $i++) {

  $sql = "INSERT INTO orders (customerid, menuid, quantity) VALUES ( (SELECT customerid FROM customers WHERE cemail = '".$email."'),(SELECT menuid FROM menu WHERE name = '".$_SESSION['post-data']['orderitem'][$i]."'), ".$_SESSION['post-data']['orderqty'][$i].");";

  if (mysqli_query($conn, $sql)) {
    echo "Record Updated Successfully";

  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  }

mysqli_close($conn);
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/placeorder.js"></script>
  <link rel="stylesheet" href="css/placeorder.css">
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

	<div class="col" id="order-details">
		<h2>Billing Details</h2>
		<p>Thank you for ordering with us.<br> A confirmation email has been sent to the following email address:
          <?php
          $subject = 'FOOD FIGHTERS ORDER';
          $message = 'YOUR DELIVERY IS ON ITS WAY! Just click on the following link to check your orders: http://192.168.56.2/f35im/FinalFinalProj/myOrder.php';
          Mail($email, $subject, $message);
					echo $email;
					?><br>
				You may track your order via the My Order page.</p>

				<table border="0">
          <?php
          for ($i = 0; $i < sizeOf($_SESSION['post-data']['orderitem']); $i++){
           echo "<tr><td class = 'left'><strong>".$_SESSION['post-data']['orderqty'][$i]."</strong> ".$_SESSION['post-data']['orderitem'][$i]."</td><td class= 'right'>$".$_SESSION['post-data']['orderprice'][$i]."</td></tr>";

         }
          ?>
					<tr id="sub-total">
						<th class="left">SubTotal</th>
						<th class="right">$<?php
            echo $_SESSION['post-data']['order-subtotal']?></th>
					</tr>
					<tr>
						<td class="left">Tax</td>
						<td class="right">$1.80</td>
					</tr>
					<tr>
						<td class="left">Delivery Charge</td>
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
					 <td class="left">Payment Method</td>
					 <td id="payment-method"><?php
           echo $payment?></td>
					</tr>
					<tr>
					 <td class="left">Estimated Delivery Time</td>
					 <td id="delivery-time"><?php echo $time?></td>
					</tr>

				</table>
				<div id="last-row">
					<div id="print"><button onclick = "window.print()" >Print</button></div>
					<div id="return"><a href="home.html">Return</a></div>
				</div>
	</div>
	<div style="clear:both"></div>
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

</html>
