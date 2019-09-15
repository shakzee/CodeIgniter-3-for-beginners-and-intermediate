<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 9/17/2017
 * Time: 4:16 PM
 */
class Mydatabase extends  CI_Controller
{
    public function index()
    {

        $this->load->view('example');
        //$this->load->model('ModHome');
        //$this->ModHome->databaseMetaData();
        //$this->ModHome->infoDatabase();

        /*$myArary = array(
            'firstName'=>'Sidra ali Khan',
            'lastName'=>'Ali',
            'uDate'=>date('Y:M:D h:i:sa'),
            'email'=>'Sidra@hotmail.com',
            'password'=>'shakee123',
            'gender'=>'Female'
        );
        $this->load->model('ModHome');
        $this->ModHome->affected_rows($myArary);*/
        //$this->ModHome->myChaining();
        //$this->ModHome->myTruncate();
        //$this->ModHome->myEmpty();
        //$this->ModHome->myDelete();

        /*$myarray = array(
            'firstName'=>'Shehzad',
            'lastName'=>'Ahmed'
        );
        $this->ModHome->myUpdate($myarray);*/


            /*$myArray = array(
                            array(
                                'firstName'=>'Sidra Khan',
                                'lastName'=>'Ali',
                                'uDate'=>date('Y:M:D'),
                                'email'=>'Sidra@hotmail.com',
                                'password'=>'shakee123',
                                'gender'=>'Female'
                            ),
                            array(
                                'firstName'=>'Suhail ',
                                'lastName'=>'Khan',
                                'uDate'=>date('Y:M:D'),
                                'email'=>'Suhail@hotmail.com',
                                'password'=>'Suhail123',
                                'gender'=>'Male'
                            )

                    );
            $this->ModHome->MyInsertBatch($myArray);*/
            //echo json_encode($myArray);
            //var_dump($myArray);


        /*$myArray  = array(
            'firstName'=>'Sidra',
            'lastName'=>'Ali',
            'uDate'=>date('Y:M:D'),
            'email'=>'Shakzee@hotmail.com',
            'password'=>'shakee123',
            'gender'=>'Male'
        );
        $this->ModHome->MyInsert($myArray);*/

        //$this->ModHome->countAll();
        //$this->ModHome->myLimit();
        //$this->ModHome->myOrderBy();
        //$this->ModHome->my_not_like();
        //$this->ModHome->my_or_like();
        //$this->ModHome->mylike();

        //$this->ModHome->where_not_in();
        //$this->ModHome->myor_where_in();
        //$this->ModHome->mywhere_in();

        //$this->ModHome->orWhere();
        //$this->ModHome->mywhere();
        //$this->ModHome->myfrom();
       /* $this->ModHome->select_min();
        $this->ModHome->select_max();
        $this->ModHome->select_avg();
        $this->ModHome->select_sum();*/

        //$this->ModHome->myselect();
        //$data['allUser'] = $this->ModHome->getAllUsers();
        //$this->load->view('database/home',$data);

    }
    
}