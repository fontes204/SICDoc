<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:22
 */
class AreaDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarArea(Area $area)
    {
        if($this->insert($area->parametro()))
            echo 1;
        else
            echo 0;
    }
}