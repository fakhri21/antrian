<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Mod_pasien extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('uuid');
    }

    public function kode_pasien(){
		$this->db->select('right(pasien.no_pasien,3) as kode',false);
		$this->db->order_by('no_pasien', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('pasien');
		if($query->num_rows()<>0){
			$data = $query->row();
			$kode = intval($data->kode)+1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
		$kodejadi = "PS".$kodemax;
		return $kodejadi;
	}
    
    public function getData($id){
        $data = $this->db->get_where('pasien',['id_pasien'=>$id]);
        return $data;
    }
    
    public function getDataRes($table){
        return $this->db->get($table);
    }
    
    public function getDataJoin($table,$join,$tbljoin){
        return $this->db->select('*')
                                    ->join($tbljoin,$join)
                                    ->get($table);
    }
    
    public function saveData($table,$data){
        return $this->db->insert($table,$data);
    }
    
    public function delData($table,$where){
        return $this->db->delete($table,$where);
    }
    

	public function add_pasien(){
		$id = $this->uuid->v4();
		$time = time();
		if(!empty($_FILES['foto']['name'])){
			$foto = $_FILES['foto']['name'];
			$asal = $_FILES['foto']['tmp_name'];
			$namafile = './assets/foto_pasien/' . $foto;
			if(file_exists($namafile)){
				$namafile = str_replace(".jpg","",$namafile);  
				$namafile = $namafile . "_" .$time .".jpg";
				$foto = str_replace(".jpg","",$foto);  
				$foto = $foto . "_" .$time .".jpg";
			}
			move_uploaded_file($asal, $namafile);
			
		}else{
			$foto ="default.jpg";
		}
		$data_detail = array(
			'id_pasien' => $id,
			'no_pasien' => $this->input->post('kode'),
			'nama_pasien' => $this->input->post('nama'),
			'alamat_pasien' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenkel'),
			'usia' => $this->input->post('usia'),
			'no_hp' => $this->input->post('hp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'foto' => $foto
		);
		$this->db->insert('pasien', $data_detail);
	}

	public function view_pasien(){
		return $this->db->get('pasien');
	}

	public function delete_pasien($id){
		$this->db->delete('pasien', array('id_pasien'=>$id));
	}

	public function detail_pasien($id){
		return $this->db->get_where('pasien',['id_pasien'=>$id]);
	}

	public function edit_pasien($id){
        $getdata = $this->getData($id)->row();
		$time = time();
		$foto = $_FILES['foto']['name'];
		$asal = $_FILES['foto']['tmp_name'];
		$namafile = './assets/foto_pasien/' . $foto;
		if(!empty($_FILES['foto']['name'])){
			$namafile = str_replace(".jpg","",$namafile);  
        	$namafile = $namafile . "_" .$time .".jpg";
        	$foto = str_replace(".jpg","",$foto);  
        	$foto = $foto . "_" .$time .".jpg";
            unlink('./assets/foto_pasien/'.$getdata->foto);
            move_uploaded_file($asal, $namafile);
            $data_detail = array(
				'nama_pasien' => $this->input->post('nama'),
                'alamat_pasien' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenkel'),
                'usia' => $this->input->post('usia'),
                'no_hp' => $this->input->post('hp'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'foto' => $foto
		    );
		}else{
            $data_detail = array(
			'nama_pasien' => $this->input->post('nama'),
			'alamat_pasien' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenkel'),
			'usia' => $this->input->post('usia'),
			'no_hp' => $this->input->post('hp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
		    );
        }
		$this->db->update('pasien', $data_detail, array('id_pasien'=>$id));
	}
}