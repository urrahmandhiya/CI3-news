<?php 
class Landingpage extends CI_Controller {
    public function view($landingpage = 'home'){
        if (! file_exists(APPPATH.'views/pages/'. $landingpage.'.php')) {
            show_404();
        }

        $data['title'] = ucfirst($landingpage); //ToUppercase the first Letter
        
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'. $landingpage, $data);
        $this->load->view('templates/footer',$data);
    }
}