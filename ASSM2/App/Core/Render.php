<?php

namespace App\Core;

class Render{

    /**
     * render là hàm dùng để gọi các trang trong Views
     *
     * @param  string $file
     * @param  array $data
     * @return mixed
     */
    public function render($file, $data = array())
    {
        require 'App/Views/' . $file . '.php';

        $viewPath = __DIR__ . '/../Views/' .  $file . '.php';
        // kiểm tra file view có tồn tại không
        // if (!file_exists($viewPath)) {
        //     throw new Exception('Không tìm thấy view nha');
        // }
        extract($data);
    }

    // public function test(){
    //     $this -> render();
    // }
    /**
     * renderModel là hàm dùng để gọi file model trong Models
     *
     * @param  string $file
     * @param  array $data
     * @return string
     */
    public function renderModel($file)
    {
        require 'App/Models/' . $file . '.php';
        return new $file();
    }

   
}