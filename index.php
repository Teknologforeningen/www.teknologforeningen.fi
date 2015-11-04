<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL);
    date_default_timezone_set('Europe/Helsinki');
    
    include_once './TaffaAPI.class.php';
    
    $TaffaAPI = new TaffaAPI(@$_GET['lang']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hej TF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/normalize.css">

  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <!-- The top bar will be misaligned if the title is removed: https://github.com/zurb/foundation/issues/918"-->
        <h1><a href="#">Teknologföreningen</a></h1>
      </li>
      <!-- Adds the menu icon without any text-->
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <section class="top-bar-section">
      <ul class="left">
        <li><a href="#">Om Teknologföreningen</a></li>
        <li><a href="#">Medlemsportal</a></li>
        <li><a href="#">Arbiturienter</a></li>
        <li><a href="#">Alumner</a></li>
        <li><a href="#">Samarbete</a></li>
      </ul>
    </section>
  </nav>
  <div class="row">
    <div class="small-6 small-centered column">
      <img src="assets/tf_natside_logon-08.svg" style="tf-logo" alt="Teknologföreningens logga">
    </div>
  </div>
  <div class="row">
    <div class="small-12 small-centered column">
      <?php echo $TaffaAPI->getNextMenu();?>
    </div>
  </div>
  <ul>
    <li><a href="#"><img src="assets/tf_natside_logon-05.svg" style="height: 64px"><span><h3>Täffä</h3><p>Teknologrestaurang</p></span></a> </li>
    <li><a href="#"><img src="assets/tf_natside_logon-06.svg" style="height: 64px"><span><h3>Täffä AB</h3><p>Beställningsrestaurang</p></span></a></li>
    <li><a href="#"><img src="assets/tf_natside_logon-07.svg" style="height: 64px"><span><h3>Träffpunkt Aalto</h3></span></a></li>
  </ul>
  <footer>
    <ul>
      <li><a href="#">Suomeksi</a></li>
      <li><a href="#">In English</a></li>
    </ul>
  </footer>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
  $(document).foundation();
  </script>
</body>
</html>
