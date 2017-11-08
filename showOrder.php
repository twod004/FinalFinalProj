<!DOCTYPE html>
<html lang="en">

<head>
  <title>Food Fighters</title>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/showOrder.js"></script>
  <link rel="stylesheet" href="css/showOrder.css">
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
    <div id="my-order-info">
  		<div class="col" id="order-summary">
  			<h2>Order Summary</h2>
  			<table border="0">
            <tr class="personal-detail left">
              <td>Name</td>
			  <td class="detail">
				<?php
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

													$sql = "SELECT firstname FROM customers WHERE cemail='".$email."';";
													$result = mysqli_query($conn, $sql);


													if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo $row["firstname"];
														}
													} else {
														echo "0 results";
													} ?> <?php
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

													$sql = "SELECT lastname FROM customers WHERE cemail='".$email."';";
													$result = mysqli_query($conn, $sql);


													if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo $row["lastname"];
														}
													} else {
														echo "0 results";
													} ?>
			  
			  
			  </td>
            </tr>
            <tr class="personal-detail left">
			  <td>Contact</td>
              <td class="detail">
				<?php
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

                          $sql = "SELECT contact FROM customers WHERE cemail='".$email."';";
                          $result = mysqli_query($conn, $sql);


                          if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row["contact"];
                            }
                          } else {
                            echo "0 results";
                          } ?>
			  
			  
			  </td>
			</tr>
            <tr class="personal-detail left">
              <td>Email</td>
			  <td class="detail">
				<?php
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
                          echo $email;
													 ?>
			  
			  </td>
            </tr>
            <tr class="personal-detail left">
              <td>Address</td>
			  <td class="detail">
				<?php
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
													} ?>
			  </td>
			</tr>
			<tr class="blank-row">
			</tr>
            <tr class="personal-detail left">
              <td>Order Date</td>
			  <td class="detail">
				<?php
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

                          $sql = "SELECT orderdate FROM customers WHERE cemail='".$email."';";
                          $result = mysqli_query($conn, $sql);


                          if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row["orderdate"];
                            }
                          } else {
                            echo "0 results";
                          } ?>
			  </td>
            </tr>
			<tr class="personal-detail left last-detail-row">
              <td>Order Time</td>
			  <td class="detail">
				<?php
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

                          $sql = "SELECT ordertime FROM customers WHERE cemail='".$email."';";
                          $result = mysqli_query($conn, $sql);


                          if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row["ordertime"];
                            }
                          } else {
                            echo "0 results";
                          } ?>
			  </td>
            </tr>

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

                            echo " <tr><td class = 'left'><strong>".$menuqty."</strong> ".$menuname."</td><td class = 'right'>$".round($totalprice,2)."</td></tr>";

                          }
													/*First, we set up an SQL query that selects the id, firstname and lastname columns from the MyGuests table. The next line of code runs the query and puts the resulting data into a variable called $result.

													Then, the function num_rows() checks if there are more than zero rows returned.

													If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through. The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
													*/
                         ?>
  					<tr class="blank-row">
  					</tr>
  					<tr id="sub-total">
  						<th class="left">Subtotal</th>
  						<th class="right">$<?php
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
                          $sql = "SELECT subtotal from customers where cemail = '".$email."';";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo  $row["subtotal"];
														}
													} else {
														echo "0 results";
													} ?></th>
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
  						<th class="left">Net Total</th>
  						<th class="right">$<?php
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
                          $sql = "SELECT total from customers where cemail = '".$email."';";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
														// output data of each row
														while($row = mysqli_fetch_assoc($result)) {
															echo  $row["total"];
														}
													} else {
														echo "0 results";
													} ?></th>
  					</tr>
  				</table>
  		</div>
  		<div class="col" id="delivery-status">
  			<h2>Delivery Status</h2>
  			<p class="blinking">Preparing</p>
  		</div>
  		<div style="clear:both"></div>
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