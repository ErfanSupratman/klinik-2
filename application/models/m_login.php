<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Controller{
    
    function login($username, $password){
        $this -> db -> select('iduser, username, password, level');
        $this -> db -> from('user');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $password);
 
        $query = $this -> db -> get();
 
        if($query -> num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }
}
?>