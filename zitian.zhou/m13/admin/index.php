<?

	include "../lib/php/functions.php";
	include "../parts/templates.php";
	include "../data/api.php";


setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');

$products = makeStatement("products_admin_all",[]);

$empty_product = (object)[
	"title" => "",
	"price" => "",
	"category" => "",
	"description" => "",
	"quantity" => "",
	"image_other" => "",
	"image_thumb" => ""
];

switch(@$_GET['crud']) {
	case 'update':

		makeStatement("product_update",[
			$_POST['product_title'],
			$_POST['product_price'],
			$_POST['product_category'],
			$_POST['product_description'],
			$_POST['product_quantity'],
			$_POST['product_image_other'],
			$_POST['product_image_thumb'],
			$_POST['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;

	case 'create':

		$id = makeStatement("product_insert",[
			$_POST['product_title'],
			$_POST['product_price'],
			$_POST['product_category'],
			$_POST['product_description'],
			$_POST['product_quantity'],
			$_POST['product_image_other'],
			$_POST['product_image_thumb']
		]);

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;

	case 'delete':

		makeStatement("product_delete",[
			$_GET['id']
		]);

		header("location:{$_SERVER['PHP_SELF']}");
		break;
}

function showProductPage($product) {
	$id= $_GET['id'];

	$thumbs = explode(",",$product->image_other);

	$thumb_elements = array_reduce($thumbs,function($r,$o){
		return $r."<img src='img/$o'>";
	});

$addoredit = $id == 'new'?'Add':'Edit';
$createorupdate = $id =='new'?'create':'update';

$productdata = $id == 'new'? '': <<<HTML
<div class="card soft">
	<div class="display-flex">
		<h2 class="flex-stretch">$product->title</h2>h2>
		<div>
			<a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">Delete</a>
		</div>
	</div>
	<div>
		<strong>Category</strong>
		<span>$product->category</span>
	</div>
	<div>
		<strong>Price</strong>
		<span>$product->price</span>
	</div>
	<div>
		<strong>Quantity</strong>
		<span>$product->quantity</span>
	</div>
	<div>
		<strong>Description</strong>
		<span>$product->description</span>
	</div>
	<div>
		<strong>Images</strong>
		<div class="image-thumbs"><img src="img/$product->image_thumb"></div>
		<div class="image-thumbs">$thumb_elements</div>
	</div>
</div>
HTML;

echo <<<HTML
<div class="card soft">
	<nav class="nav crumbs">
		<ul>
			<li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		</ul>
	</nav>
</div>

<div class="grid gap">
	<div class="col-xs-12 col-md-4">$productdata</div>
	<div class="col-xs-12 col-md-8">
		<div class="card soft">
			<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
				<h2>$addoredit Product</h2>
				<div class="form-control">
					<label for="product-title" class="form-label">Title</label>
					<input id="product-title" name="product-title" type="text" placeholder="Type product title" class="form-input" value="$product->title">
				</div>
				<div class="form-control">
					<label for="product-category" class="form-label">Title</label>
					<input id="product-category" name="product-category" type="text" placeholder="Type product category" class="form-input" value="$product->category">
				</div>
				<div class="form-control">
					<label for="product-price" class="form-label">Title</label>
					<input id="product-price" name="product-price" type="text" placeholder="Type product price" class="form-input" value="$product->price">
				</div>
				<div class="form-control">
					<label for="product-quantity" class="form-label">Title</label>
					<input id="product-quantity" name="product-quantity" type="text" placeholder="Type product quantity" class="form-input" value="$product->quantity">
				</div>
				<div class="form-control">
					<label for="product-description" class="form-label">Title</label>
					<textarea id="product-description" name="product-description" class="form-input">$product->description</textarea>
				</div>
				<div class="form-control">
					<label for="product-image_thumb" class="form-label">Title</label>
					<input id="product-image_thumb" name="product-image_thumb" type="text" placeholder="Type product image_thumb" class="form-input" value="$product->image_thumb">
				</div>
				<div class="form-control">
					<label for="product-image_other" class="form-label">Title</label>
					<input id="product-image_other" name="product-image_other" type="text" placeholder="Type product image_other" class="form-input" value="$product->image_other">
				</div>
				<div class="form-control">
					<input type="submit" class="form-button" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Administration</title>
	<? include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Products Admin</h1>
			</div>
			<div class="flex-stretch">
				<nav class="nav flex-none">
					<ul class="display-flex">
						<li><a href="product_list.php">Store</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="container">
		<?
			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=='new' ?
					$empty_product :
					array_find($products,function($o){
						return $o->id==$_GET['id'];
					})
				);
			} else {
?>

	<div class="card medium soft">
		<h2>Product List</h2>
		<div>
			<?
				echo array_reduce($products,'makeAdminList');	

			?>
		</div>
	</div>

<? } ?>


	</div>
	
</body>
</html>