<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_keluhan extends CI_Model{
    var $table = 'keluhan';
    
    function __construct() {
        parent::__construct();
    }
    
    function get_data(){
        return $this->db->get($this->table)->result();;
    }
    
    function count_data($kolom){
        $this->db->where('status_keluhan',$kolom);
        return $this->db->get($this->table)->num_rows();        
    }
    
    function get_id($deskrip_keluhan,$tgl_keluhan){
        $this->db->where(array('deskrip_keluhan' => $deskrip_keluhan,'tgl_keluhan' => $tgl_keluhan));
        $q = $this->db->get($this->table);
        return $q->result();
    }
    
    function get_byid($id_keluhan) {
        $this->db->where('id_keluhan', $id_keluhan);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
    function insert($keluhan){
        $this->db->insert($this->table, $keluhan);
    }
    
    function update($id_keluhan, $keluhan){
        $this->db->where('id_keluhan', $id_keluhan);
        $this->db->update($this->table, $keluhan);
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

