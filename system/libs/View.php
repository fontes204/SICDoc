<?php

class View  extends Controller {
    #code

    function __construct() {
        //echo"Isto e uma view";
    }

    public function render($name,$include=null) {

        if($include==null)
            require 'app/views/'.$name.'.phtml';
        else
        {
            $pasta=explode("/",$name);

            require 'app/views/main/header.phtml';
            require 'app/views/main/index.php';
            if($include==1)
                require 'app/views/'.$name.'index.phtml';
            else {
                require 'app/views/' . $pasta[0] . '/' . $include . '/index.phtml';
            }
            require 'app/views/main/footer.phtml';
        }
    }


}

