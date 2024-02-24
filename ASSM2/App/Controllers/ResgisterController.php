<?php

namespace App\Controllers;

use App\Core\RenderBase;
use App\Core\Validation;
use App\Core\Sessions;
use App\Models\UserModel;

class ResgisterController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }


    public function loadViewRegister()
    {

        if (!empty($_SESSION['user'])) {
            header("Location: /?url=AdminController/homePageAdmin");
        }
        $this->_renderBase->renderRegister();
    
    }


    public function handleRegister()
    {


        if (isset($_POST['register'])) {
            // validation form
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (Validation::required($name) && Validation::required($email) && Validation::required($password)) {
                Sessions::addSession("username", "Vui lòng nhập tên đăng nhập");
                Sessions::addSession("email", "Vui lòng nhập email");
                Sessions::addSession("password", "Vui lòng nhập mật khẩu");
                return $this->redirect("/?url=ResgisterController/loadViewRegister");
            }
            if (!Validation::email($email)) {
                Sessions::addSession("email", "Email không đúng định dạng");
                return $this->redirect("/?url=ResgisterController/loadViewRegister");
            }
            // kiểm tra trước rồi mới new UserModel();

            $userModel = new UserModel();
            $user = $userModel->checkUserExist($_POST["email"]);


            if ($user) {
                echo '<script>alert("Tài khoản đã tồn tại! Xin mời đăng nhập")</script>';
                header("Location: " . ROOT_URL . "/?url=LoginController/loadViewLogin");
            }
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $userModel->registerUser(['username' => $name, 'email' => $email, 'password' => $hash_password, 'fistname' => '', 'lastname' => '', 'status' => '1']);

            header("Location: " . ROOT_URL . "/?url=LoginController/loadViewLogin");

        }


    }



}