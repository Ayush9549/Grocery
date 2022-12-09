<a href="index.php">
	<div class="logo">
		<img src="./assets/img/logo.png" alt="">
	</div></a>
	<div class="menus">
		<div class="search-input"><input type="text" placeholder="Start shopping......"><img src="./assets/img/search.png"></div>
		<a href="index.php"><div class="home">Home</div></a>
		<div class="location" onclick="popup()">
			<img class="location-img" src="./assets/img/location.png" alt="">
			<span>Delivery to 332001</span>
			<!-- <img class="dropdown-arrow" src="./assets/img/dropdown-arrow.png"> -->
		</div>
		<div class="categories">Categories<img src="./assets/img/dropdown-arrow.png"></div>
		<?php
		$cokiename="user";
		if(!isset($_COOKIE[$cokiename]))
		{
			echo '<div onclick="loginPage()" class="login-btn">Login</div></a>';
		}
		else
		{
			echo '<div class="user_pic"><img src="./assets/img/user.png" alt=""></div>';
		}
		?>
	</div>
	<ul class="categorig">
		<!-- <li class="arrow_box"></li> -->
		<a href="#"><li> Fruits & Vegetables</li></a>
		<a href="#"><li> Dairy,Bread & Eggs</li></a>
		<a href="#"><li> Sweet Tooth</li></a>
		<a href="#"><li> Snacks & Munchies</li></a>
		<a href="#"><li> Bakery & Biscuits</li></a>
		<a href="#"><li> Breakfast & Instant Food</li></a>
		<a href="#"><li> Tea, Coffe & health Drink</li></a>
		<a href="#"><li> Cold Drinks & Jucies</li></a>
		<a href="#"><li> Atta Rice & Dal</li></a>
		<a href="#"><li> Masala Oil & More</li></a>
		<a href="#"><li> Sauces & Spreads</li></a>
		<a href="#"><li> Chicken,Meat & Fish</li></a>
		<a href="#"><li> Organic & Healthy Living</li></a>
		<a href="#"><li> Baby Care</li></a>
		<a href="#"><li> Cleaning Essentials</li></a>
		<a href="#"><li> Home & Office</li></a>
		<a href="#"><li> Personal Care</li></a>
	</ul>
	<div class="menu_conatiner">
		<div class="close">X</div>
		<div class="profile menu_list">Profile</div>
		<div class="mywishlist menu_list">My Wishlist</div>
		<a href="./add_to_cart.php"><div class="myorders menu_list">My Cart</div></a>
		<a href="#"><div class="myorders menu_list">My Orders</div></a>
		<a href="logout.php"><div class="logout menu_list">Logout</div></a>
	</div>

	<div class="login_rgister">
			<?php
				include './login_register.php';
			?>
	</div>

	
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script type="text/javascript" src="./assets/js/navigation.js"></script>