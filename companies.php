<?php

$suppLang = ['sv', 'fi', 'en'];
$langArticleMap = [
    'sv' => '615',
    'fi' => '613',
    'en' => '625'
];

$lang = $suppLang[0];
if (isset($_GET['lang']) && in_array((string)$_GET['lang'], $suppLang))
  $lang = $_GET['lang'];

$getParam = [
    'option' => 'com_content',
    'view' => 'article',
    'id' => $langArticleMap[$lang]
];
$urlObj = [
    'scheme' => 'https',
    'host' => 'about.teknologforeningen.fi',
    'path' => '/index.php/'.$lang.'/',
    'query' => http_build_query($getParam)
];

$location = $urlObj['scheme'].'://'.$urlObj['host'].$urlObj['path'].'?'.$urlObj['query'];

# 301 = moved permanently, so browsers will cache this redirect
http_response_code(301);
header('Location: '.$location);

exit();
