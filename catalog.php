<html>
	<head>
		<title>catalog.php</title>
	</head>
		<body leftmargin="100" topmargin="100">
			
				
			<form action="catalog.php" method="post" >
			選擇商品：
				<select name="item" >
					<option value="S001">10吋變形平板-$12000</option>
					<option value="s002">15.6吋筆記型電腦-$27000</option>
					<option value="s003">iPhone手機-$21000</option>
				</select>
					

				<input type="text" name="quantity">					
				<input type="submit" name="" value="訂購">
			</form>
			<hr/>
			|<a href="catalog.php">商品目錄<a>|
			<a href="shoppingcart.php">檢視購物車<a>|
			<?php
			session_start();
			if(isset($_POST["item"])){
				$_SESSION["quantity"]=$_POST["quantity"];
				$item=$_POST["item"];
				$_SESSION["id"]=$item;
				switch(strtoupper($item)){
					case "S001":
						$_SESSION["name"]="10吋變形平板";
						$_SESSION["price"]=12000;
						break;
					case "S002":
						$_SESSION["name"]="15.6吋筆記型電腦";
						$_SESSION["price"]=27000;
						break;
					case "S003":
						$_SESSION["name"]="iPhone手機";
						$_SESSION["price"]=21000;
						break;

				}
			
			header("location:savecart.php");
			}

			?>
			
			

		</body>
</html>
