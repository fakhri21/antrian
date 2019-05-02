<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Mod_resepsionis extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('uuid');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function selanjutnya(){
        return $this->db->order_by('noantrian','desc')
                        ->get_where('hariini',['tglharini'=>date('Y-m-d')]);
    }

    public function selesai(){
        return $this->db->get_where('hariini',['tglharini'=>date('Y-m-d'),'statushariini'=>'3']);
    }

    public function saveData($table,$data){
        return $this->db->insert($table,$data);
    }

    public function delData($table,$where){
        return $this->db->delete($table,$where);
    }

    public function getDataJoinWhere($table,$join,$tbljoin,$where){
        return $this->db->select('*')
                                    ->join($tbljoin,$join)
                                    ->where($where)
                                    ->get($table);
    }

    public function all_history($id){
        return $this->db->get_where('pemeriksaan',['id_pasien'=>$id]);
    }
    
}