<?php 
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/index') 
{
    require_once "templates\bien>voirtouslesbiens";
}