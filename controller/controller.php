<?php 

namespace MVC;

// Generic Controller class used by the MVC pattern
abstract class Controller {

    // model used by the controller
    protected $model;

    // action to execute
    private $action;

    /**
     * Class constructor
     * 
     * @param model - model used by the controller
     * @param action - action to execute
     */
    public function __construct($model, $action){
        $this->model = $model;
        $this->action = $action;
    }

    /**
     * Checks wether a given action exists in the controller
     * 
     * @param action - action to check
     */
    public function actionExists($action){
        return method_exists($this, $action);
    }

    /**
     * Executes a controller action
     * 
     * @param action - action to execute
     * 
     * optional @param default - default action to execute if the given one does not exist
     */
    public function executeAction($action){
        if($this->actionExists($action)){
            $this->$action();
        }else{
            if(func_num_args() > 1){
                $func = func_get_args()[1];
                $this->$func();
            }
        }
    }
}

?>