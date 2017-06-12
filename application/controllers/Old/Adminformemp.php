<?php

class Adminformemp extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ADMIN_Model');
        $this->load->helper('url_helper');
    }


//     public function index()
// 	{
// //		$data['playlist']= $this->Dvd_Model->get_dvd($playlist);
// 		$this->load->view('form_employe');
// 	}

    public function index()
   {

           $this->load->helper(array('form', 'url'));
           $this->load->helper('security');
           $this->load->library('form_validation');



            $form=$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required|xss_clean');
            $form=$this->form_validation->set_rules('prenom', '"Le prénom"', 'trim|required|xss_clean');
            $form=$this->form_validation->set_rules('numSecu', '"Le numSecu"', 'trim|required|xss_clean');
            $form=$this->form_validation->set_rules('adresse', '"adresse"', 'trim|required|xss_clean');

           if ($this->form_validation->run() == FALSE)
           {
                   $this->load->view('form_employe');
           }
           else
           {
                   $this->load->view('formsuccess');
           }
   }


   public function update_db()
   {

   }
    // public function index() {
    //     $this->load->model('ADMING_Model');
    //     //
    //      $data['employe']=$this->ADMING_Model->find('employe');
    //     // //$data = $this->utilisateur_model->find(array('nom' => 'bob'));
	// 	$this->load->view('form_employe',$data);
	// }



  }
