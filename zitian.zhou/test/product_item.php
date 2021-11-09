<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>
		<?php include "parts/meta.php" ?>

</head>
<body>
	<?php include "parts/navbar.php" ?>
	<hearder class="navbar">
		<div class="container display-flex flex-align-center">
			<div class="flex-none">
				<h1>Store Website</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav nav flex">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="product_list.php">Products</a></li>
					<li><a href="#">Store</a></li>

				</ul>
			</nav>
		</div>
	</hearder>
	<div class="container">
		<div class="card soft">
			<h2>product item</h2>
			<div>This is product item: #<?= $_GET['id'] ?></div>
		</div>
	</div>
</body>
</html>