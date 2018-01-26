<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base :: instance();
//$f3 = set('colors', array('pink', 'green', 'blue'));

//Define a default route
$f3->route('GET|POST /new-pet', function ($f3)
{
    $f3->set('username','aj');

    $f3->set('colors', array('pink','green', 'blue'));
    $template = new Template();
    echo $template->render('views/home.html');
}
);

//Run fat free
$f3->run();
