<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 7:48 PM
 */
class input extends CI_Controller
{
    public function index(){
        echo 'working index';
    }

    public function login(){
        $this->load->view('login');
    }

    public function checkUser(){
        $data['email'] = $this->input->get_post('email');
        $data['password'] = $this->input->get_post('password');
        var_dump($data);
    }
ss}