<?php
/**
 *
 */
class RegisterModel extends CI_Model
{
  function register_valid($username)
  {
    $q = $this->db->where(array('uname' => $username))
                  ->get('users');
    if( $q->num_rows() ){
		
	  return $q->row()->uname;
	  
    }
  }
}


?>
