<?php
session_start();

// Sperator /
define("DS", DIRECTORY_SEPARATOR);

//Root of location
define('ROOT', dirname(__fILE__));

// root to array
$url = isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'], '/')) : [];
require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
