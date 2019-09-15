<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 10/1/2017
 * Time: 8:12 PM
 */
class ModLogin extends  CI_Model
{
    public function checkUser($data){
        return $this->db->get_where('users',$data)->result_array();
    }
}