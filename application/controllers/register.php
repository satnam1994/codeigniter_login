<?php
/**
 *
 */


class Register extends MY_Controller
{

	function index()
	{
		if ( $this->session->userdata('id'))

			return redirect('admin/dashboard');

			$this->load->helper('form');

			$this->load->view('public/admin_register');
	}
    function admin_register(){
	     
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');
	  
        if ( $this->form_validation->run('admin_register') ) {

			$username = $this->input->post('username');

			$password = $this->input->post('password');
			
			$confirm_password = $this->input->post('confirm_password');

			$firstname = $this->input->post('first_name');

			$lastname = $this->input->post('last_name');

			$this->load->model('registermodel');

			$user_name = $this->registermodel->register_valid($username);

		    if(!empty($user_name)){
			  
				$this->session->set_flashdata('registeration_failed', 'Username Already in use.');

				$this->load->view('public/admin_register');

		    }else {
				  
				$data = array(
				
					'id'=> Null,
					'uname'=>$username,
					'pword'=>$confirm_password,
					'fname'=>$firstname,
					'lname'=>$lastname
					
				);

				$insert = $this->db->insert('users',$data);
				
				if(!empty($insert)){ 
				
					$this->session->set_flashdata('Register Successfully', 'You are Register Successfully');
					
					return redirect('http://localhost/ci/index.php/login');
					
				}
		    }
	    }else{
			$this->load->view('public/admin_register');
		}
    }  
}


?>
