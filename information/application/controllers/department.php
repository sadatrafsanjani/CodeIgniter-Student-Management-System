<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department extends CI_Controller {

    function __construct(){

        parent::__construct();
    }

    public function add_department(){

        $data = array();
        $data['department_id'] = $this->input->post('id',true);
        $data['department_name'] = $this->input->post('name',true);
        $this->departmentmodel->save_department($data);

        redirect('site/department');
    }
}