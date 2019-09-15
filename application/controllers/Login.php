<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 10/1/2017
 * Time: 8:03 PM
 */
class Login extends  CI_Controller
{

    public function index(){
        $this->load->view('headfoot/header');
        $this->load->view('headfoot/navbar');
        $this->load->view('login/login');
        $this->load->view('headfoot/footer');
    }

    public function checkUser(){
        $data['email'] =  $this->input->post('email',true);
        $data['password'] =  $this->input->post('password',true);
        if(empty($data['email']) ||empty($data['password'])){
            $this->session->set_flashdata('error','Please check required fields and try again.');
            redirect('login');
        }
        else{
            $data['password'] = hash('SHA1',$data['password']);
           $userdata  = $this->modLogin->checkUser($data);
          //var_dump($userdata[0]);
          if(count($userdata) == 1){
              if($userdata[0]['uStatus'] == 1){
                $useData = array(
                        'uId'=>$userdata[0]['uId'],
                        'firstName'=>$userdata[0]['firstName'],
                        'lastName'=>$userdata[0]['lastName'],
                        'gender'=>$userdata[0]['gender'],
                        'uDate'=>$userdata[0]['uDate']
               );
                $this->session->set_userdata($useData);
                if($this->session->userdata('uId')){
                    redirect('home');
                }
                else{
                    $this->session->set_flashdata('error','Your can\'t login right now.');
                    redirect('login');
                  }
              }
              else if($userdata[0]['uStatus'] == 0){
                  $this->session->set_flashdata('error','Please check your email and activae your account.');
                  redirect('login');
              }
          }
          else{
              $this->session->set_flashdata('error','Your email or password invalid.');
              redirect('login');
          }

        }
    }

    public function logOut(){
        $this->session->set_userdata(array('uId'=>false));
        redirect('login');
    }
}//class here