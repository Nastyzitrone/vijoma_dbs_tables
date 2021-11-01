<?php
class Pages extends CI_Controller {

    public function view($page = "home")
    {
        $path = APPPATH.'views/pages/'.$page.'.php';
        $path = str_replace("/", "\\", $path);
        if(! file_exists($path))
        {
                // Oups nicht gefunden
                echo('heyyy');
                die($path);
                show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

