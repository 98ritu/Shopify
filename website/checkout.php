<?php
	session_start();
	if(isset($_GET['qty'])&&isset($_GET['id']))
		add();
	else{
		
		//print_r($_SESSION['cart']);
		if(!isset($_SESSION['cart'])){
			$ar=array();
			$_SESSION['cart']=$ar;;
			$_SESSION['cv']=0;
			$_SESSION['total']=0;
		}
		$total=0;
		$arr=array();
		foreach($_SESSION['cart'] as $val){
			$arrval=fetchCart($val['id']);
			$arrval['qty']=$val['qty'];
			$arrval['id']=$val['id'];
			$arr[]=$arrval;
			$total=$total+$arrval['price']*$val['qty'];
		}
		$_SESSION['total']=$total;
		//print_r($arr);
	//	print($total);
	print('
<!doctype html>
<html>
<head>
<link rel="stylesheet" 
type="text/css"
href="mystyle4.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<header>
<div class="logo">
<img src="logo.png"></div>
</header>
<div class="row r2">
<center><h3>Cart</h3></center>
</div>');
if(count($arr)<1)
	print('<div class="row card"><center>
<h4>Cart is empty</h4></center>
</div>');
else{
foreach($arr as $val){
	print('
<div class="row card"><center>
<div class="col-lg-4 gallery">
<img src="image'.$val['id'].'.jpg"/>
</div>
<div class="col-lg-4 pad">
<h4>'.ucwords(strtolower($val['name'])).'</h4>
<h4>Rs. '.$val['price'].'</h4>
</div>
<div class="col-lg-4 pad">
<!--<button class="btn btn-danger">Remove</button>-->
</div></center>
</div>');

}
print('<center>
<button class="btn btn-danger" onclick="window.open(\'clear.php\',\'_self\')">Clear Cart</button>
<button class="btn btn-primary" onclick="ale()">Proceed to Pay</button></center>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="text-align:center">
      <div class="modal-header" style="display:block">
        <h3 class="modal-title" style="color:red;">Alert!</h3>
      </div>
      <div class="modal-body">
        <p>We will add Payment Gateway Soon!! </p>
      </div>
      
    </div>

  </div>
</div>
<script>
function ale(){
									$("#alert").modal("show");
							
}
</script>');
}
print('
</body>
</html>');
	}
	function fetchCart($id){
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
return $row;
	}
	function add(){
		$id=$_GET['id'];
		$qty=$_GET['qty'];
		$x=true;
		
		$cart=$_SESSION['cart'];
		$cv=count($cart);
		for($i=0;$i<$cv;$i++){
			if($cart[$i]['id']==$id){
				//echo 'hi';
				$cart[$i]['qty']=intval($cart[$i]['qty'])+intval($qty);
				//$cart[]=$val;
				$x=false;
				break;
			}
			//else
				//$cart[]=$val;
		}
		if($x){
		$cv=count($cart);
		$cart[]=array('id'=>$id,'qty'=>$qty);
		$cv++;
		$_SESSION['cart']=$cart;
		$_SESSION['cv']=$cv;
		}
		else
			$_SESSION['cart']=$cart;
		
		echo '1';
	}
?>