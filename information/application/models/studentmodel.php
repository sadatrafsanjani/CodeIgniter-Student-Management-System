<?php

class Studentmodel extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("student");
    }

    function fetch_student($limit, $start) {

        $this->db->limit($limit, $start);
        $this->db->join('department', 'student.student_department = department.department_id');
        $query = $this->db->get("student");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_student_by_roll($student_roll) {

        $query = $this->db->get_where('student',array('student_roll'=>$student_roll));

        return $query->row();
    }

    function save_student($data) {

        $this->db->insert('student', $data);
    }

    function update_student_by_roll($student_roll,$data) {

        $this->db->where('student_roll', $student_roll);
        $this->db->update('student', $data);
    }

    function delete_student_by_roll($student_roll) {

        $this->db->delete('student', array('student_roll' => $student_roll));
    }
} 