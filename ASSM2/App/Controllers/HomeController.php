<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;


class HomeController extends BaseController{


    private $_renderBase;

    /** 
     * Phải copy này lại*/
    function __construct()
    {
        $data = [];
        parent::__construct();

        $this->_renderBase = new RenderBase();
    }
    function HomeController()
    {
        $this->homePage();
    }


    function homePage()
    {
        if (!empty($_SESSION['user'])) {
            header("Location: /?url=AdminController/homePageAdmin");
        }
        $this->_renderBase->renderLogin();
    }

    
}