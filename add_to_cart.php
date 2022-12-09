<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
	</head>
	<body>
		<div class="navigation-bar">
			<?php
			include './navigation.php';
			?>
		</div>
		<div class="space1"></div>
		<div class="add_to_cart_container">
			<div class="p_all_details">
				<div class="deliver_to">Deliver To: Sikar - 332001</div>
				<div class="plist">
					<div class="p_details">
						<div class="product">
							<div class="pic">
								<img src="./assets/img/attaf.png" alt="">
							</div>
							<div class="pdetails">
								<div class="pname">AASHIRVAAD Shudh Chakki Atta</div>
								<div class="pweight">5kg</div>
								<div class="pprice">₹ 200 <strike>₹220</strike> <span>₹20 Off</span></div>
							</div>
						</div>
						<div class="inc_dec">
							<button class="decrement">-</button><span>1</span><button class="increment">+</button>
						</div>
					</div>
					<div class="p_details">
						<div class="product">
							<div class="pic">
								<img src="./assets/img/attaf.png" alt="">
							</div>
							<div class="pdetails">
								<div class="pname">AASHIRVAAD Shudh Chakki Atta</div>
								<div class="pweight">5kg</div>
								<div class="pprice">₹ 200 <strike>₹220</strike> <span>₹20 Off</span></div>
							</div>
						</div>
						<div class="inc_dec">
							<button class="decrement">-</button><span>1</span><button class="increment">+</button>
						</div>
					</div>
					<div class="place_order"><a href="#" ><button>Next Process</button></a></div>
				</div>
			</div>
			<div class="p_total_price">
				<div class="price_details">
					<div class="title">PRICE DETAILS</div>
					<ul class="p_mrp">
						<li>MRP(1 item)</li>
						<li>₹220</li>
					</ul>
					<ul class="pdiscount">
						<li>Product Discount</li>
						<li class="green">-₹21</li>
					</ul>
					<ul class="p_delivery_fee">
						<li>Delivery Fee</li>
						<li class="green">₹20</li>
					</ul>
					<ul class="total_amount">
						<li>Total Amount</li>
						<li>₹220</li>
					</ul>
				</div>
				<div class="save green">You will save ₹359 on this order</div>

			</div>
		</div>
		<div class="safe"><img src="./assets/img/shield.png" alt="">Safe and Secure Payments & Easy returns.100% Authentic<br> products.</div>
		<footer>
		<?php 
			include './footer.php'
		 ?>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script type="text/javascript" src="./assets/js/grocery.js"></script>
	</body>
</html>