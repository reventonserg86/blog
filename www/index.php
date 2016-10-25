<?php

//Front controller

//отображение ошибок
ini_set("display_errors", 1);
error_reporting(E_ALL);

//подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/Autoload.php');

// Вызов Router
$router = new Router();
$router->run();

