<?php

$heading = 'Contact Us';


function dd(){
    echo "<pre>";

var_dump($_SERVER);

    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

require "views/contact.view.php";