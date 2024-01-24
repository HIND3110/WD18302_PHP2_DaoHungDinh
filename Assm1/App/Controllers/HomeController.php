<?php

namespace App\Controllers;

use App\Core\RenderBase;

class HomeController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
    */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
        // dữ liệu ở đây lấy từ responsitories hoặc model
        // $data = [
        //     "products" => [
        //         [
        //             "id" => 1,
        //             "name" => "Sản phẩm"
        //         ]
        //     ]
        // ];

                
        $this->_renderBase->renderSideBar();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderHomePro();
        $this->_renderBase->renderFooter();
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model
      
    }

}