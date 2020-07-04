<?php 
namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = ['namadpn','namablkng','email','password','date_update'];
}

