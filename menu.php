<!DOCTYPE html>
<html lang="en">

<head>
  <title>Foo Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/menu.js"></script>
  <link rel="stylesheet" href="css/menu.css">
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
	<div id="categories" class="col">
		<ul>
			<li><a href="#promotion" onclick = "togglepromotion()" >Promotion & Bundle Meals</a></li>
			<li><a href="#alacarte" onclick = "togglealacarte()">Ala Carte</a></li>
			<li><a href="#sides" onclick = "toggleside()">Sides</a></li>
			<li><a href="#drinks" onclick = "toggledrinks()">Beverages</a></li>
		</ul>
	</div>
	<div id = "promotion-menu">
		<div id="menu-list" class="col">
			<div class="menu-row">
				<div class="menu-item">
					<image src="images/kebabfeast.png">
					<p>Chicken Kebab Bundle<br>$50.00</p>
					<div class="order-count">
						<button class="minus-btn" onclick='itemminus("kebabf-qty")'>-</button>
						<input type="text" name="kebabf-qty" id = "kebabf-qty" size="2" value="0" readonly >
						<input type ="hidden" id = "kebab-bundle" value ="Chicken Kebab Bundle">
						<input type ="hidden" id = "kebab-bundle-price" value = "50.00">
						<button class="plus-btn" onclick='itemplus("kebabf-qty")'>+</button>
						<div>
							<button class="submit-btn" onclick="additem('kebabf-qty','kebab-bundle','kebab-bundle-price')">Add to Order</button>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<img src="images/vegfeast.png">
					<p>Vegetarian Meal Bundle<br>$40.00</p>
					<div class="order-count">
						<button class="minus-btn" onclick = "itemminus('vegf-qty')">-</button>
						<input type="text" name="vegf-qty" id = "vegf-qty" size="2" value="0" readonly>
						<input type ="hidden" id = "vegf-bundle" value ="Vegetarian Meal Bundle">
						<input type ="hidden" id = "vegf-bundle-price" value = "40.00">
						<button class="plus-btn" onclick = "itemplus('vegf-qty')">+</button>
						<div>
							<button class="submit-btn" onclick="additem('vegf-qty','vegf-bundle','vegf-bundle-price')">Add to Order</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id ="alacarte-menu">
		<div id="menu-list" class="col">
			<div class="menu-row">
				<div class="menu-item">
					<image src="images/kebab.png">
					<p>Chicken Kebab<br>$10.00</p>
					<div class="order-count">
						<button class="minus-btn" onclick="itemminus(kebab-qty)">-</button>
						<input type="text" name="kebab-qty" id = "kebab-qty" size="2" value="0" readonly>
					    <input type ="hidden" id = "kebab" value ="Chicken Kebab">
					    <input type ="hidden" id = "kebab-price" value = "10.00">
						<button class="plus-btn"onclick="itemplus('kebab-qty')">+</button>
						<div>
							<button class="submit-btn" onclick="additem('kebab-qty','kebab','kebab-price')">Add to Order</button>
						</div>
					</div>
				</div>
				<div class="menu-item">
					<img src="images/chickenburger.png">
					<p>Chicken Burger<br>$9.00</p>
					<div class="order-count">
						<button class="minus-btn" onclick="itemminus('burger-qty')">-</button>
						<input type="text" name="burger-qty" id = "burger-qty" size="2" value="0" readonly>
						<input type ="hidden" id = "burger" value ="Chicken Burger">
						<input type ="hidden" id = "burger-price" value = "9.00">
						<button class="plus-btn" onclick = "itemplus('burger-qty')">+</button>
						<div>
							<button class="submit-btn" onclick="additem('burger-qty','burger','burger-price')">Add to Order</button>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-row">
				<div class="menu-item">
					<img src="images/chickenwrap.png">
					<p>Grilled Chicken Wrap<br>$7.50</p>
					<div class="order-count">
						<button class="minus-btn" onclick ="itemminus('wrap-qty')">-</button>
						<input type="text" name="wrap-qty" id = "wrap-qty" size="2" value="0" readonly >
						  <input type ="hidden" id = "wrap" value ="Grilled Chicken Wrap">
						  <input type ="hidden" id = "wrap-price" value = "7.50">
						<button class="plus-btn" onclick ="itemplus('wrap-qty')">+</button>
						<div>
							<button class="submit-btn" onclick="additem('wrap-qty','wrap','wrap-price')">Add to Order</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id = "sides-menu">
		<div id="menu-list" class="col">
		  <div class="menu-row">
			<div class="menu-item">
			  <image src="images/fries.png">
			  <p>Fries<br>$5.00</p>
			  <div class="order-count">
				<button class="minus-btn" onclick="itemminus()">-</button>
				<input type="text" name="fries-qty" id = "fries-qty" size="2" value="0" readonly >
				<input type ="hidden" id = "fries" value ="Fries">
				<input type ="hidden" id = "fries-price" value = "5.00">
				<button class="plus-btn"onclick="itemplus('fries-qty')">+</button>
				<div>
					<button class="submit-btn" onclick="additem('fries-qty','fries','fries-price')">Add to Order</button>
				</div>
			  </div>
			</div>
			<div class="menu-item">
			  <img src="images/menu-item.png">
			  <p>Salad<br>$5.00</p>
			  <div class="order-count">
				<button class="minus-btn" onclick="itemminus()">-</button>
				<input type="text" name="salad-qty" id = "salad-qty" size="2" value="0" readonly >
				<input type ="hidden" id = "salad" value ="Salad">
				<input type ="hidden" id = "salad-price" value = "5.00">
				<button class="plus-btn" onclick = "itemplus('salad-qty')">+</button>
				<div>
					<button class="submit-btn" onclick="additem('salad-qty','salad','salad-price')">Add to Order</button>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>

	<div id = "drinks-menu">
	  <div id="menu-list" class="col">
		  <div class="menu-row">
			<div class="menu-item">
			  <image src="images/coke.jpg">
			  <p>Coca-cola<br>$3.00</p>
			  <div class="order-count">
				<button class="minus-btn" onclick="itemminus()">-</button>
				<input type="text" name="coke-qty" id = "coke-qty" size="2" value="0" readonly >
				<input type ="hidden" id = "coke" value ="Coke">
				<input type ="hidden" id = "coke-price" value = "3.00">
				<button class="plus-btn" onclick = "itemplus('coke-qty')">+</button>
				<div>
					<button class="submit-btn" onclick="additem('coke-qty','coke','coke-price')">Add to Order</button>
				</div>
			  </div>
			</div>
			<div class="menu-item">
			  <img src="images/Sprite.jpg">
			  <p>Sprite<br>$3.00</p>
			  <div class="order-count">
				<button class="minus-btn" onclick="spriteminus()">-</button>
				<input type="text" name="sprite-qty" id = "sprite-qty" size="2" value="0" readonly >
				<input type ="hidden" id = "sprite" value ="Sprite">
				<input type ="hidden" id = "sprite-price" value = "3.00">
				<button class="plus-btn" onclick = "itemplus('sprite-qty')">+</button>
				<div>
					<button class="submit-btn" onclick="additem('sprite-qty','sprite','sprite-price')">Add to Order</button>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<div id="cart" class="col">
		<h2>My Order</h2>
		<form action ="checkout.php" method="post" id = "form1">
		<table border="0" id = "order-cart">
			<tr>
				<th class="left">Item</th>
				<th class="right">Price</th>
			</tr>
			<tr class="blank-row">
			</tr>
			<tr id="sub-total">
				<th class="left">SubTotal</th>
				<td class="right" id = "subtotal"><input type = "text" size = "2" value = "0.00" name = "order-subtotal" id = "order-subtotal" readonly></td>
			</tr>
			<tr>
				<th class="left">Tax</th>
				<td class="right">1.80</td>
			</tr>
			<tr>
				<th class="left">Delivery Charge</th>
				<td class="right">1.00</td>
			</tr>
			<tr class="blank-row">
				<td></td>
				<td></td>
			</tr>
			<tr id="net-total">
				<th class="left">Net Total</td>
				<td class="right"><input type = "text" size = "2" value = "0.00" name = "order-total" id = "order-total" readonly></th>
			</tr>
		</table>

		<div id="submit-order">
		  <button type = "submit" class="submit-btn" form = "form1">
			Checkout
		  </button>
		</div>
		</form>
	</div>
</div>
</div>
</div>
<div style="clear:both"></div>
<div id="footer">
	<div class="social">
		<span><a href="#"><img src="images/facebook.png"></a></span>
		<span><a href="#"><img src="images/twitter.png"></a></span>
		<span><a href="#"><img src="images/instagram.png"></a></span>
	</div>
	<small><i>Copyright &copy 2017 Food Fighters</i></small>
</div>

</body>

<script>

</script>
</html>
