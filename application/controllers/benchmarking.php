<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 4:04 PM
 */
class benchmarking extends  CI_Controller
{
    public function index(){
        $this->benchmark->mark('startCode');
            for ($i = 1; $i<=100000; $i++)
            {
                echo $i;
            };
        $this->benchmark->mark('endCode');
            for ($i = 1; $i<=10000; $i++)
            {
                echo $i;
            };
        $this->benchmark->mark('thirmarkCode');

       echo  '<br>'.$this->benchmark->elapsed_time('endCode','thirmarkCode').'<br>';
       $this->load->view('benchmark');
        echo $this->benchmark->memory_usage();


    }
}