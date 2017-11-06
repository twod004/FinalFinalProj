


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
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
    <a href="menu.php">Menu</a>
    <a href="myOrder.php">My Order</a>
    <a href="contactUs.html">Contact Us</a>
  </div>
  <div id="content">
    <div id="my-order-info">
  		<div class="col" id="order-summary">
  			<h2>Order Summary</h2>
  			<table border="0">
  					<tr id="first-row">
  						<th class="left" colspan="2">Address</th>
  					</tr>
  					<tr class="item-detail-row">
  						<td class="left"><?php
              error_reporting(E_ALL);
              ini_set('display_errors', 'On');
                          $email = $_POST['email'];
													$servername = "localhost";
													$username = "f35im";
													$password = "f35im";
													$dbname = "f35im";

													// Create connection
													$conn = mysqli_connect($servername, $username, $password, $dbname);
													// Check connection
													if (!$conn) {
														die("Connection failed: " . mysqli_connect_error());
													}
													/*First, we set up an SQL query that selects the id, firstname and lastname columns from the MyGuests table. The next line of code runs the query and puts the resulting data into a variable called $result.

													Then, the function num_rows() checks if there are more than zero rows returned.

													If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through. The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
													*/

													$sql = "SELECT address FROM customers WHERE cemail='".$email."';";
													$result = mysqli_query($conn, $sql);


													if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo $row["address"];
														}
													} else {
														echo "0 results";
													} ?></td>
  					</tr>
  					<tr class="blank-row">
  					</tr>
  					<tr>
  						<th class="left"><p>Qty item</p></th>
  						<th class="right"><p>TOTAL</p></th>
  					</tr>

  					<tr class="item-detail-row">
              <?php
                          $email = $_POST['email'];
													$servername = "localhost";
													$username = "f35im";
													$password = "f35im";
													$dbname = "f35im";

													// Create connection
													$conn = mysqli_connect($servername, $username, $password, $dbname);
													// Check connection
													if (!$conn) {
														die("Connection failed: " . mysqli_connect_error());
													}
                          $sql = "SELECT customerid from customers where cemail = '".$email."';";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															$id =  $row["customerid"];
														}
													} else {
														echo "0 results";
													}

                          $sql1 = "SELECT COUNT(orderid) as 'count' from orders WHERE customerid ='".$id."';";
                          $result1 = mysqli_query($conn, $sql1);
                          $row1 = mysqli_fetch_array($result1);
                          $count = $row1['count'];

                          for ($i = 0; $i < $count; $i++ ){

                            $sql2 = "SELECT menuid from orders where customerid = '".$id."';";
                            $sql3 = "SELECT quantity from orders where customerid = '".$id."';";


                            $result2 = mysqli_query($conn, $sql2);
                            $result3 = mysqli_query($conn, $sql3);
                            if (mysqli_num_rows($result2)>0) {

                              while ($row = mysqli_fetch_assoc($result2)){
                                $rows[] = $row;
                                $menuid = $rows[$i]['menuid'];

                              }
                            }
                            if (mysqli_num_rows($result3)>0){
                              while ($row = mysqli_fetch_assoc($result3)){
                                $rows1[] = $row;
                                $menuqty = $rows1[$i]['quantity'];
                              }
                            }

                              $sql4 = "SELECT price from menu where menuid = '".$menuid."';";
                              $result4 = mysqli_query($conn, $sql4);
                            if (mysqli_num_rows($result4)>0) {

                              while ($row = mysqli_fetch_assoc($result4)){
                                $menuprice = $row['price'];
                              }
                            }

                            $sql5 = "SELECT name from menu where menuid = '".$menuid."';";
                            $result5 = mysqli_query($conn, $sql5);
                            if(mysqli_num_rows($result5)>0){
                              while ($row = mysqli_fetch_assoc($result5)){
                                $menuname = $row['name'];
                              }
                            }

                            $totalprice = $menuprice * $menuqty;

                            echo " <tr><td class = 'left'>".$menuname." x ".$menuqty."</td><td class = 'right'>$".$totalprice."</td></tr>";


                          }
													/*First, we set up an SQL query that selects the id, firstname and lastname columns from the MyGuests table. The next line of code runs the query and puts the resulting data into a variable called $result.

													Then, the function num_rows() checks if there are more than zero rows returned.

													If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through. The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
													*/
                         ?>
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
