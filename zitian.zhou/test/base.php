<?php
  function getBaseUrl($uri='aau/wnm608/Zitian.Zhou'){
    $baseUrl = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
    $baseUrl .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');
    // $baseUrl .= isset($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : dirname(getenv('SCRIPT_NAME'));
    return $baseUrl.'/'.$uri;
  }
  $db = mysqli_connect("localhost","root","Eimitian1231@","ps5");
  $baseUrl = getBaseUrl();
?>

  
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/css/my.css"/>
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>