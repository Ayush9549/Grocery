<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "grocery";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, pimage1, pname,pprice,prating FROM similar_product LIMIT 5";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  // while($pdata = $result->fetch_assoc()) {
    // ?>

		<div class="similar_products">
			<div class="child">
				<div class="card">
					<div class="like">
						<img src="./assets/img/heart.png" alt="">
					</div>
					<div class="pic">
						<img src="./assets/img/Atta-agro-fresh.webp" alt="">
					</div>
					<div class="details">
						<div class="product_name"><?php echo $pdata['p_name']; ?></div>
						<div class="product_price">₹<?php echo $pdata['p_price']; ?> <del>₹ <?php echo $pdata['p_price_del']; ?></del><span><?php echo $pdata['off']; ?></span></div>
					</div>
				</div>
			</div>
		</div>
 <?php 
  // }
// } else {
//   echo "0 results";
// }
// $conn->close();
// ?>