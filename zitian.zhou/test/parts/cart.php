<!-- <!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Cart</title>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body> -->
<?php require "../base.php"; ?>
<?php require "./header.php"; ?>
<?php
$sql = "select *,b.price as price from cart a join products b on a.product_id = b.product_id";
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_all($query, 1);
$total = 0;
foreach ($result as $row) {
    $total = $total + $row['price'] * $row['amount'];
}

if (isset($_POST['action'])) {
    $cart_id = $_POST['cart_id'];
    if ($_POST['action'] == "plus") {
        $sql = "update cart set `amount` = `amount` + 1 where id = '$cart_id'";
        $query = mysqli_query($db, $sql);
        if ($query) {
            echo "<script>alert('Operation successful!')</script>";
        } else {
            var_dump(mysqli_error($db));
            exit();
        }
    }
    if ($_POST['action'] == "reduce") {

        $amount = 0;
        foreach ($result as $row) {
            if ($cart_id == $row['id']) {
                $amount = $row['amount'];
            }
        }
        if ($amount == "1") {
            echo "<script>alert('The number of items must be at least 1')</script>";
        } else {
            $sql = "update cart set `amount` = `amount` - 1 where id = '$cart_id'";
            $query = mysqli_query($db, $sql);
            if ($query) {
                echo "<script>alert('Operation successful!')</script>";
            } else {
                var_dump(mysqli_error($db));
                exit();
            }
        }
    }
    $sql = "select *,b.price as price from cart a join products b on a.product_id = b.product_id";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_all($query, 1);
    $total = 0;
    foreach ($result as $row) {
        $total = $total + $row['price'] * $row['amount'];
    }
}
?>
<link rel="stylesheet" href="../css/cart.css">
<div class="container" style="width: 100%;margin: 0;padding: 0;">
    <div class="screen view-window flex-align-center flex-justify-center">
        <div class="items">
            <h2>
                The selected products have been added to the shopping cart. Take them home as soon as possible!
            </h2>
        </div>
    </div>

    <!-- <img src="../img/cart.jpg" alt="" class="banner"> -->
    <div class="main" style="margin:0px auto;width:999px">
        <h1 class="title">Cart</h1>

        <table class="table" style="width:100%">

            <tr>

                <td>
                    Name
                </td>
                <td>
                    Price
                </td>
                <td>
                    Quantity
                </td>
                <td>
                    Total
                </td>
                <td>
                    Operation
                </td>
            </tr>
            <?php
            foreach ($result as $row) {
                echo '<tr class="productItem">
                    <td>' . $row['name'] . '</td>
                    <td><span>$</span><span class="price">' . $row['price'] . '</span></td>
                    <td><form action="" method="POST"><input type="hidden" name="cart_id" value="' . $row['id'] . '"><button name="action" value="reduce" class="button reduce">-</button><span class="quantity">' . $row['amount'] . '</span><button name="action" value="plus" class="button plus">+</button></form></td>
                    <td><span>$</span><span class="total">' . ($row['price'] * $row['amount']) . '</span></td>
                    <td><a href="./deleteProduct.php?cart_id=' . $row['id'] . '"><button class="button deleteButton">Delete</button></a></td>
                </tr>';
            }
            ?>
            <!--             
            <tr class="productItem">

                <td>Marvel's Spider-Man: Miles Morales</td>
                <td><span>$</span><span class="price">39</span></td>
                <td><button class="button reduce">-</button><span class="quantity">1</span><button class="button plus">+</button></td>
                <td><span>$</span><span class="total">39</span></td>
                <td><a href=""><button class="button deleteButton">Delete</button></a></td>

            </tr>
            <tr class="productItem">

                <td>Demon's Souls</td>
                <td><span>$</span><span class="price">39</span></td>
                <td><button class="button reduce">-</button><span class="quantity">1</span><button class="button plus">+</button></td>
                <td><span>$</span><span class="total">39</span></td>
                <td><a href=""><button class="button deleteButton">Delete</button></a></td>

            </tr> -->
        </table>
        <div>Total:<span>$</span><span class="allTotal"><?php echo $total; ?></span></div>


        <div class="payButton"><a href="#"><button class="button">Pay</button></a></div>


        <?php
        require_once "./footer.php";
        ?>