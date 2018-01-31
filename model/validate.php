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

function validString($pname)
{
    if (!empty($pname) && ctype_alpha($pname))
    {
        return true;
    }
}

$errors = array();

if(!validString($petname))
{
    $errors['pname'] = "Please enter a valid name";
}

if(!validColor($color))
{
    $errors['color'] = "Please enter a valid color";
}

if(!validString($pettype))
{
    $errors['ptype'] = "Please enter a valid type";
}

$success = sizeof($errors) == 0;