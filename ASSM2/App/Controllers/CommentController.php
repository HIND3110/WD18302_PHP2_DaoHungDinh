<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Comment;
use App\Core\RenderBase;
use App\Core\Validation;
use App\Core\Sessions;

class CommentController extends BaseController
{
    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    public function addComment($id)
    {
        if (isset($_POST['comment'])) {
            $content = $_POST['content'];
            $id_user = $_SESSION['user']['id'];
            $commentModel = new Comment;
            $commentModel->addComment(['content' => $content, 'id_job' => $id, 'id_user' => $id_user]);
            header("Location: " . ROOT_URL . "/?url=JobsController/edit/$id");
        }
    }

    public function viewComment($id){
        
    }

    public function deleteComment($id)
    {
        if (isset($_POST['deleteComment'])) {
            $comment = new Comment;
            $resultDelete = $comment->deleteComment($id);
            if (!$resultDelete) {
                die("Không thể xóa dữ liệu!");
            }
            header("Location: " . ROOT_URL . "/?url=JobsController/list");


        }
    }

    public function editComment($id){

        if(isset($_POST['editComment'])){
            $content = $_POST['content'];

            $comment = new Comment;
            $updateResult = $comment -> editComment(['content'=>$content], $id);
            
            if(!$updateResult){
                die('Có lỗi xảy ra');
            }
            header("Location: " . ROOT_URL . "/?url=JobsController/list");
        }
    }

}