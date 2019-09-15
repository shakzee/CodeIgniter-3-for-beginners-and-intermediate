<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/12/2017
 * Time: 12:40 AM
 */
class ModHome extends CI_Model
{

    public function databaseMetaData()
    {

        $query = $this->db->field_data('users');
        foreach($query as $table){
            echo $table->name.'<br>';
            echo $table->type.'<br>';
            echo $table->max_length.'<br>';
            echo $table->primary_key.'<br>';
        }

     /*  $query =  $this->db->field_exists('udemy','users');
       var_dump($query);*/

       /* $query = $this->db->list_fields('users');
        var_dump($query);*/

        /*$query = $this->db->table_exists('usersxx');
        var_dump($query);*/

        /*$query = $this->db->list_tables();
        foreach($query as $table){
            echo $table.'<br>';
        }*/
    }
    
    public function infoDatabase()
    {
        echo  $this->db->version();
       // echo  $this->db->platform();
       //echo  $this->db->count_all('users');
    }

    public function affected_rows($data)
    {
        $this->db->insert('users',$data);
        echo $this->db->last_query();
        //secho $this->db->affected_rows();
    }

    public function myChaining()
    {
       $query =  $this->db->select('*')
            ->from('users')
            ->limit(1)
            ->where('uId',1)
            ->get()
           ->result_array();
       var_dump($query);
    }
    
    public function myDelete()
    {
        $this->db->where('uId',1);
        $query = $this->db->delete('users');
        var_dump($query);
    }
    public function myEmpty()
    {
       $this->db->empty_table('users');
    }

    public function myTruncate()
    {
        $this->db->from('users');
        $this->db->truncate();
    }


    public function myUpdate($myValue){
        $this->db->where('uId',1);
        $query = $this->db->update('users',$myValue);
        var_dump($query);
        //update tableNmae set col=dkfjdkf,col=dfdklfj where uId=1;
    }

    public function MyInsertBatch($myvalues)
    {
        $query = $this->db->insert_batch('users',$myvalues);
        var_dump($query);
    }
    public function MyInsert($myvalues)
    {
         $this->db->insert('users',$myvalues);
         return $query = $this->db->insert_id();

         //var_dump($query);
    }

    public function countAll()
    {
         $query = $this->db->count_all('users');
         //$query = $this->db->count_all_results('users');
         var_dump($query);
    }
    public function myLimit()
    {
        $this->db->limit(1,1);
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        var_dump($query->result());
    }
    public function myOrderBy()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('uId DESC,firstName ASC');
        $query =  $this->db->get();
        foreach ($query->result() as $myRecord)
        {
            echo $myRecord->firstName.'<br>';
        }
        //var_dump($query);

    }
    
    public function mygroupby(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->group_by('gender');
        $query =  $this->db->get();
        var_dump($query->result());
        echo $this->db->last_query();
    }

    public function my_not_like(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->not_like('firstName','s');
        $query =  $this->db->get();
        var_dump($query->result());
        //echo $this->db->last_query();
        //select * from users where firstName NOT like '%s%'
    }
    public function my_or_like(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('firstName','s','before');
        $this->db->or_like('lastName','a');
        $query =  $this->db->get();
        var_dump($query->result());
        //echo $this->db->last_query();
        //select * from users where firstName like '%s%' OR lastName LIKE '%a%'
    }

    public function mylike(){
        $myarray = array('sss','eee','sidra');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('firstName','s','both');
        $query =  $this->db->get();
        var_dump($query->result());
        echo $this->db->last_query();
        //select * from users where firstName like '%s%'
    }

    public function where_not_in(){
        $myarray = array('sss','eee','sidra');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where_not_in('firstName',$myarray);
        $query =  $this->db->get();
        var_dump($query->result());
        // echo $this->db->last_query();
        //select * from users where firstName NOT IN('sss','eee','sidra') OR
    }

    public function myor_where_in(){
        $myarray = array('sss','eee','sidra');
        $myarray2 = array('soni','waqar','z');

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where_in('firstName',$myarray);
        $this->db->or_where_in('firstName',$myarray2);
        $query =  $this->db->get();
        var_dump($query->result());
       // echo $this->db->last_query();
        //select * from users where firstName IN('sss','eee','sidra') OR
    }

    public function mywhere_in(){
        $myarray = array('Soni','waqar','sidra');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where_in('firstName',$myarray);
       $query =  $this->db->get();
       var_dump($query->result());
        //select * from users where uId IN(99,0,3)
        //echo $this->db->last_query();
    }


    public function orWhere(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('uId',4);
        $this->db->or_where('uId',6);
        $this->db->or_where('uId',9);
        $this->db->or_where('uId',1);
       $query =  $this->db->get();
       //var_dump($query);
        echo $this->db->last_query();
       //select * from users where uId = 4 OR uId = 1;
    }
    public function mywhere(){
        //$myarray = array('uId !='=>2,'firstName'=>'Soni');
        $query = "uId = 2 AND firstName = 'Soni'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($query);
       $query = $this->db->get();
       var_dump($query->result());

       //select * from users where uId=2 AND firstName='shehzad'
        // echo $this->db->last_query().'<br>';

    }
    public function myfrom(){
        $this->db->select('uId,firstName,lastName');
        $this->db->from('users');
        $query = $this->db->get();
        print_r($query->result());
        //SELECT * from users;
        //SELECT uId,firstName,lastName from users
    }

    public function select_max()
    {
        $this->db->select_max('uId');
        $query = $this->db->get('users');
        print_r($query->result());


        //select max(uId) as age from users
    }

    public function select_min()
    {
        $this->db->select_min('uId');
        $query = $this->db->get('users');
        print_r($query->result());


        //select min(uId) as age from users
    }


    public function select_avg()
    {
        $this->db->select_avg('uId');
        $query = $this->db->get('users');
        print_r($query->result());


        //select avg(uId) as age from users
    }


    public function select_sum()
    {
        $this->db->select_sum('uId');
        $query = $this->db->get('users');
        print_r($query->result());


        //select sum(uId) as age from users
    }

    public function myselect(){
        $this->db->select('*');
        $query = $this->db->get('users');
        print_r($query->result());

        //select firstName,lastName,email from users where firstName="shehzad";
    }

    public function getWhere(){
        $myarray = array('uId'=>2);
        $query = $this->db->get_where('users',$myarray);
        var_dump($query->result());
        //SELECT * from users where uId=2

    }

    public function compiledQuery(){
       //echo  $this->db->get_compiled_select('users');
        $this->db->limit(1,10);
        echo $this->db->get_compiled_select('users');
    }


    public function getAllUsers(){
        return $this->db->get('users');
        //SELECT * from users
    }












    public function modFunction(){
        echo "model working...<br>";
    }
    public function anotherMethod(){
        echo "another method working..";
    }

    public function printName($name){
        echo $name['secondValue'];
    }


    public function getvalue(){
        return "Shakzee.com";
    }

    public  function saveData($values){
        var_dump($values);
    }



}//model ends here