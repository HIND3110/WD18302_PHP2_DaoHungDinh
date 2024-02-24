<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\RenderBase;
use App\Models\Admin;

class AdminController extends BaseController{

    private $_renderBase;

    /** 
     * Phải copy này lại*/
    function __construct()
    {

        parent::__construct();


        $this->_renderBase = new RenderBase();
    }
    function AdminController()
    {
        $this->homePageAdmin();
    }

    /**
     * @throws Exception
     */
    function homePageAdmin()
    {

        
        $this->_renderBase->renderSideBar();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderHomePro();
        $this->_renderBase->renderFooter();
     
       
    }

    // function calendar(){
    //     $this-> _renderBase-> renderCalendar();
    // }
  
   
}