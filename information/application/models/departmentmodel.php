<?php

class Departmentmodel extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("department");
    }

    function fetch_department($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("department");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_department_by_id($department_id) {

        $query = $this->db->get_where('department',array('department_id'=>$department_id));

        return $query->row();
    }

    function save_course($data) {

        $this->db->insert('department', $data);
    }

    function delete_department_by_id($department_id) {

        $this->db->delete('department', array('department_id' => $department_id));
    }
} 