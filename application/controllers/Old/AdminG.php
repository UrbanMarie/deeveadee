<?php

class AdminG extends CI_Controller {

// CRUD categorie
         function __construct() {
            parent::__construct();
            $this->load->model('ADMING_Model');
            $this->load->helper('url');

         }

         public function index() {
            $query = $this->db->get("CATEGORIE");
            $data['categorie'] = $this->ADMING_Model->get_categorie('CATEGORIE');

            $this->load->helper('url');
            $this->load->view('admin',$data);
         }

        //  public function add_categorie_view() {
        //     $this->load->helper('form');
        //     $this->load->view('admin');
        //  }

         public function add_categorie() {
            $this->load->model('ADMING_Model');
            //$data['categorie']= $this->Dvd_Model->insert('CATEGORIE');
            $data = array(
               'idCAT' => $this->input->post('idCAT'),
              'nomCAT' => $this->input->insert('nomCAT')

            );

            $this->ADMING_Model->insert($data);

            // $query = $this->db->get("CATEGORIE");
            // $data['records'] = $query->result();
            $this->load->view('admin',$data);
        }
        //  public function update_categorie_view() {
        //     $this->load->helper('form');
        //     $roll_no = $this->uri->segment('3');
        //     $query = $this->db->get_where("categorie",array("roll_no"=>$roll_no));
        //     $data['records'] = $query->result();
        //     $data['old_roll_no'] = $roll_no;
        //     $this->load->view('Stud_edit',$data);
        //  }
         //
        //  public function update_categorie(){
        //     $this->load->model('Stud_Model');
         //
        //     $data = array(
        //        'roll_no' => $this->input->post('roll_no'),
        //        'name' => $this->input->post('name')
        //     );
         //
        //     $old_roll_no = $this->input->post('old_roll_no');
        //     $this->Stud_Model->update($data,$old_roll_no);
         //
        //     $query = $this->db->get("stud");
        //     $data['records'] = $query->result();
        //     $this->load->view('Stud_view',$data);
        //  }
         //
        //  public function delete_categorie() {
        //     $this->load->model('Stud_Model');
        //     $roll_no = $this->uri->segment('3');
        //     $this->Stud_Model->delete($roll_no);
         //
        //     $query = $this->db->get("stud");
        //     $data['records'] = $query->result();
        //     $this->load->view('Stud_view',$data);
        //  }
      }
