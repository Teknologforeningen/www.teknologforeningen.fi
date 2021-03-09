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
    "mon-thu" => "Mån - Tors",
    "fri" => "Fre",
    "mon-fri" => "Mån - Fre",
    "skogul" => "Sk&oslash;gul",
    "skogul_desc" => "Kvarterskrog",
    "for_companies" => "För företag",
    "week" => "Mån - Tis, Tor - Fre",
    "wed" => "Ons"
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
    "mon-thu" => "Mon - Thu",
    "fri" => "Fri",
    "mon-fri" => "Mon - Fri",
    "skogul" => "Sk&oslash;gul",
    "skogul_desc" => "Restaurant",
    "for_companies" => "For companies",
    "week" => "Mon - Tue, Thu - Fri",
    "wed" => "Wed"
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
    "mon-thu" => "Ma - To",
    "fri" => "Pe",
    "mon-fri" => "Ma - Pe",
    "skogul" => "Sk&oslash;gul",
    "skogul_desc" => "Kortteliravintola",
    "for_companies" => "Yrityksille",
    "week" => "Ma - Ti, To - Pe",
    "wed" => "Ke"
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
          <li class="mobile-internal-links">
            <a href="https://about.teknologforeningen.fi/index.php/sv/">
                <?php echo $translations[$lang]["about"]?>
            </a>
          </li>
          <li class="mobile-internal-links">
            <a href="https://medlem.teknologforeningen.fi/index.php/sv/">
              <?php echo $translations[$lang]["member"]?>
            </a>
          </li>
          <li class="mobile-internal-links">
            <a href="https://abi.teknologforeningen.fi/index.php/sv/">
              <?php echo $translations[$lang]["abi"]?>
            </a>
          </li>
          <li class="mobile-internal-links">
            <a href="https://stalm.teknologforeningen.fi/index.php/sv/">
              <?php echo $translations[$lang]["alumni"]?>
            </a>
          </li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } else if ($lang == "en"){ ?>
          <li class="mobile-internal-links">
            <a href="https://about.teknologforeningen.fi/index.php/en/">
              <?php echo $translations[$lang]["about"]?>
            </a>
          </li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } else { ?>
          <li class="mobile-internal-links">
            <a href="https://about.teknologforeningen.fi/index.php/fi/">
              <?php echo $translations[$lang]["about"]?>
            </a>
          </li>
          <!-- <li class="mobile-internal-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
        <?php } ?>
        <li class="mobile-internal-links">
          <a href=<?php echo "/companies.php/?lang=".$lang ?>>
            <?php echo $translations[$lang]["for_companies"]?>
          </a>
        </li>
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
          <a href="https://skogul.fi/<?php echo in_array($lang, ['fi', 'sv']) ? $lang : ''; ?>">
            <img alt="Skøgul" src="assets/skogul-icon-black.svg">
            <div class="link-container">
              <h3><?php echo $translations[$lang]["skogul"]?></h3>
              <span><?php echo $translations[$lang]["skogul_desc"]?></span>
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
            <li>
              <a href="https://about.teknologforeningen.fi/index.php/sv/">
                <?php echo $translations[$lang]["about"]?>
              </a>
            </li>
            <li>
              <a href="https://medlem.teknologforeningen.fi/index.php/sv/">
                <?php echo $translations[$lang]["member"]?>
              </a>
            </li>
            <li>
              <a href="https://abi.teknologforeningen.fi/index.php/sv/">
                <?php echo $translations[$lang]["abi"]?>
              </a>
            </li>
            <li>
              <a href="https://stalm.teknologforeningen.fi/index.php/sv/">
                <?php echo $translations[$lang]["alumni"]?>
              </a>
            </li>
            <!-- <li><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } else if ($lang == "en"){ ?>
            <li class="wider-links">
              <a href="https://about.teknologforeningen.fi/index.php/en/">
                <?php echo $translations[$lang]["about"]?>
              </a>
            </li>
            <!-- <li class="wider-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } else { ?>
            <li class="wider-links">
              <a href="https://about.teknologforeningen.fi/index.php/fi/">
                <?php echo $translations[$lang]["about"]?>
              </a>
            </li>
            <!-- <li class="wider-links"><a href="#"><?php echo $translations[$lang]["coop"]?></a></li> -->
          <?php } ?>
            <li>
              <a href=<?php echo "/companies.php/?lang=".$lang ?>>
                <?php echo $translations[$lang]["for_companies"]?>
              </a>
            </li>
        </ul>
      </div>
    </div>
    <div class="row external-links">
      <div class="small-12 large-6 columns">
        <a href="http://taffa.fi/">
          <img src="assets/tf_natside_logon-02.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffaAB"]?></h3><br>
            <span><?php echo $translations[$lang]["taffaAB_desc"]?></span>
          </div>
        </a>
      </div>
      <div class="small-12 large-6 end columns">
        <a href="<?php echo $translations[$lang]["taffa_url"]?>">
          <img src="assets/tf_natside_logon-01.svg" style="height: 64px">
          <div class="link-container">
            <h3><?php echo $translations[$lang]["taffa"]?></h3><br>
            <span><?php echo $translations[$lang]["taffa_desc"]?></span>
          </div>
        </a>
      </div>
    </div>
    <div class="row menu">
      <div class="todays-menu-container small-12 small-centered large-centered column">
        <div class="todays-menu">
          <?php echo $TaffaAPI->getNextMenu();?>
          <div id="week" class="hidden">
            <?php for ($i = 1; $i <= 4; $i++) {
              echo $TaffaAPI->getNextMenu($i);
            } ?>
          </div>
          <div id="hours">
            <table>
              <tr>
                <!--?php if (TAFAPI_MON_THU_OPEN_H == TAFAPI_FRI_OPEN_H && TAFAPI_MON_THU_CLOSE_H == TAFAPI_FRI_CLOSE_H) {
                    echo '<td>' . $translations[$lang]["mon-fri"] . '</td>';
                    echo '<td>' . str_pad(TAFAPI_MON_THU_OPEN_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_OPEN_MIN, 2, '0', STR_PAD_LEFT)
                         . ' - ' .str_pad(TAFAPI_MON_THU_CLOSE_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_CLOSE_MIN, 2, '0', STR_PAD_LEFT) . '</td>';
                  } else {
                    echo '<td>' . $translations[$lang]["mon-thu"] . '</td>';
                    echo '<td>' . str_pad(TAFAPI_MON_THU_OPEN_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_OPEN_MIN, 2, '0', STR_PAD_LEFT)
                         . ' - ' .str_pad(TAFAPI_MON_THU_CLOSE_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_MON_THU_CLOSE_MIN, 2, '0', STR_PAD_LEFT) . '</td>';
                    echo '</tr><tr>';
                    echo '<td>' . $translations[$lang]["fri"] . '</td>';
                    echo '<td>' . str_pad(TAFAPI_FRI_OPEN_H, 2, '0', STR_PAD_LEFT) .':'.str_pad(TAFAPI_FRI_OPEN_MIN, 2, '0', STR_PAD_LEFT). ' - '
                         . str_pad(TAFAPI_FRI_CLOSE_H, 2, '0', STR_PAD_LEFT).':'.str_pad(TAFAPI_FRI_CLOSE_MIN, 2, '0', STR_PAD_LEFT) . '</td>';
                } ?-->
                <?php echo '<td>' . $translations[$lang]["week"] . '</td>' . '<td>' . '10:30 - 15:00' . '</td>'; ?>
              </tr>
              <tr>
                <?php echo '<td>' . $translations[$lang]["wed"] . '</td>' . '<td>' . '10:30 - 15:00' . '</td>'; ?>
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
      <a href="/think-cell"><img alt="think-cell" src="assets/think-cell-logo_white.png" width="100px"></a>
      <a href="https://www.visma.fi/"><img alt="Visma" src="assets/visma.png" width="100px"></a>
      <a href="https://www.accenture.com/"><img alt="Accenture" src="assets/accenture.png" width="100px"></a>
      <a href="https://www.trimble.com/"><img alt="Trimble" src="assets/trimble.png" width="100px"></a>
      <a href="https://www.futurice.com/"><img alt="Futurice" src="assets/futurice.png" width="100px"></a>
      <a href="https://www.academicwork.fi/"><img alt="Academic work" src="assets/academicwork.png" width="100px"></a>
    </footer>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/scripts.js"></script>
  <script>
  $(document).foundation();
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-19332456-6', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
