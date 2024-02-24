<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jobs;
use App\Core\Validation;
use App\Core\Sessions;
use App\Core\RenderBase;

class ProjectsController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    /**
     * add là phương thức thêm sản phẩm
     * 
     * @param mixed 
     * @return void
     */
    public function loadViewAdd()
    {
        $this->_renderBase->renderSideBar();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderaddProjects();
        $this->_renderBase->renderFooter();
    }

    public function addJobs()
    {

        if (isset($_POST['add'])) {

            $name = $_POST['name'];
            $content = $_POST['content'];
            $date_start = $_POST['date_start'];
            $date_end = $_POST['date_end'];
            $status = $_POST['status'];
            // Bắt lỗi
            if (Validation::required($name)) {
                Sessions::addSession("name", "Vui lòng nhập tên công việc ");
                return $this->redirect("/?url=JobsController/loadAdd");
            }
            //Thêm jobs
            $jobsModel = new Jobs();
            $jobsModel->addJobs(['name' => $name, 'content' => $content, 'date_start' => $date_start, 'date_end' => $date_end, 'status' => $status]);
            header("Location: " . ROOT_URL . "/?url=JobsController/list");

        }
    }
    /**
     * list là phương thức lấy toàn bộ sản phẩm
     * @param mixed
     * @return void
     */
    public function list()
    {
        $this->load->render('layouts/admin/pages/job/listJob');

    }


    /**
     * update là phương thức chỉnh sửa sản phẩm
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {

        $job = new Jobs;
        $jobOne = $job->getOneJob($id);
        $this->load->render('layouts/admin/pages/job/updateJob', $jobOne);
    }
    public function editJob($id)
    {
        //Sửa công việc
        if (isset($_POST['update'])) {
            $name = $_POST['name'] ?? "";
            $content = $_POST['content'] ?? "";
            $date_start = $_POST['date_start'] ?? "";
            $date_end = $_POST['date_end'] ?? "";
            $status = $_POST['status'] ?? "";

            $jobModel = new Jobs;
            $updateResult = $jobModel->updateJob(['name' => $name, 'content' => $content, 'date_start' => $date_start, 'date_end' => $date_end, 'status' => $status], $id);
            if ($updateResult) {
                header("Location: " . ROOT_URL . "/?url=JobsController/list");
                exit();
            } else {
                echo "Có lỗi xảy ra khi cập nhật công việc.";
            }

        }
    }

    public function delete($id)
    {
        if (isset($_POST['delete'])) {

            $jobModel = new Jobs;
            $resultDelete = $jobModel->deleteJob($id);
            
            if (!$resultDelete) {
                die("Không thể xóa dữ liệu!");
            }
            header("Location:" . ROOT_URL . "/?url=JobsController/list");
        
            
        }
    }
    public function viewOneJob($id){
        $job = new Jobs;
        $jobOne = $job->getOneJob($id);
        $this->load->render('layouts/admin/pages/job/updateJob', $jobOne);
    }
}