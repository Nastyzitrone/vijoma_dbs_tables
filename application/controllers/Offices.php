<?php
class Offices extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('action_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['offices'] = $this->action_model->getOffices();
        $data['title'] = 'Standorte';

        $this->load->view('templates/header', $data);
        $this->load->view('offices/index', $data);
        $this->load->view('templates/footer', $data);
    }

    
    public function view()
    {
        $data['offices_item'] = $this->action_model->getOffices();
        if (empty($data['offices_item']))
        {
                show_404();
        }

        $data['title'] = $data['offices_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('offices/view', $data);
        $this->load->view('templates/footer');
    }
}

