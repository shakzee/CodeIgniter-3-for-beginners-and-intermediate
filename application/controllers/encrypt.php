<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 5:49 PM
 */
class encrypt extends CI_Controller
{
    public function index(){
        $this->load->library('encrypt');
        $string =  "shakzee";
        $encryptd = "DFZDNRFngfQNT7rUO+xEARh+w2aa8zEEy4TDVyOdonjIkgh3seFmzuOiQbeUgsrM4gfuYIQpLsMHVX7Tu+/idA==";
        //echo $this->encrypt->encode($string);
        echo $this->encrypt->decode($encryptd);
    }
}