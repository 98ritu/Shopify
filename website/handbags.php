
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
<div class=gallery>
<div>
<a href="final.php?id=41"><img src="image41.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=42"><img src="image42.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>3000&nbsp</strike>Rs.1500</p>
</div>
<div>
<a href="final.php?id=43"><img src="image43.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>8000&nbsp</strike>Rs.4000</p>
</div>
<div>
<a href="final.php?id=44"><img src="image44.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>4000&nbsp</strike>Rs.2000</p>
</div>
<div>
<a href="final.php?id=45"><img src="image45.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=46"><img src="image46.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>6000&nbsp</strike>Rs.3000</p>
</div>
<div>
<a href="final.php?id=47"><img src="image47.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=48"><img src="image48.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>7000&nbsp</strike>Rs.3500</p>
</div>
<div>
<a href="final.php?id=49"><img src="image49.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>9000&nbsp</strike>Rs.4500</p>
</div>
<div>
<a href="final.php?id=50"><img src="image50.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>4000&nbsp</strike>Rs.2000</p>
</div>
</div>
</header>
');
?>
<?php include('foot.php');?>