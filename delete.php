<?php
$date=strtotime("-1 hours",time());
$id=$_GET["id"];

if (isset($_COOKIE[$id])) {
	# code...
	while(list($name,$unit)=each($_COOKIE[$id])){
		setcookie($id."[".$name."]","",$date);
	}
}
header("location:shoppingcart.php")
?>
