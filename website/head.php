<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Ecommerce Website</title>
<link rel="stylesheet" 
type="text/css"
href="bootstrap_min.css"/>
<style>
html
{
	background-image:url('background1.jpg');
	background-repeat:repeat;
	background-position:cover;
}
.logo img
{
	width:150px;
	height:auto;
	float:left;
}
.row
{
	width:90%;
	margin:auto:

}
body{
background:url("background1.jpg");
}
.gallery
{
margin:40px 400px;
}
.gallery img
{
width:230px;
padding:5px;
}
.gallery img:hover
{
filter:grayscale(100%);
transform:scale(1.2);
}
.main-nav li
{
	display:inline-block;
	background-color:pink;
}
.main-nav li a
{
	color:black;
	text-decoration:none;
	padding:20px 100px;
	font-family:"Roboto","sans-serif";
	font:40px;
	border:1px solid black;
}
.logo img
{
	width:150px;
	height:auto;
	float:left;
}
.main-nav1 li
{
	display:inline-block;
	background-color:pink;
}
.main-nav1 li a
{
	color:black;
	text-decoration:none;
	padding:20px 50px;
	font-family:"Roboto","sans-serif";
	font:40px;
	border:1px solid black;
}
.main-nav1 ul
{
	text-align:center;
}
.logo1 img
{
	width:30px;
	height:auto;
	float:right;
}
#cart-count{
	float:right;
	font-size:20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="row">
<div class="logo">
<img src="logo.png">
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<h1> Welcome to the biggest online store for women,shopify! 
<br>
"International quality products at a very affordable rate"
</h1>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="services.html">SERVICES <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="about.html">ABOUT<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="contact.html">CONTACT <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="news.html">NEWS<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="faq.html">FAQ<span class="sr-only">(current)</span></a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="category.php">SHOP BY CATEGORY<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"action=""method"" name="f1">
      <input class="form-control mr-sm-2" type="text" name="text" placeholder="Search the item">
      <input type="button" class="btn btn-secondary my-2 my-sm-0" name="b1" value="Search" type="submit" onclick="search()">
    </form>
  </div>
</nav>
<script type="text/javascript">
function search()
{
 var sr=f1.text.value;
 var sr1=sr.toUpperCase();
 if(sr1.localeCompare("WOMEN CLOTHING")==0||sr1.localeCompare("CLOTHING")==0)
  window.open('clothing.php','_blank');
 else if(sr1.localeCompare("SHOES")==0||sr1.localeCompare("WOMEN SHOES")==0||sr1.localeCompare("SNEAKERS")==0||sr1.localeCompare("BELLE SHOES")==0||sr1.localeCompare("HEELS")==0||sr1.localeCompare("BOOTS")==0||sr1.localeCompare("SPORT SHOES")==0)
  window.open('shoes.php','_blank');
 else if(sr1.localeCompare("WATCHES")==0||sr1.localeCompare("WATCH")==0||sr1.localeCompare("WOMEN WATCHES")==0)
  window.open('watch.php','_blank');
 else if(sr1.localeCompare("SPORTS WEAR")==0||sr1.localeCompare("GYM WEAR")==0||sr1.localeCompare("WOMEN SPORTS WEAR")==0||sr1.localeCompare("WOMEN GYM WEAR")==0)
  window.open('sports.php','_blank');
 else if(sr1.localeCompare("ETHNIC WEAR")==0||sr1.localeCompare("WOMEN ETHNIC WEAR")==0||sr1.localeCompare("SAREE")==0||sr1.localeCompare("SUIT")==0||sr1.localeCompare("LENHGA")==0)
  window.open('ethnic.php','_blank');
 else if(sr1.localeCompare("WESTERN WEAR")==0||sr1.localeCompare("WOMEN WESTERN WEAR")==0||sr1.localeCompare("JEANS")==0||sr1.localeCompare("TOP")==0||sr1.localeCompare("SHORTS")==0||sr1.localeCompare("DRESSES")==0)
  window.open('western.php','_blank');
 else if(sr1.localeCompare("SUNGLASSES")==0||sr1.localeCompare("WOMEN SUNGLASSES")==0||sr1.localeCompare("SHADES")==0)
  window.open('sunglasses.php','_blank');
 else if(sr1.localeCompare("JEWELLERY")==0||sr1.localeCompare("WOMEN JEWELLERY")==0||sr1.localeCompare("ETHNIC JEWELLERY")==0||sr1.localeCompare("CONTEMPORARY JEWELLERY")==0)
  window.open('jewellery.php','_blank');
 else if(sr1.localeCompare("HANDBAGS")==0||sr1.localeCompare("CLUTCHES")==0||sr1.localeCompare("BAG PACKS")==0||sr1.localeCompare("SLING BAGS")==0)
  window.open('handbags.php','_blank');
 else
  alert("Sorry!we didn't find products relevant to your category.kindly enter one of the following category ie,clothing,shoes,watches,handbags,sunglasses,jewellery,sports wear");
 }
 </script>