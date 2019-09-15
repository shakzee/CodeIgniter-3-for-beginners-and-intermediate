<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 5:23 PM
 */
class email extends CI_Controller
{
    public function index(){
        $this->load->library('email');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->from('Your@htomail.com','Your Name');
        $this->email->to('info@shakzee.com');
        $this->email->cc('infotwo@hotmail.com');
        $this->email->bcc('info3@hotmail.com');
        $this->email->subject('Dummy subject here');
        $this->email->message('Hi buddy..!');
        $this->email->initialize($config);

        $semdtp = $this->email->send();
        if($semdtp)
        {
            echo 'We have sent you an email.';
        }
        else{
            echo 'error here.';
        }
       // var_dump($semdtp);

    }
}