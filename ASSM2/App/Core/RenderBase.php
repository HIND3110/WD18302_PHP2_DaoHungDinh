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

    public function renderaddProjects(){
        $this->load->render('layouts/client/addprojects');
    }

    public function renderLogin(){
        $this->load->render('layouts/client/pages/login');
    }

    public function renderRegister(){
        $this->load->render('layouts/client/pages/register');
    }

    public function renderforgotPass(){
        $this->load->render('layouts/client/pages/forgotpass');
    }
}