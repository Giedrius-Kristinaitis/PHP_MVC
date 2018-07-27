<?php

namespace MVC;

// Generic View class used by the MVC pattern
abstract class View {

    // model that is used by the view
    private $model;

    /**
     * Class constructor
     * 
     * @param model - model used by the view
     */
    public function __construct($model){
        $this->model = $model;
    }

    /**
     * Loads a template and renders the contents of the view on the webpage
     */
    public function render(){
        $data = $this->model->data;
        require_once $this->model->getTemplate();
    }
}  

?>