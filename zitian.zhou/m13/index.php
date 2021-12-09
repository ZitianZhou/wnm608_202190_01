<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Zhou's Store</title>


	<?php include "parts/meta.php" ?>

</head>
<body>


	<?php include "parts/navbar.php" ?>


	<div class="view-window" style="background-image:url(img/bg2.jpg)">
		<h2>PS5 Home</h2>
	</div>

	<div class="container">
		<div class="card soft text-center">
			<h2>Welcome to PS5 store</h2>
		</div>
	</div>
	<div class="container">
      <h2>Station</h2>

      <? recommendCategory('station') ?>
   </div>

   <div class="container">
      <h2>Games</h2>

      <? recommendCategory('game') ?>
   </div>

   <div class="container">
      <h2>Accessories</h2>

      <? recommendCategory('accessories') ?>
   </div>



	

</body>
</html>





