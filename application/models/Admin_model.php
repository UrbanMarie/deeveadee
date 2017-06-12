<?php

class ADMIN_Model extends CI_Model {

    protected $table = 'EMPLOYE';
    protected $table2 = 'SOCIETE';
    protected $table3 = 'DVD';
// table a creer    protected $table = 'emploisTPS';

public function __construct() {
        $this->load->database();
}

// 
// public function create($values) {
//     if ($this->db->set($values)->insert($this->table))
//     return $this->db->insert_id();
//     return false;
// }
//
//
// public function find($table) {
//     $query = $this->db->get($table);
//     return $query->result_array();
// }
//
// public function update($where, $value) {
//     return $this->db->where($where)->update($this->table, $value);
// }
//
// public function delete($where) {
//     return $this->db->where($where)->delete($this->table);
// }

}
