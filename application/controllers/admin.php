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
        $data['detailrekam'] = $this->viewrekamperuser($id);
        $data['detailpasien'] = $this->m_admin->vipas($id);
        $this->load->view('admin_detail', $data);
    }

    function viewrekamperuser($id){
        $string='';
        $hasil = $this->m_admin->rekammedisperuser($id);
        $i = 1;
        foreach ($hasil->result() as $row){
            $treatment = $this->m_admin->listtretperuser($id, $row->IDREKAM);
            $obats = $this->m_admin->listobperuser($id, $row->IDREKAM);
            $string = $string.'<tr class="gradeA">
                      <td class="center">'.$i.'</td>
                      <td class="center">'.$row->TANGGALREKAM.'</td>
                      <td class="center">';
                      foreach ($treatment->result() as $trow){
                        $string = $string.$trow->NAMATREATMENT.', ';
                      }
            $string = $string.'</td>
                      <td class="center">';
                      foreach ($obats->result() as $trows){
                        $string = $string.$trows->NAMAOBAT.', ';
                    }
                    $string = $string.'</td>
                    </tr>';
                    $i++;
        }
        return $string;
    }

/*-------GLOBAL REKAM PAGE------------------*/
    /* Fungsi halaman rekam*/
    function rekam(){
        $data['page'] = "Rekam Medis - Derma Clinic";
        $this->load->view('rekam_index', $data);
    }

    function inputrekam(){
        $this->m_admin->tambahrekam();
        redirect('/admin');
    }


    function loadformrekam($id){
        $data['page'] = "Tambah Rekam - Derma Clinic";
        $data['listobat'] = $this->loadobat();
        $data['listtreatment'] = $this->loadtreatment();
        $data['namauser'] = $this->m_admin->getuserbyid($id);
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
        //$kodebarang = $this->input->post('kodebarang');
        $namabarang = $this->input->post('namabarang');
        $jenisbarang = $this->input->post('jenisbarang');

        $this->m_admin->addobat($namabarang, $jenisbarang);
        redirect('admin/obat');
    }

    function deleteob($id){
        $this->m_admin->delob($id);
        redirect('admin/obat');
    }

    function loadobat(){
        $tretque = $this->m_admin->loadobatquery();
        $string = '';
        foreach ($tretque->result() as $row){
            $string = $string.'<div class="checkbox check-success checkbox-circle">
                    <input type="checkbox" name="obatobat[]" value="'.$row->IDOBAT.'" id="'.$row->NAMAOBAT.'">
                    <label for="'.$row->NAMAOBAT.'">'.$row->NAMAOBAT.'</label>
                    </div>';
        }
        return $string;


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

    function loadtreatment(){
        $tretque = $this->m_admin->loadtreatmentquery();
        $string = '';
        foreach ($tretque->result() as $row){
            $string = $string.'<div class="checkbox check-success checkbox-circle">
                    <input type="checkbox" name="trettret[]" value="'.$row->IDTREATMENT.'" id="'.$row->NAMATREATMENT.'">
                    <label for="'.$row->NAMATREATMENT.'">'.$row->NAMATREATMENT.'</label>
                    </div>';
        }
        return $string;
    }


/*-------GLOBAL USER PAGE------------------*/
    /* Fungsi halaman user*/
    function user(){
        $data['page'] = "User - Derma Clinic";
        $this->load->view('user_index', $data);
    }
    

    
}