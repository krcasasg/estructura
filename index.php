<?php
$control = isset($_GET['c']) ? $_GET['c'] : 'Default';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$control_controller = $control . 'Controller';
require_once __DIR__ . '/controllers/' . $control_controller . '.php';

$controller = new $control_controller;

method_exists($controller, $action) ? $controller->$action() : $controller->index();  