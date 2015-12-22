<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

    function __construct(){

        parent::__construct();
    }

    public function update_course($course_id){

        $data = array();
        $data['title'] = "Update Course";
        $data['heading'] = "Update Course Details";
        $data['result'] = $this->coursemodel->fetch_course_by_id($course_id);
        $data['content'] = $this->load->view('update_course',$data,true);
        $this->load->view('master',$data);
    }

    public function update_course_commit(){

        $data = array();
        $course_id = $this->input->post('id',true);
        $data['course_name'] = $this->input->post('name',true);
        $data['course_credit'] = $this->input->post('credit',true);
        $this->coursemodel->update_course_by_id($course_id,$data);

        redirect('site/course');
    }

    public function add_course(){

        $data = array();
        $data['course_id'] = $this->input->post('id',true);
        $data['course_name'] = $this->input->post('name',true);
        $data['course_credit'] = $this->input->post('credit',true);
        $this->coursemodel->save_course($data);

        redirect('site/course');
    }
}