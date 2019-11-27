
<?php
session_start();
include('head.php');
print('
<header>
<div class="logo1">
<a href="checkout.php"><img src="logo1.png"><span id="cart-count">');
											if(isset($_SESSION['cv']))
												echo $_SESSION['cv'];
											else
												echo '0';
											print('
										</span></a>
</div>
<body>
<ul>
<div class="main-nav">
<li><a href="clothing.php">clothing</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="shoes.php">shoes</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="watches.php">watches</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="jewellery.php">faishon jewellery</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="handbags.php">handbags and clutches</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="sunglasses.php">sunglasses</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div class="main-nav">
<li><a href="sports.php">sportswear</a></li>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
</ul>
</header>
');
?>
<?php include('foot.php');?>