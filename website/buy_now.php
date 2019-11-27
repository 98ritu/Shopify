<?php
session_start();
include('head1.php');
if(!isset($_SESSION['cart'])){
			$ar=array();
			$_SESSION['cart']=$ar;;
			$_SESSION['cv']=0;
			$_SESSION['total']=0;
		}
$id=$_GET['id'];
include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, price FROM products where id ='".$id."'";
$result = $conn->query($sql);
$row = ($result->fetch_assoc());
//print_r($row);
$conn->close();

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
<a href=""><img src="image'.$id.'.jpg" ></a>
<p style="text-align:center">'.ucwords(strtolower($row['name'])).'</p>
<p style="text-align:center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp50% off&nbsp
<strike>'.($row['price']*2).'&nbsp</strike>Rs. '.$row['price'].'</p>
</div>
<br>
<br>
<div class="main-nav1">
<ul>
<button class="btn btn-primary" onclick="ale()">Proceed to Pay</button></center><br><br><br><br>
<br>
<br>
<br>
<br>
<p style=text-align:center;font-family:sans-serif;>-30 days easy returns</p>
<p style=text-align:center;font-family:sans-serif;>-instant refunds</p>
<p style=text-align:center;font-family:sans-serif;>-cash on delivery avaialable</p>
<p style=text-align:center;font-family:sans-serif;>-No delivery charges across india</p>
</ul>
</header>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="text-align:center">
      <div class="modal-header" style="display:block">
        <h3 class="modal-title" style="color:red;">Alert!</h3>
      </div>
      <div class="modal-body">
        <p>We will add Payment Gateway Soon!!</p>
      </div>
      
    </div>

  </div>
 </div>
 <script>
function ale(){
									$("#alert").modal("show");
							
}
</script>
');
?>
<?php include('foot.php');?>