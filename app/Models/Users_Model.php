<?php
namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model {
    protected $table      = 'users';

    protected $primaryKey = 'user_id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'role',
        'username',
        'password',
        'firstname',
        'lastname',
        'email',
        'date_created',
        'is_deactivated',
        'is_verified'
    ];

    protected bool $allowEmptyInserts = false;
}
?>