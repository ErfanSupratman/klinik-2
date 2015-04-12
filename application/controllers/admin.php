<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
     
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_admin'));
        
        if($this->session->userdata('isLogin') == FALSE){
            redirect('login/do_login');
        }else{
            $user = $this->session->userdata('username');
        }
    }
/*-------GLOBAL PASIEN PAGE------------------*/    
   function index(){
        $data['page'] = "Dashboard - Derma Clinic";
        $data['listpasien'] = $this->m_admin->getpasien();
        $this->load->view('admin_index',$data);
    }

    /*fungsi registrasi pasien*/
    function registerpas(){
        $nama = $this->input->post('namalengkap');
        $gender = $this->input->post('gender');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $prop = $this->input->post('prop');
        $tlahir = $this->input->post('tlahir');
        $raw_date = $this->input->post('tgllahir');
        $tgllahir = DateTime::createFromFormat('m/d/Y', $raw_date)->format('Y-m-d');
        $hp = $this->input->post('hp');
        $bbm = $this->input->post('bbm');
        $this->m_admin->addpasien($nama, $gender, $alamat, $kota, $prop, $tlahir, $tgllahir, $hp, $bbm);

        redirect('admin');
    }


/*-------GLOBAL REKAM PAGE------------------*/
    /* Fungsi halaman rekam*/
    function rekam(){
        $this->load->view('rekam_index');
    }


/*-------GLOBAL OBAT PAGE------------------*/
    /* Fungsi halaman obat*/
    function obat(){
        $this->load->view('obat_index');
    }

    /* Fungsi tambah obat*/
    function tambahobat(){

    }

/*-------GLOBAL TREATMENT PAGE------------------*/
    /* Fungsi halaman treatment*/
    function treatment(){
        $this->load->view('treatment_index');
    }


/*-------GLOBAL USER PAGE------------------*/
    /* Fungsi halaman user*/
    function user(){
        $this->load->view('user_index');
    }
    

    
}