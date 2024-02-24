<?php

namespace App\Models;

class Comment extends BaseModel
{

    protected $name = "CommentModel";
    public $tableName = 'comment';

    public $table = "comment";
    public function __construct()
    {
        parent::__construct();
    }

    public function create(array $data)
    {

    }
    public function getAllWithPaginate(int $limit, int $offset)
    {

    }
    public function addComment($data)
    {
        return $this->insert($this->table, $data);
    }
    public function getAllComment($id_job)
    {
        $data = $this->select('name,content,comment.id')->table('comment')->join('users', 'comment.id_user = users.id')->where('id_job', '=', $id_job)->get();
        return $data;
    }

    public function deleteComment($id)
    {
        return $this->table('comment')->where('id', '=', $id)->delete();
    }

    public function editComment($data, $id){
        return $this->table('comment')->where('id', '=',  $id)->update($data);
    }


}