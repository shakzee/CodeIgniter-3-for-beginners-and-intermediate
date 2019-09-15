<?php

/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/11/2017
 * Time: 11:44 PM
 */
class Home extends CI_Controller
{


    public function index()
    {
        if($this->session->userdata('uId')){
            $this->load->view('headfoot/header');
            $this->load->view('headfoot/navbar');
            $this->load->view('homeContent');
            $this->load->view('headfoot/footer');
        }
        else{
            $this->session->set_flashdata('error','Please login Now.');
            redirect('login');
        }
    }




    public function anotherMethod()
    {
        $this->load->view('headfoot/header');
        $this->load->view('headfoot/navbar');
        $this->load->view('anotherHomeContent');
        $this->load->view('headfoot/footer');
    }
    public function thirdMethod()
    {
        $this->load->view('headfoot/header');
        $this->load->view('headfoot/navbar');
        $this->load->view('thirdView');
        $this->load->view('headfoot/footer');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

        function anotherFunctionx(){
            $this->load->helper('url');
            $segment = array('home','login');
            //echo site_url($segment);
            //echo base_url('application/view');
            ///echo  current_url();
            ///echo  uri_string();
            //echo index_page();
            //echo anchor('home/myfunctionxx/tow/one','My Title','class="mytitle"');
            $arr =  array(
                'width'=>600,
                'height'=>600,
                'scrollbars'=>600,
                'status'=>600,
                'width'=>600,
                'width'=>600
            );
            echo anchor_popup('home/popup','click me',$arr);
        }

        public function typographyHelper(){
            $this->benchmark->mark('code_start');
            $this->load->helper('xml');
            $string = "Herre is Shehzad Ahmed from google.com and please subscribe my chanel";
            //echo $string = nl2br_except_pre($string);
            $this->benchmark->mark('code_end');
            echo $this->benchmark->elapsed_time('code_start', 'code_end');
        }

        public function textHelper(){
            $this->load->helper('text');
            $string = "Here is Shehzad Ahmed from google.com and please subscribe my chanel.<h1>welcome</h1> <?php echo 'working';?>";
            echo highlight_phrase($string,'google.com','<span style="color:olive">','</span>');
            //echo highlight_code($string);
            // $myarray = array('shakzee.com','google.com');
            //echo word_censor($string,$myarray,'badbody');
            //echo character_limiter($string,4);
            //echo word_limiter($string,4);
        }
        public function stringHelper(){
            $this->load->helper('string');
            $mystring = "www'shakzee\"shakzee\"";
            echo strip_quotes($mystring);
            //echo quotes_to_entities($mystring);
            //echo reduce_multiples($mystring,',');
          //echo   strip_slashes($mystring);

            //echo reduce_double_slashes($mystring);
            //echo   str_repeat('s',10);
            /*for ($i=1; $i<=10 ;$i++){
                echo $i;
                echo alternator('string one here','string two here','string three here').'<br>';
            }*/
            //echo random_string('nozero',16);
        }


        public function securityHelper(){
            $this->load->helper('security');
           // echo "<img src='".base_url('assets/1503146119.9839.jpg')."'>";

            echo strip_image_tags("Here is string and its image <img src='".base_url('assets/1503146119.9839.jpg')."'>");
            //echo hash('md5','shakzee.com');
        }


        public function numberHelper(){
            /*$this->load->helper('number');
            echo byte_format(777777777).'<br>';
            echo byte_format(12345678910).'<br>';
            echo byte_format(10.6);*/
            $this->load->helper('path');
            $file = APPPATH.'../assets/css/style.css';
            $tret = set_realpath($file,true); // Prints '/etc/php5/apache2/php.ini'
            var_dump($tret);

        }

        public function inflectoreHelper(){
            $this->load->helper('inflector');
            echo singular('girls').'<br>';
            echo plural('boy');
            echo camelize('shakzee.com hellow hi boy and girls').'<br>';
            echo underscore('shakzee.com hellow hi boy and girls').'<br>';
            echo humanize('shakzee.com_hellow_hi_boy_and_girls');
            $mystring = is_countable("%%%%%");
            var_dump($mystring);
        }


        public  function HTMLHelper(){
            $this->load->helper('html');
            echo heading('Learn Codeigniter from shakzee.com',3,array('class'=>'className','id'=>'idName'));
            echo img(base_url('assets/1503146119.9839.jpg'),'',array('alt'=>'shakzee.com'));
            echo link_tag('assets/css/style.css');
            $list = array('red','green','blue','olive');
            echo ul($list,array('class'=>'myclass'));
            echo ol($list,array('class'=>'myclass'));
            echo meta('description','here is shakzee.com');
            echo doctype('html4-trans');
            echo 'shakzee.com'.'again shakzee.com';

        }

        public  function formHelper(){
            $this->load->helper('form');
            $attri = array('class'=>'myclass','id'=>'myid');
            $myHidden = array('author'=>'Shakzee','blogTitle'=>'shakzee');
            $myinput = array('name'=>'xyz','class'=>'xyz','placeholder'=>'Here is shakzee');
            $option = array('one'=>'one','two'=>'two');
            $multOption = array('one'=>'one','two'=>'two','three'=>'three','four'=>'four');

           echo  form_open_multipart('home/myform',$attri,$myHidden);
           echo form_hidden($myHidden);
           echo form_input($myinput);
            echo form_password($myinput);
            echo form_upload(array('name'=>'userImage'));
            echo form_textarea('xyz','here is value','class = "myclass"');
            echo form_dropdown('shakzee',$option,'two','class="myclass"');
            echo form_multiselect('multiselect',$multOption,array('one','two'),'class="myclass"');
            echo form_checkbox('newsLetter','accept',false,array('onClick'=>'mymethod()'));
            echo form_radio('gender','male',true,'class="myclass"');
            echo form_radio('gender','female','','class="myclass"');
            echo form_submit('submit','submit');
           echo form_close();
        }

        public function myform(){
            echo 'form working..';
        }

        public  function fileHelper(){
            $this->load->helper('file');
            //$Content = file_get_contents(APPPATH.'../assets/css/style.css');
            //var_dump($Content);
            /*$myWite = write_file(APPPATH.'../assets/css/style.css','h5{color:white;}','r+');
            if ($myWite){
                echo 'success';
            }
            else{
                echo 'false here';
            }*/

            /*$deleteFiles = delete_files(APPPATH.'../assets/css/');
            var_dump($deleteFiles);*/

        }

    public function emailHelper(){
        $this->load->helper('email');
        /*$myEmail = valid_email('infoshakzee.com');
        if ($myEmail){
            echo 'Correct Email';
        }
        else{
            echo 'Wrong Email';
        }*/
        $myEmail = send_email('info@shakzee.com','Dummy Email','I am shakzee.com');
        if ($myEmail){
            echo 'Email sent.';
        }
        else{
            echo 'Email not sent to info@shakzee.com';
        }
    }


    public function download()
    {
        $this->load->helper('download');
        $mytext =  "Here is shehzad Ahmed from shakzee.com";
        $fileName = "shakzee.php";
        //force_download($fileName,$mytext);
        force_download(APPPATH.'../assets/1503146119.9839.jpg',NULL);
        //var_dump($ret);
    }

    public  function  shakzee(){
      echo   site_url();
    }

    public function captcha()
    {


        $myarray = array(
                        'img_path'=>APPPATH."../assets/",
                        'img_url'=>base_url('assets/'),
                        'font_path'=>'pathere',
                        'img_width'=>'150',
                        'img_height'=>50,
                        'font_size'=>15,
                        'word'=>rand(4000,400000),
                        'colors'=>
                        array(
                           'background'=>array(255,256,555),
                           'border'=>array(252,226,535),
                           'text'=>array(115,236,445),
                           'grid'=>array(30,50,578)
                            )
                        );
        //var_dump($myarray);
        $data['captcha'] = create_captcha($myarray);
        //var_dump($feedbackFromCaptcha);
        $this->load->view('captcha',$data);

    }



    public function popup(){
        $this->load->helper('url');
        redirect('home');
    }
    public function myfunctionxx($one,$two)
    {
        $this->load->helper('url');
        echo  uri_string();
    }

    public function login()
    {
        $this->load->helper('url');
        $this->load->view('login');
    }


    public function checkUser(){
        $data['emailValue'] =  $this->input->post('email',true);
        $data['passwordValue'] =  $this->input->post('password',true);
        $this->load->model('modHome');
        $this->modHome->saveData($data);
        //var_dump($data);

    }
    public function anotherFunction($one,$two = null){
        echo "another function working...".$one.$two;
    }

    function dummy(){

        /*$this->load->model("modHome");
        $data['actualValue'] = $this->modHome->getValue();
        $data['title'] = "This is my title";
        $this->load->view('firstView',$data);*/

        /*        $mydata['firstValue'] = "Here is first Value";
                $mydata['secondValue'] = "Second Value";
                $this->load->model('modHome');
                $this->modHome->printName($mydata);*/

        //$this->modHome->modFunction();
        //$this->modHome->anotherMethod();
        /*      $data['title'] = "Welcome in Codeigniter series.";
        $data['age'] = 12;
        $this->load->view('firstView',$data);*/
    }
}