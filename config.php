<?php

ini_set("display_errors" , "on");
function debug($arg)
{
     echo "<pre>";
     var_dump($arg);
     echo "</pre>";
}

$webroot = $_SERVER['DOCUMENT_ROOT'];
var_dump($webroot);