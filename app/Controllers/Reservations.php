<?php
namespace App\Controllers;

class Reservations extends BaseController {
    public function index() {
        if (!session()->get('admin')) {
            return redirect()->to(base_url('auth/login'));
        }

        $data = array(
            'title' => 'Users Dashboard',
            'admin' => session()->get('admin'),
            'users'=> [],
            'equipments' => [],
            'reservations'=> [],
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('reservations\reservations_dashboard', $data)
            .view('include\foot_view');
    }
}