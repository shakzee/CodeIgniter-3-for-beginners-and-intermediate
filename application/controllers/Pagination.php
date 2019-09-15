<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 8:22 PM
 */
class Pagination extends CI_Controller
{
    public function index(){
        $this->load->library('pagination');
        $config['base_url'] = "http://localhost:8090/codeigniter/index.php/pagination";
        $config['total_rows'] = 200;
        $config['per_page'] = 20;
        $this->pagination->initialize($config);
        echo $this->pagination->create_links();
    }
}   