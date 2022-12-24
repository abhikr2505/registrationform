<?php

class Auth_model extends CI_Model{

    public function insert_data()
    {
        // $formArray=array();
        // $this->Auth_model->create($formArray);
        
        
        $formArray=array(
            'name'=>$this->input->post('name'),
            'email'=> $this->input->post('email'),
            'phone'=>$this->input->post('phone'),
            'password'=>$this->input->post('password'),
            // 'created_at'=>$this->input->post('date('Y-m-d H:i:s')')
        );
        $this->db->insert('users',$formArray);
        


    } 
}
?>