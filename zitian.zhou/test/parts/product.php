
  <!-- header>h1+p -->
  <!-- cmd + / -->
  


<?php
  $sql = "select * from products";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_all($query,1);
  // var_dump($result);
  if(isset($_POST['product_id'])){
    $product_id = $_POST['product_id'];
    $sql = "select * from cart where product_id = '$product_id'";
    $query = mysqli_query($db,$sql);
    $resultForCart = mysqli_fetch_all($query,1);
    
    if(count($resultForCart) == 0){
      
      $price = $result[0]['price'];
      $amount = "1";
      $sql = "insert into cart(`product_id`,`price`,`amount`) values ('$product_id','$price','$amount')";
      $query = mysqli_query($db,$sql);
      if($query){
        echo "<script>alert('The product has been put into the shopping cart')</script>";
      }else{
        var_dump(mysqli_error($db));
        exit();
      }
    }else{
      echo "<script>alert('The item already exists in the shopping cart');history.back(-1)</script>";
      exit();
      
      
    }
    
  }
?>


  <div class="screen view-window flex-align-center flex-justify-center">
    <div class="items">
      <h2>
        Come Here And Look For It.You Don't Know About The PS5
      </h2>
    </div>
  </div>

  <div class="about">
    <article id="dig" >
      <?php
        foreach($result as $rowForHost){
          if($rowForHost['category'] == "host"){
            echo '<h2><a name="about" id="product_id_'.$rowForHost['product_id'].'">'.$rowForHost['name'].'</a></h2>
            <div class="aboutimg">
              <img src="img/'.$rowForHost['cover'].'" alt=""/>
            </div>
            <div class="abouttxt">
             <h3>The official price : $'.$rowForHost['price'].'</h3>
             '.$rowForHost['description'].'
            </div>
            <form action="" method="POST">
            <input type="hidden" name="product_id" value="'.$rowForHost['product_id'].'">
            <button class="button"> add to shopping cart </button></form>';
          }
          
        }
      ?>


      
    </article>
  </div>
  
    

  </div>
  <div class="game">
    <article id="game">
    <div class="lists">
      <h2>PS5 game </h2>
      <?php
        foreach($result as $rowForGame){
          if($rowForGame['category'] == "game"){
            echo '<div class="listimg" id="product_id_'.$rowForGame['product_id'].'">
            <img src="img/'.$rowForGame['cover'].'" alt=""/>
            <div class="listp">
              <h2>'.$rowForGame['name'].'</h2>
              <br/>
              Release date: '.$rowForGame['release_date'].'
              <br/>
             <h3>The official price : $'.$rowForGame['price'].'</h3>
              <br/>
              <br/>
              '.$rowForGame['description'].'
            </div>
            <form action="" method="POST">
            <input type="hidden" name="product_id" value="'.$rowForGame['product_id'].'">
            <button class="button"> add to shopping cart </button></form>
          </div>';
          }
          
        }
      ?>
      
    </div>
    <div class="clear"></div>
      </article>
    </div>




  
