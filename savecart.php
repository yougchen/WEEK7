<?php
session_start();
if(isset($_SESSION["id"])){
	$date=strtotime("+1 hours",time());
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$quantity=$_SESSION["quantity"];

	setcookie($id."[id]",$id,$date);
	setcookie($id."[name]",$name,$date);
	setcookie($id."[price]",$price,$date);
	setcookie($id."[quantity]",$quantity,$date);

}
header("location:shoppingcart.php");

?>
