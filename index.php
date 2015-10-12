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
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <h1>Hej TF</h1>
    <p>Hello wurld</p>
    <div><?php
            echo $TaffaAPI->getNextMenu();
    ?></div>
    <div>
        <h2>Öppethållningstider:</h2>
        <ul>
            <li>
                Måndag - Torsdag:
                <?php
                    echo TAFAPI_MON_THU_OPEN_H.
                            ':'.str_pad(TAFAPI_MON_THU_OPEN_MIN, 2, '0').
                            '-'.TAFAPI_MON_THU_CLOSE_H.
                            ':'.str_pad(TAFAPI_MON_THU_CLOSE_MIN, 2, '0');
                ?>
            </li>
            <li>
                Fredag:
                <?php
                    echo TAFAPI_FRI_OPEN_H.
                            ':'.str_pad(TAFAPI_FRI_OPEN_MIN, 2, '0').
                            '-'.TAFAPI_FRI_CLOSE_H.
                            ':'.str_pad(TAFAPI_FRI_CLOSE_MIN, 2, '0');
                ?>
            </li>
        </ul>
    </div>
  </body>
</html>
