<?php
/**
 * summary
 */
class DefaultController
{
    /**
     * summary
     */
    public function __construct()
    {
        echo "calll default controller<br>";
    }

    public function index()
    {
    	echo 'call index in default controller<br>';
    	include_once __DIR__ . '/../views/' . explode('Controller', get_class())[0] . '/View.php';
    }
}