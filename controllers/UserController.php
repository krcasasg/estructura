<?php
require_once __DIR__ .'/../models/User.php';
/**
 * summary
 */
class UserController 
{
    public $model;

    /**
     * summary
     */
    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
    	$model_properties = $this->model->getProperties();
        foreach ($model_properties as $property) {
            echo '<br>' . $property . '--------------';
        }
    }
}