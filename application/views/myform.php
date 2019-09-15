<?php
/**
 * Created by PhpStorm.
 * User: Shehzad
 * Date: 8/20/2017
 * Time: 6:20 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>UPload library in Codeigniter</h1>
    <?php
       $fileOption =  array('name'=>'userImg','class'=>'myclass');
        echo form_open_multipart('upload/submitform','');
        echo form_upload($fileOption);
        echo form_submit('upload','upload');
        echo form_close();
    ?>
</body>
</html>
