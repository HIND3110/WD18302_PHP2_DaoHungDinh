<?php

namespace App\Controllers;

use App\Model\ProjectsModel;
use App\Core\RenderBase;

class ProjectsController extends BaseController{
    private $_project;
    private $_renderBase;

    public function __construct()
    {
        // Kiểm tra admin đăng nhập !
        // Session::checkSession();

        // Giá trị mặc định cho data
        $data = array();

        // Ghi đề phương thức kết nối CSDL
        parent::__construct();
        $this->_renderBase = new RenderBase();

        // // Khởi tạo đối tượng Jobs Model
        // $this->_project = new ProjectModel();
        // $this->_category = new ();
    }

    function ProjectsController()
    {
        $this->Projects();
    }
    /**
     * list là phương thức lấy toàn bộ sản phẩm
     * @param mixed
     * @return void
     */


    function Projects()
    {
        // // Lấy toàn bộ loại sản phẩm
        // $data['product'] = $this->_product->getAll();
        // $data['category'] = $this->_category->getAll();
        // Render data và view 
        $this->_renderBase->renderSideBar();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderProjects();
        $this->_renderBase->renderFooter();

    }

}