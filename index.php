<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    
    include_once './TaffaAPI.class.php';
    
    $taffaAPI = new TaffaAPI(@$_GET['lang']);
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
  </body>
</html>
