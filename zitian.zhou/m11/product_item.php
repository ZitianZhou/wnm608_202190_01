<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
	return $r."<img src='img/$o'>";
})

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: <?= $product->title ?></title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="image-main">
						<img src="img/<?= $product->image_thumb ?>" alt="">
					</div>
					<div class="image-thumbs">
						<?= $thumbs_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2><?= $product->title?></h2>
						<div>&dollar;<?= $product->price ?></div>
					</div>
					<div class="card-section">
						<a href="added_to_cart.php" class="form-button">Add To Cart</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card soft medium">
			<p><?= $product->description ?></p>
		</div>
			<h2>Related Products</h2>
			<div class="grid gap">
				

				<?
					echo array_reduce(
						MYSQLIQuery("
							SELECT *
							FROM products
							WHERE id in (4,6,8)
						"),
						'makeProductList'
					);
				?>
			</div>
	</div>
	
</body>
</html>