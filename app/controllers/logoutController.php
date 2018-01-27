<?php

/**
 * Created by PhpStorm.
 * User: Mac
 * Date: 08/09/16
 * Time: 08:48
 */
class LogoutController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function exit_()
    {
//        Session::init();
        Session::destruir();
        header('location: '.URL);
        exit;
    }
}