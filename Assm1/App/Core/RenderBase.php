<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderSideBar(){
        $this->load->render('layouts/client/sidebar');
    }
    public function renderHeader(){
        $this->load->render('layouts/client/header');
    }

    public function renderHomePro(){
        $this->load->render('layouts/client/home_product');
    }

    public function renderFooter(){
        $this->load->render('layouts/client/footer');
    }

    public function renderProjects(){
        $this->load->render('layouts/client/projects');
    }
}