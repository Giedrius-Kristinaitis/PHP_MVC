<?php 

namespace MVC;

// Generic Model class used by the MVC pattern
abstract class Model {

    // data stored by the model
    private $data;

    // view template to be loaded by the view that uses this model
    private $template;

    /**
     * Class contructor
     * 
     * @param template - template to be loaded by the view
     */
    public function __construct($template){
        $this->template = $template;
    }

    /**
     * Gets the data associated with the model
     */
    public function getData(){
        return $this->data;
    }

    /**
     * Sets the data associated with the model
     */
    public function setData($data){
        $this->data = $data;
    }

    /**
     * Gets the template associated with the model
     */
    public function getTemplate(){
        return $this->template;
    }
}

?>