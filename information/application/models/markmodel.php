<?php

class Markmodel extends CI_Model{

    function __construct(){

        parent::__construct();
    }

    function record_count() {

        return $this->db->count_all("mark");
    }

    function fetch_mark($limit, $start) {

        $this->db->limit($limit, $start);
		$this->db->join('student', 'mark.student_roll = student.student_roll');
        $query = $this->db->get("mark");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    function fetch_mark_by_id($mark_id) {

        $query = $this->db->get_where('mark',array('mark_id'=>$mark_id));

        return $query->row();
    }

    function save_mark($data) {

		$data['mark_number'] = 0;
        $this->db->insert('mark', $data);
    }
	
	function update_mark_by_id($mark_id,$data) {

        $this->db->where('mark_id', $mark_id);
        $this->db->update('mark', $data);
    }

    function delete_mark_by_id($mark_id) {

        $this->db->delete('mark', array('mark_id' => $mark_id));
    }
} 