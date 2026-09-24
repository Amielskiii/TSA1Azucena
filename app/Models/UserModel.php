<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'username',
        'full_name',
        'email',
        'created_at'
    ];

    protected $returnType = 'array';

    public function getDemoUser()
    {
        return [
            'id' => 1,
            'username' => 'timothy',
            'full_name' => 'Timothy Amiel Azucena',
            'email' => 'timothy@example.com',
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
}