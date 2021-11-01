<?php
class Vijoma extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('action_model');
        $this->load->helper('url_helper');
    }

    public function index($page = "index"){
        if(! file_exists(APPPATH.'views/vijoma/'.$page.'.php'))
        {
             // Oups nicht gefunden
             die(APPPATH.'views/pages/'.$page.'.php');
             //show_404();
        }

        $data['offices'] = $this->action_model->getOffices();
        $data['title'] = 'Standorte';

        $this->load->view('templates/header', $data);
        $this->load->view('vijoma/index', $data);
        $this->load->view('templates/footer', $data);
    }


}

