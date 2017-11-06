<!DOCTYPE html>
<html lang="en">

<head>
  <title>Foo Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/menu.js"></script>
  <link rel="stylesheet" href="css/menu.css">
</head>

<body>

<div id="wrapper">
  <div id="logo">
    <a href="home.html"><img src="images/logo.png"></a>
  </div>
  <div id="nav">
    <a href="menu.php">Menu</a>
    <a href="myOrder.php">My Order</a>
    <a href="contactUs.html">Contact Us</a>
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
  					<input type="text" name="kebabf-qty" id = "kebabf-qty" size="2" value="0"  >
            <input type ="hidden" id = "kebab-bundle" value ="Chicken Kebab Bundle">
            <input type ="hidden" id = "kebab-bundle-price" value = "50.00">
  					<button class="plus-btn" onclick='itemplus("kebabf-qty")'>+</button>
            <button class="submit-btn" onclick="additem('kebabf-qty','kebab-bundle','kebab-bundle-price')">></button>
  				</div>
  			</div>
  			<div class="menu-item">
  				<img src="images/vegfeast.png">
  				<p>Vegetarian Meal Bundle<br>$40.00</p>
  				<div class="order-count">
  					<button class="minus-btn" onclick = "itemminus('vegf-qty')">-</button>
  					<input type="text" name="vegf-qty" id = "vegf-qty" size="2" value="0" >
            <input type ="hidden" id = "vegf-bundle" value ="Vegetarian Meal Bundle">
            <input type ="hidden" id = "vegf-bundle-price" value = "40.00">
  					<button class="plus-btn" onclick = "itemplus('vegf-qty')">+</button>
            <button class="submit-btn" onclick = "additem('vegf-qty','vegf-bundle','vegf-bundle-price')">></button>
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
					<input type="text" name="kebab-qty" id = "kebab-qty" size="2" value="0">
          <input type ="hidden" id = "kebab" value ="Chicken Kebab">
          <input type ="hidden" id = "kebab-price" value = "10.00">
					<button class="plus-btn"onclick="itemplus('kebab-qty')">+</button>
          <button class="submit-btn" onclick = "additem('kebab-qty','kebab','kebab-price')">></button>
				</div>
			</div>
			<div class="menu-item">
				<img src="images/chickenburger.png">
				<p>Chicken Burger<br>$9.00</p>
				<div class="order-count">
					<button class="minus-btn" onclick="itemminus('burger-qty')">-</button>
					<input type="text" name="menu-item-qty" id = "burger-qty" size="2" value="0">
          <input type ="hidden" id = "burger" value ="Chicken Burger">
          <input type ="hidden" id = "burger-price" value = "9.00">
					<button class="plus-btn" onclick = "itemplus('burger-qty')">+</button>
          <button class="submit-btn" onclick = "additem('burger-qty','burger','burger-price')">></button>
				</div>
			</div>
		</div>
		<div class="menu-row">
			<div class="menu-item">
				<img src="images/chickenwrap.png">
				<p>Grilled Chicken Wrap<br>$7.50</p>
				<div class="order-count">
					<button class="minus-btn" onclick ="itemminus('wrap-qty')">-</button>
					<input type="text" name="menu-item-qty" id = "wrap-qty" size="2" value="0"  >
          <input type ="hidden" id = "wrap" value ="Grilled Chicken Wrap">
          <input type ="hidden" id = "wrap-price" value = "7.50">
					<button class="plus-btn" onclick ="itemplus('wrap-qty')">+</button>
          <button class="submit-btn" onclick = "additem('wrap-qty', 'wrap','wrap-price')">></button>
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
        <input type="text" name="kebab-qty" id = "fries-qty" size="2" value="0"  >
        <input type ="hidden" id = "fries" value ="Fries">
        <input type ="hidden" id = "fries-price" value = "5.00">
        <button class="plus-btn"onclick="itemplus('fries-qty')">+</button>
        <button class="submit-btn" onclick = "additem('fries-qty','fries','fries-price')">></button>
      </div>
    </div>
    <div class="menu-item">
      <img src="images/menu-item.png">
      <p>Salad<br>$5.00</p>
      <div class="order-count">
        <button class="minus-btn" onclick="itemminus()">-</button>
        <input type="text" name="salad-qty" id = "salad-qty" size="2" value="0"  >
        <input type ="hidden" id = "salad" value ="Salad">
        <input type ="hidden" id = "salad-price" value = "5.00">
        <button class="plus-btn" onclick = "itemplus('salad-qty')">+</button>
        <button class="submit-btn" onclick = "additem('salad-qty','salad','salad-price')">></button>
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
        <input type="text" name="kebab-qty" id = "coke-qty" size="2" value="0"  >
        <input type ="hidden" id = "coke" value ="Coke">
        <input type ="hidden" id = "coke-price" value = "3.00">
        <button class="plus-btn" onclick = "itemplus('coke-qty')">+</button>
        <button class="submit-btn" onclick = "additem('coke-qty','coke','coke-price')">></button>
      </div>
    </div>
    <div class="menu-item">
      <img src="images/Sprite.jpg">
      <p>Sprite<br>$3.00</p>
      <div class="order-count">
        <button class="minus-btn" onclick="spriteminus()">-</button>
        <input type="text" name="menu-item-qty" id = "sprite-qty" size="2" value="0"  >
        <input type ="hidden" id = "sprite" value ="Sprite">
        <input type ="hidden" id = "sprite-price" value = "3.00">
        <button class="plus-btn" onclick = "itemplus('sprite-qty')">+</button>
        <button class="submit-btn" onclick = "additem('sprite-qty','sprite','sprite-price')">></button>
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
        <th></th>

			</tr>
			<!-- <tr>
				<td class="left">McSpicy<img class="cancel-button" src="images/x-icon.jpg"></td>
				<td class="right">9.90</td>
			</tr>
			<tr>
				<td class="left">Big Mac<img class="cancel-button" src="images/x-icon.jpg"></td>
				<td class="right">3.90</td>
			</tr> -->
			<tr class="blank-row">
			</tr>
			<tr>
				<th class="left">SubTotal</th>
				<td class="right" id = "subtotal"><input type = "text" size = "2" value = "0" name = "order-subtotal" id = "order-subtotal"></td>
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
				<th class="right"><input type = "text" size = "2" value = "0" name = "order-total" id = "order-total"></th>
			</tr>
		</table>

		<div id="submit-order">
			<!-- <a href="checkout.html">
				CheckOut
			</a> -->
      <button type = "submit" form = "form1">
        Checkout
      </button>
		</div>
  </form>
	</div>
  </div>
  <div style="clear:both"></div>

</div>
<div id="footer">
    <small><i>Copyright &copy 2017 Food Fighters</i></small>
</div>

</body>

<script>

</script>
</html>
