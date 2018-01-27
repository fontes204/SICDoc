<?php

class View  extends Controller {
    #code

    function __construct() {
        //echo"Isto e uma view";
    }

    public function render1($name=false,$menu=false,$area=false) {

        if($menu==false && $area==false)
        require DIR_VIEWS.DIRECTORY_SEPARATOR.$name.EXTENSION;
        else
            {
                $dir = explode(DIRECTORY_SEPARATOR, $menu);
                require DIR_VIEWS.DIRECTORY_SEPARATOR.$dir[0].GEN_HEADER;
                require DIR_VIEWS.DIRECTORY_SEPARATOR.$menu.EXTENSION;
                require DIR_VIEWS.DIRECTORY_SEPARATOR.$area.EXTENSION;
                require DIR_VIEWS.DIRECTORY_SEPARATOR.$dir[0].GEN_FOOTER;
            }
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

