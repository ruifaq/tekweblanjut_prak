<?php 
namespace App\Models;

use CodeIgniter\Model;

class Login_User extends Model{
    protected $table = 'login';
    protected $primarykey = 'id';
    protected $allowedFields = ['namadpn','namablkng','email','password']; 
}