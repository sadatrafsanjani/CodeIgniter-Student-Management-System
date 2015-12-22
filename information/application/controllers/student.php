<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

    function __construct(){

        parent::__construct();
    }

    public function update_student($student_roll){

        $data = array();
        $data['title'] = "Update Student";
        $data['heading'] = "Update Student Details";
        $data['result'] = $this->studentmodel->fetch_student_by_roll($student_roll);
        $data['content'] = $this->load->view('update_student',$data,true);
        $this->load->view('master',$data);
    }

    public function update_student_commit(){

        $data = array();
        $student_roll = $this->input->post('roll',true);
        $data['student_name'] = $this->input->post('name',true);
        $data['student_email'] = $this->input->post('email',true);
        $data['student_sex'] = $this->input->post('sex',true);
        $data['student_name'] = $this->input->post('name',true);
        $data['student_semester'] = $this->input->post('semester',true);
        $data['student_department'] = $this->input->post('department',true);
        $data['student_session'] = $this->input->post('session',true);
        $data['student_address'] = $this->input->post('address',true);
        $this->studentmodel->update_student_by_roll($student_roll,$data);

        redirect('site/student');
    }
	
	public function view_student($student_roll){

        $data = array();
        $data['title'] = "View Student";
        $data['heading'] = "View Student Details";
        $data['result'] = $this->studentmodel->fetch_student_by_roll($student_roll);
        $data['content'] = $this->load->view('view_student',$data,true);
        $this->load->view('master',$data);
    }

    public function add_student(){

        $data = array();
        $data['student_roll'] = $this->input->post('roll',true);
        $data['student_name'] = $this->input->post('name',true);
        $data['student_email'] = $this->input->post('email',true);
        $data['student_sex'] = $this->input->post('sex',true);
        $data['student_name'] = $this->input->post('name',true);
        $data['student_semester'] = $this->input->post('semester',true);
        $data['student_department'] = $this->input->post('department',true);
        $data['student_session'] = $this->input->post('session',true);
        $data['student_address'] = $this->input->post('address',true);
        $this->studentmodel->save_student($data);
		$this->markmodel->save_mark($data['student_roll']);

        redirect('site/student');
    }

    public function delete_student($student_roll){

        $this->studentmodel->erase_student($student_roll);

        redirect('site/student');
    }
}