<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 10/1/2017
 * Time: 6:26 PM
 */
class ModRegister extends  CI_Model
{
    public function checkUser($data){
        return $this->db->get_where('users',array('email'=>$data['email']));

    }

    public function addUser($data)
    {
       return  $this->db->insert('users',$data);
    }

    public function checkLink($link){
        return $this->db->select('*')
            ->from('users')
            ->where('uLink',$link)
            ->get();
    }

    public function activateUser($link){
        $this->db->where('uLink',$link);
        return $this->db->update('users',array('uStatus'=>1,'uLink'=>$link.'activate'));
    }
}