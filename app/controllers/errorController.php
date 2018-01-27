<?php

class ErrorController extends Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function Index()
        {
            $this->view->render('error/index');
        }

}
