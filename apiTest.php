<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    
    include_once './TaffaAPI.class.php';
    
    $TaffaAPI = new TaffaAPI(@$_GET['lang']);
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Hej TF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <h1>Hej TF</h1>
      <div>
          <ul>
              <li>
                  ATM
                  <?php
                    echo $TaffaAPI->getAtTheMoment();
                  ?>
              </li>
              <li>
                  Yesterday
                  <?php
                    #echo $TaffaAPI->getYesterday();
                    echo 'Unimplemented.';
                  ?>
              </li>
              <li>
                  Today
                  <?php
                    echo $TaffaAPI->getToday();
                  ?>
              </li>
              <li>
                  Måndag
                  <?php
                    echo $TaffaAPI->getDayN(1);
                  ?>
              </li>
              <li>
                  Tisdag
                  <?php
                    echo $TaffaAPI->getDayN(2);
                  ?>
              </li>
              <li>
                  Onsdag
                  <?php
                    echo $TaffaAPI->getDayN(3);
                  ?>
              </li>
              <li>
                  Torsdag
                  <?php
                    echo $TaffaAPI->getDayN(4);
                  ?>
              </li>
              <li>
                  Fredag
                  <?php
                    echo $TaffaAPI->getDayN(5);
                  ?>
              </li>
              <li>
                  Lördag
                  <?php
                    echo $TaffaAPI->getDayN(6);
                  ?>
              </li>
              <li>
                  Söndag
                  <?php
                    echo $TaffaAPI->getDayN(7);
                  ?>
              </li>
              
          </ul>
      </div>
  </body>
</html>
