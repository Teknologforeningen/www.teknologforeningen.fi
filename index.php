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
    "abi" => "Abiturienter",
    "alumni" => "StÄlMar",
    "coop" => "Samarbete",
    "taffaAB" => "Täffä AB",
    "taffaAB_desc" => "Beställningsrestaurang",
    "taffa" => "Täffä",
    "taffa_desc" => "Lunchrestaurang",
    "taffa_url" => "https://about.teknologforeningen.fi/index.php/sv/dagsrestaurangen",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Visionsprojektet",
    "mon-thu" => "Mån - Tors",
    "fri" => "Fre"
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
    "taffa_url" => "https://about.teknologforeningen.fi/index.php/en/lunch-restaurant",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Vision project",
    "mon-thu" => "Mon - Thu",
    "fri" => "Fri"
  ),
  "fi" => array(
    "about" => "Teknologföreningenistä",
    "member" => "",
    "abi" => "",
    "alumni" => "",
    "coop" => "Yhteistyö & rekry",
    "taffaAB" => "Täffä AB",
    "taffaAB_desc" => "Tilausravintola",
    "taffa" => "Täffä",
    "taffa_desc" => "Lounasravintola",
    "taffa_url" => "https://about.teknologforeningen.fi/index.php/fi/teekkariravintola",
    "traffpunkt" => "Träffpunkt Aalto",
    "traffpunkt_desc" => "Visio-projekti",
    "mon-thu" => "Ma - To",
    "fri" => "Pe"
  )
);

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
} else {
  $lang = "sv";
}

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

  <!-- Favicons generated using http://realfavicongenerator.net highly recommended to use if these change -->
  <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-touch-icon-76x76.png">
  <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="ico/manifest.json">
  <link rel="mask-icon" href="ico/safari-pinned-tab.svg" color="#b20738">
  <link rel="shortcut icon" href="ico/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Teknologföreningen">
  <meta name="application-name" content="Teknologföreningen">
  <meta name="msapplication-TileColor" content="#b20738">
  <meta name="msapplication-config" content="ico/browserconfig.xml">
  <meta name="theme-color" content="#b20738">

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
          <li class="mobile-internal-links"><a href="https://about.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["about"]?></a></li>
          <li class="mobile-internal-links"><a href="https://medlem.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["member"]?></a></li>
          <li class="mobile-internal-links"><a href="https://abi.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["abi"]?></a></li>
          <li class="mobile-internal-links"><a href="https://stalm.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["alumni"]?></a></li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } else if ($lang == "en"){ ?>
          <li class="mobile-internal-links"><a href="https://about.teknologforeningen.fi/index.php/en/"><?php echo $translations[$lang]["about"]?></a></li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } else { ?>
          <li class="mobile-internal-links"><a href="https://about.teknologforeningen.fi/index.php/fi/"><?php echo $translations[$lang]["about"]?></a></li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } ?>
        <li class="mobile-external-links first">
          <a href="http://taffa.fi/">
            <img src="assets/tf_natside_logon-06.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["taffaAB"]?></h3>
              <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
            </div>
          </a>
        </li>
        <li class="mobile-external-links">
        <a href="<?php echo $translations[$lang]["taffa_url"]?>">
            <img src="assets/tf_natside_logon-05.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["taffa"]?></h3>
              <span><?php echo $translations[$lang]["taffa_desc"]?></span>
            </div>
          </a>
        </li>
        <li class="mobile-external-links">
          <a href="https://traffpunktaalto.fi/">
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
            <li><a href="https://about.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["about"]?></a></li>
            <li><a href="https://medlem.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["member"]?></a></li>
            <li><a href="https://abi.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["abi"]?></a></li>
            <li><a href="https://stalm.teknologforeningen.fi/index.php/sv/"><?php echo $translations[$lang]["alumni"]?></a></li>
            <!-- <li><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } else if ($lang == "en"){ ?>
            <li class="wider-links"><a href="https://about.teknologforeningen.fi/index.php/en/"><?php echo $translations[$lang]["about"]?></a></li>
            <!-- <li class="wider-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } else { ?>
            <li class="wider-links"><a href="https://about.teknologforeningen.fi/index.php/fi/"><?php echo $translations[$lang]["about"]?></a></li>
            <!-- <li class="wider-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="row external-links">
      <div class="small-12 large-4 columns">
        <a href="http://taffa.fi/">
          <img src="assets/tf_natside_logon-02.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffaAB"]?></h3><br>
            <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
          </div>
        </a>
      </div>
      <div class="small-12 large-4 columns">
        <a href="<?php echo $translations[$lang]["taffa_url"]?>">
          <img src="assets/tf_natside_logon-01.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffa"]?></h3><br>
            <span><?php echo $translations[$lang]["taffa_desc"]?></span>
          </div>
        </a>
      </div>
      <div class="small-12 large-4 columns end">
        <a href="https://traffpunktaalto.fi/">
          <img src="assets/tf_natside_logon-03.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["traffpunkt"]?></h3><br>
            <span><?php echo $translations[$lang]["traffpunkt_desc"]?></span>
          </div>
        </a>
      </div>
    </div>
    <div class="row menu">
      <div class="todays-menu-container small-12 small-centered large-centered column">
        <div class="todays-menu">
          <?php echo $TaffaAPI->getNextMenu();?>
          <div id="week" class="hidden">
            <?php echo $TaffaAPI->getNextMenu(1);?>
            <?php echo $TaffaAPI->getNextMenu(2);?>
            <?php echo $TaffaAPI->getNextMenu(3);?>
            <?php echo $TaffaAPI->getNextMenu(4);?>
          </div>
          <div id="hours">
            <table>
              <tr>
                <td><?php echo $translations[$lang]["mon-thu"]?></td>
                <!--<td>10:30 - 16:00</td>-->
                <td><?php echo str_pad(TAFAPI_MON_THU_OPEN_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_OPEN_MIN, 2, '0', STR_PAD_LEFT)
                        . ' - ' .str_pad(TAFAPI_MON_THU_CLOSE_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_CLOSE_MIN, 2, '0', STR_PAD_LEFT); ?></td>
              </tr>
              <tr>
                <td><?php echo $translations[$lang]["fri"]?></td>
                <!--<td>10:30 - 15:00</td>-->
                <td><?php echo str_pad(TAFAPI_FRI_OPEN_H, 2, '0', STR_PAD_LEFT) .':'.str_pad(TAFAPI_FRI_OPEN_MIN, 2, '0', STR_PAD_LEFT). ' - ' 
                        .str_pad(TAFAPI_FRI_CLOSE_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_FRI_CLOSE_MIN, 2, '0', STR_PAD_LEFT); ?></td>
              </tr>
            </table>
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
      <p>
        Teknologföreningens nationsföretag
      </p>
      <a href="http://www.aktia.fi/sv/"><img src="assets/aktia_esbo_hagalund.png" width="100px"></a>
      <a href="http://www.elisa.fi/"><img src="assets/elisa.png" width="100px"></a>
      <a href="http://www.walki.com/"><img src="assets/walki.png" width="100px"></a>
    </footer>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
  $(document).foundation();
  </script>
</body>
</html>
