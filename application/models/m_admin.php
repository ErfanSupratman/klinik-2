<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Controller {
    
    /*---PASIEN MODAL---*/
    function getpasien(){
        $query = $this->db->get('pasien');
        return $query->result_array();
    }
    
    function addpasien($nama, $gender, $alamat, $kota, $prop, $tlahir, $tgllahir, $hp, $bbm){
    	$this->db->set('NAMAPASIEN', $nama);
    	$this->db->set('JENISKELAMIN', $gender);
    	$this->db->set('ALAMATPASIEN', $alamat);
    	$this->db->set('KOTAPASIEN', $kota);
    	$this->db->set('PROPINSIPASIEN', $prop);
    	$this->db->set('TEMPATLAHIR', $tlahir);
    	$this->db->set('TANGGALLAHIR', $tgllahir);
    	$this->db->set('HPPASIEN', $hp);
    	$this->db->set('BBMPASIEN', $bbm);
    	$this->db->insert('pasien');
    }

    function delpas($id){
        $this->db->where('IDPASIEN', $id);
        $this->db->delete('pasien');
    }

    function vipas($id){
        $this->db->where('IDPASIEN', $id);
        $query = $this->db->get('pasien');
        return $query->result_array(); 
    }

    function editpas($id, $data){
        $this->db->where('IDPASIEN',$id);
        $this->db->update('pasien',$data);
    }

/*--OBAT MODAL--*/
    function getobat(){
        $query = $this->db->get('obat');
        return $query->result_array();
    }

    function addobat($kodebarang, $namabarang, $jenisbarang){
        $this->db->set('KODEOBAT',$kodebarang);
        $this->db->set('NAMAOBAT',$namabarang);
        $this->db->set('JENIS',$jenisbarang);
        $this->db->insert('obat');

    }

    function delob($id){
        $this->db->where('IDOBAT', $id);
        $this->db->delete('obat');
    }


/*---TREATMENT MODAL--*/
    function gettreatment(){
        $query = $this->db->get('treatment');
        return $query->result_array();
    }

    function addtreatment($namatreatment, $kategoritreatment){
        $this->db->set('NAMATREATMENT', $namatreatment);
        $this->db->set('KATEGORITREATMENT', $kategoritreatment);
        $this->db->insert('treatment');
    }
    function deltreat($id){
        $this->db->where('IDTREATMENT', $id);
        $this->db->delete('treatment');
    }

    function loadrekam(){
        $this->db->where('IDX', $id);
        return $query->result_array();

    }

}

?>