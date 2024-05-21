<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {
    public function page_not_found() {
        $data["view_page"] = "errors/html/error_404";
        
        $this->output->set_status_header('404');
        $this->load->view('welcome_message', $data);
    }
}
