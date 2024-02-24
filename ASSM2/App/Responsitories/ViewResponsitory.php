<?php

namespace App\Responsitories;

class ViewResponsitory{

    public function viewHome($view, $data =[] ){
        require_once "./src/Views/".$view.".php";
    }

    public function viewListJob($view){
        require_once "./src/Views/pages/job/".$view.".php";
    }
}