<?php

class Coursemodel extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("course");
    }

    function fetch_course($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("course");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_course_by_id($course_id) {

        $query = $this->db->get_where('course',array('course_id'=>$course_id));

        return $query->row();
    }

    function save_course($data) {

        $this->db->insert('course', $data);
    }

    function update_course_by_id($course_id,$data) {

        $this->db->where('course_id', $course_id);
        $this->db->update('course', $data);
    }

    function delete_course_by_id($course_id) {

        $this->db->delete('course', array('course_id' => $course_id));
    }
} 