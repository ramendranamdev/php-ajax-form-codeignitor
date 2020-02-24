<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {

	public function submit(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        // $insert_id = $this->db->insert_id();
        // return $insert_id;      

        $this->db->insert('user',$data);

        return $this->db->insert_id();

    }

    public function getData(){
        $query = $this->db->get('user');
        return $query->result();
    }

    public function lastEditedRow(){
        // $insert_id = $this->db->last_query('user');

        // $this->db->select('id');
        // $this->db->from('user');
        // $insert_id = $this->db->_compile_select();

        $this->db->save_queries = TRUE; //Turn ON save_queries for temporary use.
        $str = $this->db->last_query();
        return $str;
    }

    public function deleteAll()
    {
        # code...
        return $this->db->empty_table('user');
    }

}