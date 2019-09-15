<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 8:01 PM
 */
class session extends  CI_Controller
{
    public  function index(){
        if ($this->session->flashdata('notfound')){
            echo $this->session->flashdata('notfound');
            var_dump('here');
        }
        else
            {
                $mysession = array(
                    'id'=>1,
                    'name'=>'shakzee',
                    'age'=>12,
                    'city'=>'karachi',
                    'university'=>'IQRA university'
                );
                $this->session->set_userdata($mysession);
                redirect('session/checkSession');
            }

    }

    public  function checkSession(){
        $userId = $this->session->userdata('id');
        $alldata = $this->session->userdata();

        if ($userId){
            echo 'value exists'.$userId;
            var_dump($alldata);
        }
        else{
            $this->session->set_flashdata('notfound','errore here');
            redirect('session');
        }
    }


    public  function sessionDestory(){
        $this->session->sess_destroy();
    }
}