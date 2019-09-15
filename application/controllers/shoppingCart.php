<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 4:35 PM
 */
class shoppingCart extends CI_Controller
{
    public function index(){
        $this->load->library('cart');
        $this->addProduct('iphone 4 s',19,'skziphone',200);
    }


    public function addProduct($name,$qut,$id,$price){
        $data = array(
                'id'=>$id,
                'qty'=>$qut,
                'price'=>$price,
                'name'=>$name,
                'options'=>array('size'=>'L','Color','red')
            );
        $this->cart->insert($data);
    }

    public function displayProduct(){
        $data['myProducts'] = $this->cart->contents();
        //var_dump($data);
        //die();
        $this->load->view('displayProduct',$data);
        //var_dump($myProducts);
        //6175c4d7629b184a36bd00f9f20e09f2
    }
    public  function updateProduct($price,$rowId){
        $data = array('rowid'=>$rowId,'price'=>$price);
        $updateRetrun = $this->cart->update($datas);
        var_dump($updateRetrun);
    }
}