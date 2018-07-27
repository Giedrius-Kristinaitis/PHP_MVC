<?php 

require_once 'controller.php';

use MVC\Controller;

// Main controller class
class MainController extends Controller {

    /**
     * Class constructor
     * 
     * Initializes the controller and executes the action
     * 
     * @param model - model used by the controller
     * @param action - controller action to execute
     */
    public function __construct($model, $action){
        parent::__construct($model, $action);
        $this->executeAction($action, 'defaultAction');
    }

    /**
     * Action that shows main page
     */
    public function main(){
        $this->model->data = 'MVC is working';
    }

    /**
     * Default action to execute in case the desired action doesn't exist
     */
    public function defaultAction(){
        $this->model->data = 'Default action';
    }
}

?>