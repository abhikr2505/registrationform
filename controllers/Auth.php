<?php


class Auth extends CI_Controller
{
    public function register()
    {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('phone','phone','required');
    $this->form_validation->set_rules('password','password','required');
    
    if($this->form_validation->run()==false)
    {
        $this->load->view('register');
    }
    else{


        $this->load->model('Auth_model');
        $this->Auth_model->insert_data();
        
        
        $this->session->set_flashdata('msg','your account created successfully');
        redirect(base_url().'index.php/Auth/register');

    }

    }
}

?>