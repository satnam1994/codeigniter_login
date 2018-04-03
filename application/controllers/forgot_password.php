<?php
/**
 *
 */


class Forgot_password extends MY_Controller
{

	function index()
	{
			$this->load->helper('form');

			$this->load->view('public/forgot_password');
	}
}


?>
