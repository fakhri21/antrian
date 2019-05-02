<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Antrian extends CI_Controller{
    public function __construct(){
        parent::__construct();
        error_reporting(0);
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index(){
        $data['title'] = "Antrian Klinik";
        $data['lastantri'] = $this->Mod_antrian->lastantri()->num_rows();
        $this->defaulttheme->Display('antrian/index',$data);
    }

    public function nextantri(){
        $lastantri = $this->Mod_antrian->lastantri()->num_rows();
        $a = $lastantri + 1;
        $inEnter = $this->Mod_antrian->nextantri($a);
        if($inEnter){
            $this->session->set_flashdata('item', 'SILAHKAN AMBIL NOMOR ANTRIAN ANDA');
            redirect('antrian');
        }
    }

    public function tampil_antrian(){
        $data['title'] = "Antrian Klinik";
        $data['lastantri'] = $this->Mod_antrian->lastantri()->num_rows();
        $data['selanjutnya'] = $this->db->order_by('no_urut','desc')
                                        ->get_where('pemeriksaan',['tgl_pemeriksaan'=>date('Y-m-d')])
                                        ->row();
        $this->defaulttheme->Display('antrian/tampil_antrian',$data);
    }

    public function json_antrian(){
        $data['title'] = "Antrian Klinik";
        $data['lastantri'] = $this->Mod_antrian->lastantri()->num_rows();
        $data['selanjutnya'] = $this->db->order_by('no_urut','desc')
                                        ->get_where('pemeriksaan',['tgl_pemeriksaan'=>date('Y-m-d')])
                                        ->row_array();
        $json = json_encode($data);
        echo $json;
    }

}   