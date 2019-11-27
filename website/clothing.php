
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

<ul>
<div  class="main-nav">
<img src="image3.jpg" width=300px height=300px>
<li><a href="ethnic.php">Ethnic wear</a></li>
</div>
<br>
<br>
<div class="main-nav">
<img src="image26.jpg" width=300px height=300px>
<li><a href="western.php">western wear</a></li>
</div>
</ul>
</header>
');
?>
<?php include('foot.php');?>