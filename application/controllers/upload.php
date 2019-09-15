<?php
/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 6:17 PM
 */
class upload extends CI_Controller
{

    public function index(){

    }
    public function myform(){
        $this->load->view('myform');
    }
    public function submitform(){
        $config['upload_path'] = realpath(APPPATH.'../assets/images/');
        $config['allowed_types'] = 'gif|jpg|png';
        /*$config['max_size'] = 100;
        $config['max_width'] = 1020;
        $config['max_height'] = 768;*/
        $this->upload->initialize($config);
        $myreturn = $this->upload->do_upload('userImg');
        if($myreturn)
        {
            echo 'Your file has been successfully uploaded.';
        }
        else
        {
            echo $this->upload->display_errors();
        }

    }
}