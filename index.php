<?php
session_start();


//FRONT CONTROLLER

// 1. Общие настройки
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once ROOT.'\components\Loader.php';
require_once ROOT.'\configs\config.php';

// 3. Установка соединения с базой данных


// 4. Вызов Router
$router = new Router();
$router->run();
