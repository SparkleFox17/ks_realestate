<?php

$route->add('/', function() {
    $siteTitle = 'kevinstoddart.com';
    $siteDesc = 'Ontario based realestate';

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/home.php");
    getFoot();   
});
$route->add('/home', function() {
    $siteTitle = 'kevinstoddart.com';
    $siteDesc = 'Ontario based realestate';

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/home.php");
    getFoot();   
});

 
$route->add('/services/.+', function($service) {
    $siteTitle = 'kevinstoddart.com - Services- ' . undoSEOURL($service);
    $siteDesc = 'Ontario based realestate';

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/services.php");
    getFoot();   
});

$route->add('/calculators/.+', function($calculator) {
    $siteTitle = 'kevinstoddart.com - Calculators- ' . undoSEOURL($calculator);
    $siteDesc = 'Ontario based realestate';
    $calculator = undoSEOURL($calculator);
    $page = $calculator;

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/calculators.php");
    getFoot();   
});

$route->add('/gallery', function() {
    $siteTitle = 'kevinstoddart.com - Gallery';
    $siteDesc = 'Ontario based realestate';

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/gallery.php");
    getFoot();   
});



$route->add('/contact', function() {
    $siteTitle = 'kevinstoddart.com - Contact';
    $siteDesc = 'Ontario based realestate';

    getClasses();
    getHead($siteTitle, $siteDesc);
    include("view/contact.php");
    getFoot();   
});

$route->submit();

function getHead($siteTitle = null, $siteDesc = null) {
    define('SITETITLE', $siteTitle);
    define('SITEDESC', $siteDesc);

    include("./template/header.php");
    include("./template/nav.php");

    return;
}

function getClasses() {
    
}

function getFoot() {
    include("./template/footer.php");  

    return;
}

function makeSEOURL($toURL){
    //Lower case everything
    $toURL = strtolower($toURL);
    //Make alphanumeric (removes all other characters)
    $toURL = preg_replace("/[^a-z0-9_\s-]/", "", $toURL);
    //Clean up multiple dashes or whitespaces
    $toURL = preg_replace("/[\s-]+/", " ", $toURL);
    //Convert whitespaces and underscore to dash
    $toURL = preg_replace("/[\s_]/", "-", $toURL);
    return $toURL;
}

function undoSEOURL($toName){
    $toName = str_replace('-', ' ', $toName);
    $toName = preg_replace('/(?<!\s)-(?!\s)/', ' ', $toName);
    $toName = ucwords($toName);
    return $toName;
}


