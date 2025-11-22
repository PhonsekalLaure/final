<?php
namespace App\Controllers;

use App\Models\Users_Model;

class Users extends BaseController {

    public function index() {
        if (!session()->get('user')) {
            return redirect()->to(base_url('auth/login'));
        }

        $usermodel = new Users_Model();

        $data = [
            'title' => 'Users Dashboard',
            'user' => session()->get('user'),
            'users' => $usermodel->where('is_deactivated', 0)->findAll()
        ];

        return view('include/head_view', $data)
            .view('include/nav_view')
            .view('users/users_dashboard', $data)
            .view('include/foot_view');
    }

    public function add() {
        $data = [
            'title' => 'Add User',
        ];
        return view('include/head_view', $data)
            .view('include/nav_view')
            .view('users/add_view')
            .view('include/foot_view');
    }

    public function insert() {
        $usermodel = new Users_Model();

        $data = [
            'role' => $this->request->getPost('acctype'),
            'firstname' => $this->request->getPost('firstname'),
            'lastname'  => $this->request->getPost('lastname'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'is_deactivated' => 0,
            'is_verified'    => 0,
            'date_added'     => date('Y-m-d H:i:s')
        ];

        $usermodel->insert($data);

        return redirect()->to('users')->with('success', 'User added successfully!');
    }

    public function view($id) {
        $usermodel = new Users_Model();

        $data = [
            'title' => 'View User',
            'user' => $usermodel->find($id)
        ];

        return view('include/head_view', $data)
            .view('include/nav_view')
            .view('users/view_view', $data)
            .view('include/foot_view');
    }

    public function edit($id) {
        $usermodel = new Users_Model();

        $data = [
            'title' => 'Edit User',
            'user'  => $usermodel->find($id)
        ];

        return view('include/head_view', $data)
            .view('include/nav_view')
            .view('users/edit_view', $data)
            .view('include/foot_view');
    }

    public function update($id) {
        $usermodel = new Users_Model();

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname'  => $this->request->getPost('lastname'),
            'email'     => $this->request->getPost('email'),
        ];

        // Only update password if provided
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $usermodel->update($id, $data);

        return redirect()->to('users')->with('success', 'User updated successfully!');
    }

    public function delete($id) {
        $usermodel = new Users_Model();

        $user = $usermodel->find($id);
        if (!$user) {
            return redirect()->to('users')->with('error', 'User not found.');
        }

        // Soft delete
        $usermodel->update($id, ['is_deactivated' => 1]);

        return redirect()->to('users')->with('success', 'User deleted successfully.');
    }
}
?>
