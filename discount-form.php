<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Product Discount Calculator</title>
		<link rel="stylesheet" href="_css/styles.css">
	</head>
	<body>
		<div id="content">
			<h1>Product Discount Calculator</h1>		
			<form action="discount-answer.php" method="get">
				<div id="data">
					<label>Product Name:</label>
					<input type="text" name="prod_name"><br>
					<label>List Price:</label>
					<input type="text" name="prod_price"><br>
					<label>Discount Percent:</label>
					<input type="text" name="discount_percent"> %<br>
				</div>
					
				<div id="buttons">
					<label>&nbsp;</label>
					<input type="submit" value="Calculate Discount"><br>
				</div>
		</form>
		</div>
	</body>
</html>
