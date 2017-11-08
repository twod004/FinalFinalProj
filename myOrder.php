<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/myOrder.js"></script>
  <link rel="stylesheet" href="css/myOrder.css">
  <link rel="stylesheet" href="css/parent.css">
</head>

<body>
<div id="wrapper">
  <div id="logo">
    <a href="home.html"><img src="images/logo2.png"></a>
  </div>
  <div id="nav">
	<div class="nav-bar row">
		<a href="menu.php" class="col-4">Menu</a>
		<a href="myOrder.php" class="col-4">My Order</a>
		<a href="contactUs.html" class="col-4">Contact Us</a>
	</div>
  </div>
  <div id="content">
	<div id="my-order-email">
		<p> Order Status </p>
		<form action="showOrder.php" id="my-order-email-form" method = "post">
			<input type="email" placeholder="Enter your email address" name="email" id="email">
			<input type="image" id="submit" src="images/submit-arrow.png">
		</form>
	</div>
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
