<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Helsinki');

include_once './TaffaAPI.class.php';

$TaffaAPI = new TaffaAPI(@$_GET['lang']);

$translations = array(
  "sv" => array(
    "about" => "Om Teknologföreningen",
    "member" => "Medlemsportal",
    "abi" => "Arbiturienter",
    "alumni" => "Alumner",
    "coop" => "Samarbete",
    "taffaAB" => "Täffä AB",
    "taffaAB_desc" => "Beställningsrestaurang",
    "taffa" => "Täffä",
    "taffa_desc" => "Lunchrestaurang",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Visionsprojektet"
  ),
  "en" => array(
    "about" => "About Teknologföreningen",
    "member" => "",
    "abi" => "",
    "alumni" => "",
    "coop" => "Cooperation",
    "taffaAB" => "Täffä AB",
    "taffaAB_desc" => "Catering restaurant",
    "taffa" => "Täffä",
    "taffa_desc" => "Lunch restaurant",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Visionsprojektet?"
  ),
  "fi" => array(
    "about" => "Teknologföreningen",
    "member" => "",
    "abi" => "",
    "alumni" => "",
    "coop" => "Yhteistyö & rekry",
    "taffaAB" => "Täffä AB",
    "taffaAB_desc" => "Tilausravintola",
    "taffa" => "Täffä",
    "taffa_desc" => "Lounasravintola",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Visionsprojektet?"
  )
);

$lang = $_GET['lang'];
if ($lang != "sv" && $lang != "en" && $lang != "fi") {
  $lang = "sv";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Teknologföreningen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/normalize.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <!-- The top bar will be misaligned if the title is removed: https://github.com/zurb/foundation/issues/918"-->
        <h1><a href="#"></a></h1>
      </li>
      <!-- Adds the menu icon without any text-->
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <!-- Top bar for mobile -->
    <section class="top-bar-section">
      <ul class="left">
        <?php if ($lang == "sv") { //All links in Swedish, only About and Cooperation in English and Finnish ?>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["about"]?></a></li>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["member"]?></a></li>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["abi"]?></a></li>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["alumni"]?></a></li>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li>
        <?php } else { ?>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["about"]?></a></li>
          <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li>
        <?php } ?>
        <li class="mobile-external-links first">
          <a href="#">
            <img src="assets/tf_natside_logon-06.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["taffaAB"]?></h3>
              <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
            </div>
          </a>
        </li>
        <li class="mobile-external-links">
          <a href="#">
            <img src="assets/tf_natside_logon-05.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["taffaAB"]?></h3>
              <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
            </div>
          </a>
        </li>
        <li class="mobile-external-links">
          <a href="#">
            <img src="assets/tf_natside_logon-07.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["traffpunkt"]?></h3>
              <span><?php echo $translations[$lang]["traffpunkt_desc"]?></span>
            </div>
          </a>
        </li>
      </ul>
    </section>
  </nav>
  <div class="content">
    <div class="row tf-logo">
      <div class="small-6 small-centered column">
        <img class="tf-logo" src="assets/tf_natside_logon-04.svg">
      </div>
    </div>
    <div class="row internal-links full-width">
      <div class="small-12 column">
        <ul class="page-links-desktop">

          <?php if ($lang == "sv") { //All links in Swedish, only About and Cooperation in English and Finnish ?>
            <li><a href="#"><?php echo $translations[$lang]["about"]?></a></li>
            <li><a href="#"><?php echo $translations[$lang]["member"]?></a></li>
            <li><a href="#"><?php echo $translations[$lang]["abi"]?></a></li>
            <li><a href="#"><?php echo $translations[$lang]["alumni"]?></a></li>
            <li><a href="#"><?php echo $translations[$lang]["coop"]?></a></li>
          <?php } else { ?>
            <li><a href="#"><?php echo $translations[$lang]["about"]?></a></li>
            <li><a href="#"><?php echo $translations[$lang]["coop"]?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="row external-links">
      <div class="small-12 large-4 columns">
        <a href="#">
          <img src="assets/tf_natside_logon-02.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffaAB"]?></h3><br>
            <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
          </div>
        </a>
      </div>
      <div class="small-12 large-4 columns">
        <a href="#">
          <img src="assets/tf_natside_logon-01.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffa"]?></h3><br>
            <span><?php echo $translations[$lang]["taffaAB"]?></span>
          </div>
        </a>
      </div>
      <div class="small-12 large-4 columns">
        <a href="#">
          <img src="assets/tf_natside_logon-03.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["traffpunkt"]?></h3><br>
            <span><?php echo $translations[$lang]["traffpunkt_desc"]?></span>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="todays-menu-container small-12 small-centered large-centered column">
        <div class="todays-menu">
          <?php echo $TaffaAPI->getNextMenu();?>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <ul>
      <?php
        //Language specific language links
        if ($lang == "sv") {
          echo '<li><a href="?lang=fi">Suomeksi</a></li>';
          echo '<li><a href="?lang=en">In English</a></li>';
        } else if ($lang == "en") {
          echo '<li><a href="?lang=sv">På svenska</a></li>';
          echo '<li><a href="?lang=fi">Suomeksi</a></li>';
        } else {
          echo '<li><a href="?lang=sv">På svenska</a></li>';
          echo '<li><a href="?lang=en">In English</a></li>';
        }
       ?>
    </ul>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
  $(document).foundation();
  </script>
</body>
</html>
