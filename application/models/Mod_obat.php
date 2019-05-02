<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Mod_obat extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function view_kategori(){
        return $this->db->get('kategori_obat');
    }

    public function view_distributor(){
        return $this->db->get('distributor_obat');
    }

    public function save_kategori($kat){
        return $this->db->insert('kategori_obat',['nama_kategori'=>'tes']);
    }

    public function getData($table,$where){
        $data = $this->db->get_where($table,$where);
        return $data;
    }

    public function kode_obat(){
		$this->db->select('right(obat.kode_obat,3) as kode',false);
		$this->db->order_by('kode_obat', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('obat');
		if($query->num_rows()<>0){
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
		$kodejadi = "OBT".$kodemax;
		return $kodejadi;
    }
    
    public function kode_dis(){
		$this->db->select('right(distributor_obat.kode_distributor,3) as kode',false);
		$this->db->order_by('kode_distributor', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('distributor_obat');
		if($query->num_rows()<>0){
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode,6,"0",STR_PAD_LEFT);
		$kodejadi = "DIS".$kodemax;
		return $kodejadi;
	}

	public function get_resep($id){
		return $this->db->join('obat','obat.kode_obat = resep.kode_obat')
						->get_where('resep',['no_pemeriksaan'=>$id])->result();
	}

	public function obat_terjual(){
		return $this->db->join('obat','obat.kode_obat = resep.kode_obat')
						->join('hariini','hariini.no_pemeriksaan = resep.no_pemeriksaan')
						->where(['hariini.statushariini'=>'2'])
						->get('resep');
	}
}