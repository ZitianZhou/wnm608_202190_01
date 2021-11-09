<?php
    require_once "../base.php";
    $cart_id = $_GET['cart_id'];
    $sql = "delete from cart where id = '$cart_id'";
    $query = mysqli_query($db,$sql);
    if($query){
        echo "<script>alert('Delete product successfully!');history.go(-1)</script>";
      }else{
        var_dump(mysqli_error($db));
        exit();
      }
?>