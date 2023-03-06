<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'guests';

    protected $allowedFields = ['name', 'email', 'subject', 'message'];

	
	 public function getGuest()
    {     
        return $this->findAll();
    }
}