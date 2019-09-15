<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 4:25 PM
 */
class calendar extends CI_Controller
{
    public function index(){



        $this->load->library('calendar');
        $myarray =  array(
                        3=>"http://www.shakzee.com",
                        19=>"http://www.google.com",
                        14=>"http://www.youtube.com",
                        1=>"http://www.humtum.com",
                        18=>"http://www.tumhum.com"
                    );
        echo $this->calendar->generate(2009,2,$myarray);

    }
}