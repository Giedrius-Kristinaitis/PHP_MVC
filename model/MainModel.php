<?php

require_once 'model.php';

use MVC\Model;

// Main model class
class MainModel extends Model {

    /**
     * Class constructor
     */
    public function __construct(){
        parent::__construct(__DIR__ . '/../templates/main_template.php');
    }
}

?>