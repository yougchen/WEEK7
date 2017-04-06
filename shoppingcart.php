<html>
	<head>
		<title>shoppingcart.php</title>
	</head>
		<body leftmargin="100" topmargin="100">
			<table border="1">
				<tr><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td></tr>
				<?php
				$sum=0;
				while(list($key,$value)=each($_COOKIE)){
					if(isset($_COOKIE[$key]) &&	is_array($_COOKIE[$key])){
					
					
					echo "<tr >"."<td>"."<a href='delete.php?id=".$key."'>"."刪除</a></td>";
					$price=0;
					$quantity=0;
					while(list($name,$unit)=each($_COOKIE[$key])){
						echo "<td>".$unit."</td>";
						if($name=="price"){$price=$unit;}
						if($name=="quantity"){$quantity=$unit;}
					}
					$sum=$sum+($price*$quantity);
					echo "</tr>";
					}

				}
				echo "<tr><td colspan=2></td><td colspan=3>總金額：".$sum."</td></tr>";
				?>
			</table>
			<hr/>
			|<a href="catalog.php">商品目錄<a>|
			<a href="shoppingcart.php">檢視購物車<a>|
			

		</body>

</html>
			
