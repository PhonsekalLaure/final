<?php
namespace App\Controllers;

class Auth extends BaseController {

    public function login() {
        $data = array(
            'title' => 'Login',
        );
        return view('include\head_view', $data)
            .view('auth\login_view')
            .view('include\foot_view');

    }

}


?>