<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'johnpork',
                'password' => password_hash('Password1.', PASSWORD_DEFAULT),
                'firstname' => 'John',
                'lastname' => 'Pork',
                'email' => 'admin@itso.com',
                'role' => 'Admin',
                'is_verified' => 1
            ],
            [
                'username' => 'sixseven',
                'password' => password_hash('Password1.', PASSWORD_DEFAULT),
                'firstname' => 'Six',
                'lastname' => 'Seven',
                'email' => 'sadmin@itso.com',
                'role' => 'SAdmin',
                'is_verified' => 1
            ],
        ];

        $this->db->table('users')->insertBatch($data);

        echo "Users seeded successfully.\n";
    }
}
