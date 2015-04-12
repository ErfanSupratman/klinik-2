<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_login'));
    }
 

	public function index(){
        $session = $this->session->userdata('islogin');
        
        if ($session == FALSE){
            redirect('login/do_login');
        }elseif($session == TRUE){
            redirect('admin');
        }else
            redirect('login/do_logout');
    }
    
    function do_login(){
        $session = $this->session->userdata('isLogin');
        if($session == TRUE){
            redirect('admin');
        }else{
            $data['page'] = "Login - Klinik ABC";
            $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
            $this->form_validation->set_error_delimiters('<span class ="error">', '</span>');
            
            if ($this->form_validation->run()==FALSE){
            $this->load->view('login', $data);
                
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $cek = $this->m_login->login($username, $password);
            
            if($cek <> 0){
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('username',$username);
                
                redirect('admin');
            } else {
                echo " <script>
                        alert('Percobaan masuk gagal, pastikan username dan atau password benar !');
                        history.go(-1);
                        </script>";
            }
        }
        
        
        }
		
	}
    
    function do_logout(){
        $this->session->sess_destroy();
        redirect('login/do_login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */