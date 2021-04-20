<?php
parse_str(implode('&', array_slice($argv, 1)), $_GET);
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
    "wed" => "Ons",
    "takeaway" => "Endast takeaway."
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
    "wed" => "Wed",
    "takeaway" => "Takeaway only."
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
    "wed" => "Ke",
    "takeaway" => "Ainoastaan takeaway."
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
        <?php echo '<td>' . $translations[$lang]["week"] . '</td>' . '<td>' . '10:30 - 15:00' . '</td>'; ?>
      </tr>
      <tr>
        <?php echo '<td>' . $translations[$lang]["wed"] . '</td>' . '<td>' . '10:30 - 15:00' . '</td>'; ?>
      </tr>
      <!--tr>
        <?php echo '<td>' . $translations[$lang]["takeaway"] ; ?>
      </tr-->
    </table>
  </div>
</div>
