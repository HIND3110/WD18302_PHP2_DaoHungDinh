<?php

namespace App\Models;



class UserModel extends BaseModel{
    protected $name ="UserModel";
    public $tableName = 'users';

    public $table = "users";


    public function __construct(){
  
        parent::__construct();
    }

    public function getAllUser(){
        return $this->getAll()->get();
    }

    public function checkUserExist($email){
        return $this->select()->where('email', '=', $email)->first();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data){
        return  $this->insert($this->table,$data);
    }

    public function create($data){
        // var_dump($this->tableName);
    }

    public function changePass($data, $email){
        return $this->table($this->table)->where('email', '=',  $email)->update($data);
    }
}