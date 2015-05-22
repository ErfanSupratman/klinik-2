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

    function showformpassword($id){
        $this->load->view('template');
    }

    function updatepassword($id){

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

    function deletepas($id){
        $this->m_admin->delpas($id);
        redirect('admin');
    }

    function editpass(){
        $id= $this->input->post('did');
        $data = array(
        'NAMAPASIEN' => $this->input->post('namalengkap'),
        'JENISKELAMIN' => $this->input->post('gender'),
        'ALAMATPASIEN' => $this->input->post('alamat'),
        'KOTAPASIEN' => $this->input->post('kota'),
        'PROPINSIPASIEN' => $this->input->post('prop'),
        'TEMPATLAHIR' => $this->input->post('tlahir'),
        'TANGGALLAHIR' => $this->input->post('tgllahir'),
        'HPPASIEN' => $this->input->post('hp'),
        'BBMPASIEN' => $this->input->post('bbm')
        );

        $this->m_admin->editpas($id, $data);
        $this->viewpas($id);
    }

    function viewpas($id){
        $data['page'] = "Detail - Derma Clinic";
        $data['detailpasien'] = $this->m_admin->vipas($id);
        $this->load->view('admin_detail', $data);
    }

/*-------GLOBAL REKAM PAGE------------------*/
    /* Fungsi halaman rekam*/
    function rekam(){
        $data['page'] = "Rekam Medis - Derma Clinic";
        $this->load->view('rekam_index', $data);
    }

    function addrekam($id){

    }

    function loadrekam(){

    }

    function loadformrekam($id){
        $data['listobat'] = $this->m_admin->getobat();
        $data['listtreatment'] = $this->m_admin->gettreatment();
        $this->load->view('rekam_form', $data);
    }

/*-------GLOBAL OBAT PAGE------------------*/
    /* Fungsi halaman obat*/
    function obat(){
        $data['page'] = "Obat - Derma Clinic";
        $data['listobat'] = $this->m_admin->getobat();
        $this->load->view('obat_index',$data);
    }

    /* Fungsi tambah obat*/
    function tambahobat(){
        $kodebarang = $this->input->post('kodebarang');
        $namabarang = $this->input->post('namabarang');
        $jenisbarang = $this->input->post('jenisbarang');

        $this->m_admin->addobat($kodebarang, $namabarang, $jenisbarang);
        redirect('admin/obat');
    }

    function deleteob($id){
        $this->m_admin->delob($id);
        redirect('admin/obat');
    }

/*-------GLOBAL TREATMENT PAGE------------------*/
    /* Fungsi halaman treatment*/
    function treatment(){
        $data['page'] = "Treatment - Derma Clinic";
        $data['listreatment'] = $this->m_admin->gettreatment();
        $this->load->view('treatment_index', $data);
    }

    function tambahtreatment(){
        $namatreatment = $this->input->post('namatreatment');
        $kategoritreatment = $this->input->post('kategoritreatment');
        
        $this->m_admin->addtreatment($namatreatment, $kategoritreatment);
        redirect('admin/treatment');
    }

    function deletetreatment($id){
        $this->m_admin->deltreat($id);
        redirect('admin/treatment');
    }


/*-------GLOBAL USER PAGE------------------*/
    /* Fungsi halaman user*/
    function user(){
        $data['page'] = "User - Derma Clinic";
        $this->load->view('user_index', $data);
    }
    

    
}