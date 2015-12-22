<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mark extends CI_Controller {

    function __construct(){

        parent::__construct();
    }

    public function update_mark($mark_id){

        $data = array();
        $data['title'] = "Update Mark";
        $data['heading'] = "Update Student Mark";
        $data['result'] = $this->markmodel->fetch_mark_by_id($mark_id);
        $data['content'] = $this->load->view('update_mark',$data,true);
        $this->load->view('master',$data);
    }

    public function update_mark_commit(){

        $data = array();
        $mark_id = $this->input->post('id',true);
        $data['mark_number'] = $this->input->post('mark',true);
        $this->markmodel->update_mark_by_id($mark_id,$data);

        redirect('site/mark');
    }

    public function delete_mark($mark_id){

        $this->markmodel->erase_student($mark_id);

        redirect('site/mark');
    }
}