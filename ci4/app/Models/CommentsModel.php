<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'guests';

    protected $allowedFields = ['name', 'email', 'subject', 'message'];

    public function getComments()
    {       
        return $this->findAll();
    }
}