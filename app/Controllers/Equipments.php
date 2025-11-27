<?php
namespace App\Controllers;

class Equipments extends BaseController {
    public function index() {
        if (!session()->get('admin')) {
            return redirect()->to(base_url('auth/login'));
        }

        $equipmentmodel = model('Equipments_Model');


        $data = array(
            'title' => 'Equipment Dashboard',
            'admin' => session()->get('admin'),
            'equipments' => $equipmentmodel->where('is_deactivated', 0)->findAll()
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('equipments\equipments_dashboard', $data)
            .view('include\foot_view');
    }

}
?>
