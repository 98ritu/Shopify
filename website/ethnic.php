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
<a href="final.php?id=1"><img src="image1.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=2"><img src="image2.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>3000&nbsp</strike>Rs.1500</p>
</div>
<div>
<a href="final.php?id=3"><img src="image3.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>8000&nbsp</strike>Rs.4000</p>
</div>
<div>
<a href="final.php?id=4"><img src="image4.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>4000&nbsp</strike>Rs.2000</p>
</div>
<div>
<a href="final.php?id=5"><img src="image5.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=6"><img src="image6.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>6000&nbsp</strike>Rs.3000</p>
</div>
<div>
<a href="final.php?id=7"><img src="image7.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>5000&nbsp</strike>Rs.2500</p>
</div>
<div>
<a href="final.php?id=8"><img src="image8.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>7000&nbsp</strike>Rs.3500</p>
</div>
<div>
<a href="final.php?id=9"><img src="image9.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>9000&nbsp</strike>Rs.4500</p>
</div>
<div>
<a href="final.php?id=10"><img src="image10.jpg"></a>
<p>&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>4000&nbsp</strike>Rs.2000</p>
</div>
</div>
</header>
');
?>
<?php include('foot.php');?>