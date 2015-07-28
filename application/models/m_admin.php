<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
    
    /*---PASIEN MODAL---*/
    function getpasien(){
        $query = $this->db->get('pasien');
        return $query->result_array();
    }

    function getuserbyid($id){
        $data = array(
            'IDPASIEN =' => $id);
        $this->db->where($data);
        $query = $this->db->get('pasien');
        return $query->row();
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

    function addobat($namabarang, $jenisbarang){
        //$this->db->set('KODEOBAT',$kodebarang);
        $this->db->set('NAMAOBAT',$namabarang);
        $this->db->set('JENIS',$jenisbarang);
        $this->db->insert('obat');

    }

    function delob($id){
        $this->db->where('IDOBAT', $id);
        $this->db->delete('obat');
    }

    function loadobatquery(){
       $query = $this->db->get('obat');
        return $query;
    }


/*---TREATMENT MODAL--*/
    function gettreatment(){
        $query = $this->db->get('treatment');
        return $query->result_array();
    }

    function loadtreatmentquery(){
       $query = $this->db->get('treatment');
        return $query;
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

    function tambahrekam()
    {
        $namapasien = $this->input->post('namapassien');
        $tanggal = date("Y-m-d");
        $idpasien = $this->input->post('idpasien');
        $data1 = array(
            'IDPASIEN' => $idpasien,
            'TANGGALREKAM' => $tanggal);
        $this->db->insert('rekammedis', $data1);

        $arr = array(
            'TANGGALREKAM =' => $tanggal,
            'IDPASIEN =' => $idpasien
            );

        $this->db->where($arr);
        $que = $this->db->get('rekammedis');
        $row = $que->row();
        $rekamid = $row->IDREKAM;

    foreach($this->input->post('obatobat') as $obat){
        $data2 = array(
            'IDREKAM' => $rekamid,
            'TANGGAL' => $tanggal,
            'IDOBAT' => $obat);

        $this->db->insert('rm_obat', $data2);
    }

    foreach($this->input->post('trettret') as $tret){
        $data3 = array(
            'IDREKAM' => $rekamid,
            'TANGGAL' => $tanggal,
            'IDTREATMENT' => $tret);

        $this->db->insert('rm_treatment', $data3);

        }
    }

    function loadrekamperuser($id){
        $string = "SELECT DISTINCT * FROM rekammedis  join pasien on pasien.IDPASIEN=rekammedis.IDPASIEN join rm_treatment on rm_treatment.IDREKAM=rekammedis.IDREKAM join treatment on treatment.IDTREATMENT=rm_treatment.IDTREATMENT
join rm_obat on rm_obat.IDREKAM=rekammedis.IDREKAM join obat on rm_obat.IDOBAT=obat.IDOBAT
where pasien.IDPASIEN=".$id;
    $query = $this->db->query($string);
    return $query;
    }

    function rekammedisperuser($id){
        $query = $this->db->get_where('rekammedis',array('IDPASIEN' => $id));
        return $query;
    }

    function listtretperuser($id, $idrekam){
        $string = "SELECT rm_treatment.IDREKAM, TANGGAL, NAMATREATMENT FROM rekammedis, rm_treatment, treatment where rekammedis.IDREKAM = ".$idrekam." AND IDPASIEN =".$id." AND rm_treatment.IDTREATMENT=treatment.IDTREATMENT AND rekammedis.IDREKAM = rm_treatment.IDREKAM";
        $query = $this->db->query($string);
        return $query;
    }

    function listobperuser($id, $idrekam){
         $string = "SELECT rm_obat.IDREKAM, TANGGAL, NAMAOBAT FROM rekammedis, rm_obat, obat where rekammedis.IDREKAM = ".$idrekam." AND IDPASIEN =".$id." AND rm_obat.IDOBAT=obat.IDOBAT AND rekammedis.IDREKAM = rm_obat.IDREKAM";
        $query = $this->db->query($string);
        return $query;
    }

}
?>