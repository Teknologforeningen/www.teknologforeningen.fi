<?php
session.start();

if (isSet($_GET['lang']))  {
	$lang = $GET['lang'];
	$_SESSION['lang'] = $lang;
}
else if(isSet($_SESSION['lang'])) {
	$lang = $_SESSION['lang'];
}
else {
	$lang = 'sv';
}

switch ($lang) {
  case 'sv':
  $lang_file = 'lang.sv.php';
  break;
 
  case 'fi':
  $lang_file = 'lang.fi.php';
  break;
 
  case 'en':
  $lang_file = 'lang.en.php';
  break;
 
  default:
  $lang_file = 'lang.sv.php';
 
}
 
include_once 'languages/'.$lang_file;
?>