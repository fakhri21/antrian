<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Mod_antrian extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->library('uuid');
    }
    
    public function lastantri(){
        $date = date('Y-m-d');
        return $this->db->order_by('nomor_antrian','desc')
                        ->get_where('antrian',['date_antrian'=>$date]);
    }
    
    public function nextantri($a){
        $date = date('Y-m-d');
        $id = $this->uuid->v4();
        return $this->db->insert('antrian',['id_antrian'=>$id,'nomor_antrian'=>$a,'date_antrian'=>$date]);
    }
}