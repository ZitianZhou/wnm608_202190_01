<?

include_once "lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Checkout</title>
	<? include "parts/meta.php"; ?>
</head>
<body>
	<? include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">

			<h2>Product Checkout</h2>
			<div class="container">
	<h2>Fill in your Information</h2>
	<div class="card soft">
		<h3>Customer Information</h3>
		<form>
			<input type="name" placeholder="Name" class="form-input">
			<input type="email" placeholder="E-mail" class="form-input">
			<input type="number" placeholder="Phone Number" class="form-input">
		</form>
		<h3>Payment Information</h3>
		<form >
			<div class="form-control">
				<label for="Card number" class="form-label">Card Number</label>
				<input type="xxxx xxxx xxxx xxxx" id="example-1" class="form-input" placeholder="xxxx xxxx xxxx xxxx">
			</div>
				<div class="display-flex flex-align-center">
				<div class="flex-none">
					<label for="example-search" class="form-label">Exp Date</label>
				</div>
				<div class="flex-stretch">
					<input type="search" id="example-search" class="form-input" placeholder="xx-xx">
				</div>
				<div class="flex-none">
					<label for="example-search" class="form-label">Security Code</label>
				</div>
				<div class="flex-stretch">
					<input type="search" id="example-search" class="form-input" placeholder="xxx">
				</div>
			</div>
			<div class="form-control">
				<label for="exaple-2" class="form-label">Address 1</label>
				<input type="xx-xx" id="example-2" class="form-input" placeholder="">
			</div>
			<div class="form-control">
				<label for="exaple-2" class="form-label">Address 2</label>
				<input type="xx-xx" id="example-2" class="form-input" placeholder="">
			</div>
				<div class="display-flex flex-align-center">
				<div class="flex-none">
					<label for="example-search" class="form-label">City, State</label>
				</div>
				<div class="flex-stretch">
					<input type="search" id="example-search" class="form-input" placeholder="">
				</div>
				<div class="flex-none">
					<label for="example-search" class="form-label">Zip Code</label>
				</div>
				<div class="flex-stretch">
					<input type="search" id="example-search" class="form-input" placeholder="xxxxx">
				</div>
		
		</form>


		</div>

		<div class="form-control">
			<a href="./" class="btn inline">Cancel</a>
			<a href="product_actions.php?action=reset-cart" class="btn inline">Confirm and Pay</a>
		</div>
			

		</div>
	</div>
</body>
</html>