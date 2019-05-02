<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kasir extends CI_Model {
	public function __construct(){
		parent::__construct();
		
	}

	/*public function data_rincian($no){
		$data = $this->db->query("SELECT * FROM hariini JOIN pasien ON (hariini.no_pasien=pasien.no_pasien) JOIN pemeriksaan ON (hariini.no_pemeriksaan=pemeriksaan.no_pemeriksaan) JOIN resep ON (resep.no_pemeriksaan=hariini.no_pemeriksaan) WHERE hariini.statushariini = '2' AND hariini.no_pemeriksaan = '$no' ");
		return $data;
	}*/
	
	public function finish_stts($no){
		$dataa = array('statushariini' => '3');
		$this->db->update('hariini', $dataa, array('no_pemeriksaan'=>$no));
	}

	

}

/* End of file Mod_kasir.php */
/* Location: ./application/models/Mod_kasir.php */