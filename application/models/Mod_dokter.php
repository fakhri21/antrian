<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_dokter extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->library('uuid');
		}	

	public function kode_pemeriksaan(){
		$this->db->select('right(pemeriksaan.no_pemeriksaan,3) as kode',false);
		$this->db->order_by('no_pemeriksaan', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('pemeriksaan');
		if($query->num_rows()<>0){
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
		$kodejadi = "PK".$kodemax;
		return $kodejadi;
	}

	public function kode_pasien($no){
		$data = $this->db->get_where('hariini',['no_pasien'=>$no]);
        return $data;
	}

	public function periksa_pasien($no, $tgl){
		$data = $this->db->query("SELECT * FROM hariini JOIN pasien ON (hariini.no_pasien = pasien.no_pasien) WHERE hariini.noantrian = '$no' AND hariini.tglharini = '$tgl' ");
		return $data;
	}

	public function detil_pasien($kode){
		$data = $this->db->query("SELECT * FROM hariini JOIN pasien ON (hariini.no_pasien = pasien.no_pasien) WHERE pasien.id_pasien = '$kode' ");
		return $data;
	}

	public function tambah_pemeriksaan(){
		$id = $this->uuid->v4();
		$no_pasien = $this->input->post('kode_pasien');	
		$bsald = str_replace(".","",$this->input->post('biaya'));
        $biaya = str_replace("Rp","",$bsald);
		$data = array(
			'id_pemeriksaan' => $id,
			'no_pemeriksaan' => $this->input->post('kode_pemeriksaan'),
			'id_pasien' => $this->input->post('kode_pasien'),
			'tgl_pemeriksaan' => $this->input->post('tgl'),
			'keluhan' => $this->input->post('keluhan'),
			'diagnosa' => $this->input->post('diagnosa'),
			'perawatan' => $this->input->post('perawatan'),
			'tindakan' => $this->input->post('tindakan'),
			'no_urut' => $this->input->post('no_antri'),
			'biaya_pemeriksaan' => $biaya
		);
		$status = array('statushariini' => $this->input->post('resep'), 'no_pemeriksaan'=>$this->input->post('kode_pemeriksaan') );
		//$no_periksa = array('no_pemeriksaan' => $this->input->post('kode_pemeriksaan'));
		$id_hari = $this->input->post('id_hari');
		$this->db->insert('pemeriksaan', $data);
		$this->db->update('hariini', $status, array('idharini'=>$id_hari));
		//$this->db->update('hariini', $no_periksa, array('idharini'=>$id_hari));
	}

	public function list_riwayat($no){
		$data = $this->db->query("SELECT * FROM pemeriksaan WHERE id_pasien = '$no'");
		return $data;
	}

	public function detil_riwayat($no){
		$data = $this->db->join('pemeriksaan','pemeriksaan.id_pasien = pasien.no_pasien')
						 ->join('hariini','hariini.no_pemeriksaan = pemeriksaan.no_pemeriksaan')
						 ->get_where('pasien',['pemeriksaan.no_pemeriksaan'=>$no]);
		return $data;
	}

	public function detil_riwayat_resep($key){
		$data = $this->db->join('obat','obat.kode_obat = resep.kode_obat')
						 ->get_where('resep',['resep.no_pemeriksaan'=>$key]);
		return $data;
	}

}

/* End of file Mod_dokter.php */
/* Location: ./application/models/Mod_dokter.php */