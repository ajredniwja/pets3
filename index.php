<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base :: instance();

$f3-> set('colors', array('pink', 'green', 'blue'));

$f3-> set('DEBUG', 3);

$f3->route('GET|POST /new-pet', function($f3)
{

    if (isset($_POST['submit']))
    {
        //print_r($_POST);
        $color = $_POST['pcolor'];
        $petname = $_POST['pname'];
        $pettype = $_POST['ptype'];

        require ('model/validate.php');

        $f3->set('color',$color);
        $f3->set('pname',$petname);
        $f3->set('ptype',$pettype);
        $f3->set('success',$success);
        $f3->set('errors', $errors);
    }

    $template = new Template();
    echo $template->render('views/home.html');

});

//Run fat free
$f3->run();
