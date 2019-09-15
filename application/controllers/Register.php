<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 10/1/2017
 * Time: 5:57 PM
 */
class Register extends  CI_Controller
{
    public function index(){
        $this->load->view('headfoot/header');
        $this->load->view('headfoot/navbar');
        $this->load->view('registration/newUser');
        $this->load->view('headfoot/footer');
    }
    public function newUser(){
        $data['firstName'] = $this->input->post('firstName',true);
        $data['lastName'] = $this->input->post('lastName',true);
        $data['email'] = $this->input->post('email',true);
        $data['password'] = $this->input->post('password',true);
        if(
            empty($data['firstName']) || empty($data['lastName'])
            || empty($data['email']) || empty($data['password'])
        )
        {
            $this->session->set_flashdata('error','Please check required fields.');
            redirect('register');
        }
        else{
            $checkUser = $this->modRegister->checkUser($data);

            if ($checkUser->num_rows() > 0){
                $this->session->set_flashdata('error','Your are already registered.');
                redirect('register');
            }
            else{
                $data['password'] = hash('SHA1',$data['password']);
                $data['uLink'] = random_string('alnum',16);
                $addUser =  $this->modRegister->addUser($data);
                if($addUser){
                    if($this->sendLink($data))
                    {
                        $this->session->set_flashdata('error','We have just sent you and email please check your email and try again.');
                        redirect('register');

                    }
                    else{
                        $this->session->set_flashdata('error','We can\'t send you email right now please try again.');
                        redirect('register');
                    }
                }
                else{
                    $this->session->set_flashdata('error','not added.');
                    redirect('register');
                }
            }
        }


    }
    public function confirmUser($link=null){
        if(!empty($link)){
            $check = $this->modRegister->checkLink($link);
            if($check->num_rows() == 1)
            {
                $userstatus = $this->modRegister->activateUser($link);
                if($userstatus){
                    $this->session->set_flashdata('error','Your account is activated.');
                    redirect('register');
                }
                else{
                    $this->session->set_flashdata('error','We can\'t activate your account right now.');
                    redirect('register');
                }
            }
            else
            {
                $this->session->set_flashdata('error','Your link is invalid.');
                redirect('register');
            }
        }
        else{
            $this->session->set_flashdata('error','Please check your link and try again.');
            redirect('register');
        }
    }
    private function sendLink($data){
        $config = array(
            'useragent' => 'CodeIgniter',
            'protocol' => 'mail',
            'mailpath' => '/usr/sbin/sendmail',
            'smtp_host' => 'localhost',
            'smtp_user' => 'codeigniter3@shakzee.com',
            'smtp_pass' => 'codeigniter3',
            'smtp_port' => 25,
            'smtp_timeout' => 55,
            'wordwrap' => TRUE,
            'wrapchars' => 76,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'validate' => FALSE,
            'priority' => 3,
            'crlf' => "\r\n",
            'newline' => "\r\n",
            'bcc_batch_mode' => FALSE,
            'bcc_batch_size' => 200,
        );
        $message = anchor('register/confirmUser/'.$data['uLink'],'Confrim Email','class="myclass"');
        $this->email->from('codeigniter3@shakzee.com','shakzee');
        $this->email->to($data['email']);
        $this->email->subject('Confirm');
        $this->email->message($message);
        $this->email->set_mailtype('html');
        if($this->email->send()){
            return true;
        }
        else{
            return false;
        }
    }
}//class ends here