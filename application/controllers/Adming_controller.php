<?php

class Adming_controller extends CI_Controller {
  public function __construct(){

parent::__construct();
$this->load->model('ADMING_model');
$this->load->helper('url_helper');
}
    public function index() {
        $this->load->model('ADMING_model');
        $this->load->helper('form');
        $this->load->view('adming');


        $data['societe']=$this->ADMING_model->find('societe');

        $this->load->view('adming',$data);
    }
    public function create_societe(){
      $var = array('nomS' => $_POST['nomS'],
                   'rueS' => $_POST['rueS']);
      $this->ADMING_model->create($var);
      $data['societe']=$this->ADMING_model->find('societe');
      $this->load->view('create_societe',$data);
    }
    public function edit_societe(){
      $var = array('nomS' => $_POST['nomS'],
                   'rueS' => $_POST['rueS'],
                   'villeS' => $_POST['villeS'],
                   'directeurS' => $_POST['directeurS'],
                   'num_rue' => $_POST['num_rue'],
                   'employe' => $_POST['employe']);
      $this->ADMING_model->update($var);
    //  $data['societe']=$this->ADMING_model->find('societe');
      $this->load->view('create_societe',$data);


    }



}
