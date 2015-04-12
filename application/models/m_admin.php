<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Controller {
    
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

    function getobat(){
        $query = $this->db->get('obat');
        return $query->result_array();
    }

    function addobat($a){
        $this->db->set('a',$a);
        $this->db->insert('obat');

    }

}

?>