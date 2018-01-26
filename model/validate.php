<?php
/**
 * Created by PhpStorm.
 * User: ajwinder
 * Date: 1/26/18
 * Time: 7:19 AM
 */

function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($str)
{
    if (!empty($str) && ctype_alpha($str))
    {
        return true;
    }
}


$errors = array();

if (!validColor($color))
{
    $errors['color'] = "Please enter a valid color";

}

$success = sizeof($errors) == 0;