<?php

class Dvd_Model extends CI_Model {

   public function __construct() {
       $this->load->database();
   }

   public function get_dvd($table) {
       $query = $this->db->get($table);
       return $query->result_array();
   }

   public function insert($table) {
      if ($this->db->insert("DVD", $data)) {
         return true;
      }
   }

   // public function get_playlist($playlists = FALSE)
   // {
   //         if ($playlist === FALSE)
   //         {
   //                 $query = $this->db->get('DVD');
   //                 return $query->result_array();
   //         }
   //
   //         $query = $this->db->get_where('DVD', array('playlist' => $playlists));
   //         return $query->row_array();
   // }


    }
// memo
