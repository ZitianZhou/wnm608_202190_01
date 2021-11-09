<?php
  $key = "";
  if(isset($_POST['key'])){
    $key = $_POST['key'];
    $sql = "select * from products where name like '%$key%'";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_all($query, 1);
    if(count($result) > 0){
      $product_id = $result[0]['product_id'];
      
      echo "<script>window.location.href='./index.php#product_id_".$product_id."'</script>";
      // exit();
    }else{
      echo "<script>No result!</script>";
    }
    
  }
?>
<header class="navbar">
    <div class="container  navHeight">
      <div class="title">
        <a style="text-decoration: none !important;
  list-style-type: none !important;
  color:white !important" href="<?php echo $baseUrl;?>/index.php"><h1>Ps5 Home</h1></a>
      </div>



      <!-- nav.nav>ul>li*4>a[href=#article$]>{Link $} -->
      <nav class="nav flex-none">
        <ul class="display-flex">
          <li><a href="#dig">PS5 Host (Digital Edition)</a></li>
          <li><a href="#ps5">PS5 Host </a></li>
          <li><a href="#game">PS5 Game</a></li>
          <li><a href="<?php echo $baseUrl;?>/admin/user.php">admin</a></li>
        </ul>
      
        <a style="color:black" href="<?php echo $baseUrl;?>/parts/cart.php"><button type="button" class=" bt btn btn-outline-secondary ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <span class="visually-hidden">cart</span>
        </button>
        </a>
        <form action="" method="POST">
        <input type="text" name="key" value="<?php echo $key;?>" class="form-control" style="width:128px;display:inline-block">
          <button class="bt btn btn-outline-danger ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            search
          </button>
      </form>
</form>
</div>
      </nav>
      <div class="flex-stretch"></div>


    </div>
  </header>