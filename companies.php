<?php

$suppLang = ['sv', 'fi', 'en'];
// XXX: PLEASE SET THESE ACCORDINGLY BEFORE GOING INTO PRODUCTION
$langArticleMap = [
    'sv' => '614',
    'fi' => '613',
    'en' => '612'
];

$lang = $suppLang[0];
if (isset($_GET['lang']) && in_array((string)$_GET['lang'], $suppLang))
  $lang = $_GET['lang'];

$forCompaniesObj = [
    'proto' => 'https',
    'domain' => 'about.teknologforeningen.fi',
    'path' => '/index.php',
    'getParam' => [
        ['option', 'com_content'],
        ['view', 'article'],
        ['id', $langArticleMap[$lang]]
    ]
];

$location = $forCompaniesObj['proto'].'://'.$forCompaniesObj['domain'].$forCompaniesObj['path'];
$nGetParam = count($forCompaniesObj['getParam']);

if($nGetParam > 0) {
    $location .= '?';
    for($getParamIdx = 0; $getParamIdx < $nGetParam; $getParamIdx++) {
        $curParam = $forCompaniesObj['getParam'][$getParamIdx];
        $location .= $curParam[0].'='.$curParam[1];
        if($getParamIdx !== $nGetParam - 1)
            $location .= '&';
    }
}

header('HTTP/1.1 301 Moved Permanently');
header('Location: '.$location);

exit();
