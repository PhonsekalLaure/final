<?php
namespace App\Controllers;

class Index extends BaseController {
    public function index() {
        if (!session()->get('user')) {
            return redirect()->to(base_url('auth/login'));
        }

        $usermodel = model('Users_model');
        $userId = session()->get('user')['id'];
        $user = $usermodel->find($userId);
        $data = array(
            'title' => 'ITSO',
            'user'=>$user
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('main_view', $data)
            .view('include\foot_view');
    }
}
?>