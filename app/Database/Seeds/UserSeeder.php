<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Use the model to avoid re-writing validation rules, etc.
        $usermodel = model('Users_model');

        // Check if the admin user already exists to prevent errors on re-running the seeder
        if ($usermodel->where('username', 'admin')->countAllResults() === 0) {
            $data = [
                'username'       => 'admin',
                'password'       => password_hash('Password1.', PASSWORD_DEFAULT),
                'fullname'       => 'Administrator',
                'email'          => 'admin@itso.com',
                'role'           => 'ITSO',
                'is_deactivated' => 0,
            ];

            $usermodel->insert($data);

            echo "Admin user created successfully.\n";
        } else {
            echo "Admin user already exists.\n";
        }
    }
}
